<?php

class user_model extends CI_Model {   



    function __construct() {

        parent::__construct();

         $this->load->database();        

    }

       public function get_connection_groups() {



		$this->db->select('id, name');		  

		$this->db->where('status', 'active');

		$this->db->order_by("name");

        return $this->db->get('connection_groups')->result();

	}

	public function save_invitation($data = false) {
		$this->db->insert('member_invitations', $data);

        return $this->db->insert_id();

    }
  public function save_notification($data = false) {
		$this->db->insert('member_notifications', $data);

        return $this->db->insert_id();

    }



    public function save_connection($data = false) {
		$this->db->insert('member_connections', $data);

        return $this->db->insert_id();

    }
  public function check_connection($email='')

    {

    	 $sql ="Select `members`.`id` from `members` 

				LEFT JOIN `member_connections` ON (`members`.`id` =`member_connections`.`invited_by` OR `members`.`id` =`member_connections`.`user_id`)

				WHERE `members`.`email` ='".$email."'";

    	$result = $this->db->query($sql)->row();

 		

 		if(isset($result->id)){

			return $result->id;

		}else{

			return false;

		}

    }



     public function get_connections($invited_by=0) {
		$sql ="Select `members`.`id`,`members`.`name`,`members`.`profile_image` from `members` 

			LEFT JOIN `member_connections` ON (`members`.`id` =`member_connections`.`invited_by` OR `members`.`id` =`member_connections`.`user_id`)

			WHERE  `member_connections`.`status` ='1' AND `members`.`id` !=".$invited_by." AND (`member_connections`.`invited_by`=".$invited_by." OR `member_connections`.`user_id`=".$invited_by.") order by `member_connections`.`updated_at`";



		$res = $this->db->query($sql)->result();

 		return $res;

    }


  public function get_connection_details($connectionId='',$user_id)

    {

    	$sql ="Select `members`.*,`member_invitations`.`connection_group_id`,`member_invitations`.`connection_sub_group_id`  from members

			LEFT JOIN `member_invitations` ON `member_invitations`.`invited_by`=".$user_id." WHERE   `members`.`id` =".$connectionId;

		$res = $this->db->query($sql)->row();

 		return $res;

    }
  public function search_connections($user_id='',$type=0)

    {

    	if($type!=0){

    		$sql ="Select `members`.`id`,`members`.`name`,`members`.`profile_image` from `members` 

			LEFT JOIN `member_connections` ON (`members`.`id` =`member_connections`.`invited_by` OR `members`.`id` =`member_connections`.`user_id`)

			WHERE  `member_connections`.`connection_group` = ".$type."  AND `member_connections`.`status` ='1' AND `members`.`id` !=".$user_id." AND 

			(`member_connections`.`invited_by`=".$user_id." OR `member_connections`.`user_id`=".$user_id.") order by `member_connections`.`updated_at`";

    	}else{

    		$sql ="Select `members`.`id`,`members`.`name`,`members`.`profile_image` from `members` 

			LEFT JOIN `member_connections` ON (`members`.`id` =`member_connections`.`invited_by` OR `members`.`id` =`member_connections`.`user_id`)

			WHERE  `member_connections`.`status` ='1' AND `members`.`id` !=".$user_id." AND 

			(`member_connections`.`invited_by`=".$user_id." OR `member_connections`.`user_id`=".$user_id.") order by `member_connections`.`updated_at`";

    	}

    	



		$res = $this->db->query($sql)->result();

 		return $res;

    }
   public function remove_connection($connectionId='',$user_id)

     {



     	$sql = "Delete from member_connections where (invited_by=".$user_id." AND  user_id=".$connectionId.") OR (invited_by=".$connectionId." AND  user_id=".$user_id.")";

     	return $res = $this->db->query($sql);



     }





	public function checkUser($email) {

		

		$this->db->select('id');

        $this->db->where('email', $email);

        $queryResult = $this->db->get('members')->row();



		if(isset($queryResult->id)){

			return $queryResult->id;

		}else{

			return false;

		}
	}

    public function get_user_notification_info($member_id) {

		$this->db->select('mn.*,users.first_name, users.last_name,users.email, members.name as mname, members.email as memail,');
		$this->db->join('users','users.id = mn.notification_by','left');
		$this->db->join('members','members.id = mn.notification_by','left');

		if(!empty($member_id)) {
		
			$this->db->where('mn.notification_to', $member_id);
		}
		//$this->db->where('mn.status', '1');
		$this->db->order_by('mn.id', 'DESC');
        return $this->db->get('member_notifications mn')->result();
	}

	

	public function update_member_interest($data, $interest_id) {
		if(!empty($interest_id)) {

			$this->db->where('id', $interest_id);

			$this->db->update('member_interests', $data);

			return true;

		}

		return false;

	}

