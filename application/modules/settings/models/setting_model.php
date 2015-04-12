<?php
class setting_model extends CI_Model {   

    function __construct() {
        parent::__construct();
         $this->load->database();        
    }
    public function get_user_interest_data($member_id="") {
		$this->db->select('id, member_id, member_interests, status');
		if(!empty($member_id)) {
			$this->db->where('member_id', $member_id);
		}
		$this->db->where('status', '1');
        return $this->db->get('member_interests')->row();
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
}

?>