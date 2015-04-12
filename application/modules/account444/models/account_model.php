<?php

class account_model extends CI_Model {
    
    
    public function add_card($card_data){    
    
$data = array(
  'card_name' => $card_data['card_name'] ,
   'card_no' => $card_data['card_no'],
    'card_status' => 0,
    'date' => date('Y-m-d')
);

$this->db->insert('user_card', $data);
return ($this->db->affected_rows() != 1) ? false : true;    
    
}

public function verify( $salt ) 
{
    $query = $this->db->select('id, active')->from('users')->where('salt', $salt)->get()->row();
     
    if ($query) 
    {
        if($query->active==1){
            return false;
        }
        $new = array('active' => 1);
        $this->db->where('id', $query->id)->update('users', $new);
        return $query->id;
    }
    
    return false;
}

public function update_password($userId='', $password)
{
      $new = array('password' => $password);
       return   $this->db->where('id', $userId)->update('users', $new);
       
}

public function get_user_datas($id) {        
    $this->db->select('id, first_name, last_name, email, password');         
    $this->db->where('id',$id);
    return $this->db->get('users')->row();
}

public function my_cards($id) {
    
    $this->db->select('card_id,card_no,card_type,card_status,last_charged_date,priority');
    $this->db->where('user_id', $id);
    $query = $this->db->get('user_card');
    return $query->result();
}

    public function billing_history($id){

        $this->db->select('booked_experiences.*, exp.experience, exp.type');
        $this->db->join('experience as exp','booked_experiences.experience_id = exp.experience_id');
        $this->db->where('purchaser_id', $id);
        $query = $this->db->get('booked_experiences');
        return $query->result_array();
    }
    
    public function earning_history($id){

        $this->db->select('booked_experiences.*, exp.experience, exp.type');
        $this->db->join('experience as exp','booked_experiences.experience_id = exp.experience_id');
        $this->db->where('exp.user_id', $id);
        $query = $this->db->get('booked_experiences');
        return $query->result_array();
    }

    public function save_card($card=false) {
            $this->db->insert('user_card',$card);
        }
    
    public function delete_credit_card($card_id){
        $this->db->delete('user_card',array('card_id'=>$card_id));
    }
    
    public function booked_experience_list($id){
        $this->db->select('experience.experience,booked_experiences.date_sold, experience.experience_id, experience.destination, users.first_name, users.last_name, experince_photo.photo');
        $this->db->join('booked_experiences','experience.experience_id = booked_experiences.experience_id','left');
        $this->db->join('users','experience.user_id = users.id');
        $this->db->join('experince_photo','experience.experience_id = experince_photo.experience_id');
        $this->db->where('experience.user_id', $id);
        $this->db->group_by('experience.experience_id');
        $query = $this->db->get('experience');
        return $query->result_array();
    }
    
    public function get_contact_info($user_id=false) {
        
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('contact_info');
        return $query->row();    
    }
    
    public function update_contact_info($address,$phone) {
        $this->db->where('user_id',  $this->user->id);
        $response= $this->db->get('contact_info')->result();
        if(!$response)
        {
            return $this->db->query("insert into contact_info (address, phone, user_id,date) values('".$address."', '".$phone."', ".$this->user->id.",".date('Y-m-d').")");
        }else{
        
            $this->db->where('user_id',  $this->user->id);
            $this->db->set('address',$address);
            $this->db->set('phone',$phone);
            return $this->db->update('contact_info');
         
        }
    }
    
    public function set_as_alternate() {
        $this->db->where('user_id',  $this->user->id);
        $this->db->set('priority',0);
        return $this->db->update('user_card');
        
    }
    
    public function set_as_primary($card_id=false) {
        $this->db->where('user_id',  $this->user->id);
        $this->db->where('card_id',  $card_id);
        $this->db->set('priority',1);
        return $this->db->update('user_card');
        
    }
    
    public function update_card_type($id=false, $card_type=false) {
        $this->db->where('card_id',$id);
        $this->db->set('card_type',$card_type);
        return $this->db->update('user_card');
    }
    
    public function update_profile_info($data)
    {
        $this->db->where('id',$this->user->id);
        return $this->db->update('users',$data);
    }
    
    public function get_user_data()
    {
        $this->db->select('*');
        $this->db->where('id',$this->user->id);
        return $this->db->get('users')->row();
    }
    
    public function get_great_for($id = false) {
                
        $this->db->select('tags.tag_id as tag_id, tags.tag_name as tag_name');
        $this->db->join('users_profile_interests', 'users.id = users_profile_interests.user_id','left');
        $this->db->join('tags', 'users_profile_interests.tag_id = tags.tag_id');
        $this->db->where('users.id', $id);
        return $this->db->get('users')->result();
        
    }
    
    public function get_tags(){
        return $this->db->get('tags')->result();
    }
    
      public function update_user_interest($interest, $id) {

        $this->db->where('user_id', $id);
        $this->db->delete('users_profile_interests');

        foreach ($interest as $value) {
            $user_interest[] = array(
                "tag_id" => $value,
                "user_id" => $this->user->id,
                "date" => date('Y-m-d')
            );
        }
        if (!empty($user_interest)) {
            return $this->db->insert_batch("users_profile_interests", $user_interest);
        }
    }
     public function get_user_likes($user_id){
        $this->db->select('count(experience_like.*)');
        $this->db->join('experience','experience.experience_id = experience_like.experience_id');
        $this->db->where('experience_like.user_id',$user_id);
        $count = $this->db->count_all_results('experience_like');
        return $count;
     }
     
      public function get_user_booked($user_id){                  
        $this->db->select('count(experience.experience_id)');
        $this->db->join('booked_experiences','experience.experience_id = booked_experiences.experience_id','left');
        $this->db->where('experience.user_id',$user_id);
        $count = $this->db->count_all_results('experience');
        return $count;
     }
     
     public function user_liked_experience($user_id) {
         
        $this->db->select('experience.*,experince_photo.photo,min(experience_tickets.ticket_price) as ticket_min_price,min(packages.price_per_person) as package_min_price');
        $this->db->join('users','users.id = experience_like.user_id');
        $this->db->join('experience','experience.experience_id = experience_like.experience_id');
        $this->db->join('experince_photo','experience.experience_id = experince_photo.experience_id');
        $this->db->join('experience_tickets','experience.experience_id = experience_tickets.experience_id','left');
        $this->db->join('packages','experience.experience_id = packages.experience_id','left');
        $this->db->where('experience_like.user_id', $user_id);
        $this->db->group_by('experience.experience_id');
        $query = $this->db->get('experience_like');
        return $query->result_array();
     }
     
     public function completed_experience_list($id){
        $this->db->select('experience.experience,experience.end_date, experience.experience_id, experience.destination, users.first_name, users.last_name, experince_photo.photo');
        $this->db->join('users','experience.user_id = users.id','left');
        $this->db->join('experince_photo','experience.experience_id = experince_photo.experience_id','left');
        $this->db->where('user_id', $id);
        $this->db->where('experience.end_date <= CURDATE()- INTERVAL 1 DAY');
        $this->db->group_by('experience.experience_id');
        $query = $this->db->get('experience');
        return $query->result_array();
    }
    
     public function get_completed_experience($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('end_date <= CURDATE()- INTERVAL 1 DAY');
        $count = $this->db->count_all_results('experience');
        return $count;
     }
     
     public function get_total_comments(){
      
    }
    
    public function get_total_likes() {
        
        
    }
}
?>