	public function save_member_profile($data) {

		

		if($this->db->insert('member_privacy', $data)) {

			 return $this->db->insert_id();

		}

		return false;

	}

	

	public function update_member_profile($data, $id) {
		$this->db->where('id',$id);

        if($this->db->update('member_privacy',$data)) {

	   		return true;

	    }

        return false; 

    }

	public function get_membership_plan($paln_id) {

	

		$this->db->select('mp.id, mp.plan_name, mp.plan_amount, mp.plan_duration');

		if(!empty($paln_id)) {

			$this->db->where('mp.id', $paln_id);

		}

		$this->db->where('mp.status', '1');

       return $this->db->get('membership_plans mp')->row();

	}

	public function get_payment_data($member_id, $type="") {

		

		$this->db->select('mp.*');

		if(!empty($member_id)) {

			$this->db->where('mp.member_id', $member_id);

			$this->db->order_by("mp.id","desc");

		}

		if(!empty($type)) {

			$this->db->where('mp.payment_type', $type);

		}

        return $this->db->get('member_payments mp')->result();

	}

	

	public function update_member_status($data, $id) {

		

		$this->db->where('id',$id);

        if($this->db->update('members',$data)) {

	   		return true;

	    }

        return false; 

	}

	public function get_member_card_info($member_id) {

		

		$this->db->select('mci.*');

		if(!empty($member_id)) {

			$this->db->where('mci.member_id', $member_id);

			$this->db->order_by("mci.id","desc");

		}

        return $this->db->get('member_card_info mci')->result();

	}

	public function save_card_info($data) {

		if($this->db->insert('member_card_info', $data)) {

			 return $this->db->insert_id();

		}

		return false;

	}

	public function update_card_info($data, $card_id) {

		

		$this->db->where('id',$card_id);

        if($this->db->update('member_card_info',$data)) {

	   		return true;

	    }

        return false; 

	}

	public function get_card_information($id) {

		

		$this->db->select('mci.*');

		if(!empty($id)) {

			$this->db->where('mci.id', $id);

		}

        return $this->db->get('member_card_info mci')->row();

	}

	public function delete_card_information($card_id) {

		

		return $this->db->delete('member_card_info', array('id'=>$card_id));

	}

	 public function get_user_notification($notification_id, $notification_by='') {

	

		$this->db->select('mn.*,users.first_name, users.last_name,users.email');

		$this->db->join('users','users.id = mn.notification_by','left');

		if(!empty($notification_id)) {

			$this->db->where('mn.id', $notification_id);

		}

		//$this->db->where('mn.status', '1');

		$this->db->order_by('mn.id', 'DESC');

        return $this->db->get('member_notifications mn')->result();

	}

	public function save_notification_replay($data) {

		if($this->db->insert('member_notification_reply', $data)) {

			 return $this->db->insert_id();
		}

		return false;

	}

	 public function get_user_all_notification($notification_id, $notification_by) {

		$this->db->select('mnf.*,users.first_name, users.last_name,users.email');

		$this->db->join('users','users.id = mnf.replied_by','left');

		if(!empty($notification_id)) {

			$this->db->where('mnf.notification_id', $notification_id);
		}
		$this->db->where('mnf.status', '1');

		$this->db->order_by('mnf.id', 'DESC');

        return $this->db->get('member_notification_reply mnf')->result();

	}
	
	public function get_user_connection($notification_by) {
	
		$this->db->select('mc.*,members.name, members.last_name,members.email,members.profile_image');
		$this->db->join('members','members.id = mc.invited_by','left');
		if(!empty($notification_by)) {
			
			$this->db->where(array('mc.invited_by'=>$notification_by, 'mc.user_id'=>$this->user->id));
		}
        return $this->db->get('member_connections mc')->row();
	}
	public function get_user_common_friend($notification_by) {
		
		$this->db->select('mc.*,members.name, members.last_name,members.email,members.profile_image');
		$this->db->join('members','members.id = mc.user_id','left');
		if(!empty($notification_by)) {
			
			$this->db->where(array('mc.invited_by'=>$notification_by, 'mc.status'=>'1'));
			$this->db->where('mc.user_id <>', $this->user->id);
		}
        return $this->db->get('member_connections mc')->result();
	}
	
	public function update_connection_data($data, $id) {
		
		$this->db->where('id',$id);
        if($this->db->update('member_connections',$data)) {

	   		return true;
	    }
        return false; 
	}
	public function update_notification_flag($data, $notification_id) {
		
		$this->db->where('id',$notification_id);
        if($this->db->update('member_notifications',$data)) {

	   		return true;
	    }
        return false; 
	}
	public function get_user_notification_flag($user_id) {
		
		$this->db->select('count(*) as noOfNotif');
		if(!empty($user_id)) {

			$this->db->where(array('mn.notification_to'=>$user_id,'notification_flag'=>'1'));

		}
        return $this->db->get('member_notifications mn')->row();
	}
}



?>