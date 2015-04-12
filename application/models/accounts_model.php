<?php
class Accounts_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getAll( ) 
	{
            $this->db->select('*');
            $this->db->from('account_type');
            $this->db->where('parentid = 0');

            $this->db->order_by("account_type", "asc");

            $query = $this->db->get();
            return $query->result();
	} 
        public function getAccount($id=false)
        {
            $this->db->select('account_type,id');
            $this->db->from('account_type');
            if($id!=false)
                $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row();
        }


}