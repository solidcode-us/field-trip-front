<?php

class login_model extends CI_Model {   

    function __construct() {
        parent::__construct();
         $this->load->database();        
    }
    function fb_id_exist($fb_id){
       # echo "fb-id=",$fb_id;
        $this->db->select('id, username');
        $this->db->from('users');        
        $this->db->where('facebook_id', $fb_id);        
        return $this->db->get()->result();
        
    }
    function fb_info_save($userdata){        
        $data=array(
            'username'=>$userdata['username'],
            'email'=>$userdata['email'],
            'facebook_id'=>$userdata['id'],
            'gender'=>$userdata['gender'],
            'full_name'=>$userdata['name'],
            'is_master'=>0,
      //      'dob'=>DATE_FORMAT($userdata['birthday'],'%Y-%m-%d'),
            'facebook_account'=>1,
        );
        $this->db->insert('users', $data);
    }
}

?>