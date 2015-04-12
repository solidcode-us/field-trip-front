<?php

class message_model extends CI_Model {   

    function __construct() {
        parent::__construct();
         $this->load->database();        
    }
      public function insert_send_message($message_id) {
        $this->db->insert('messages', $message_id);
        return $this->db->insert_id();
    }

    public function send_message($data) {
        $query = $this->db->insert('messages_users', $data);
        if ($query == TRUE) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function get_message_list() {
        try {
            $this->db->select('
                messages_users.messages_users_id,
                messages_users.conversation_id,
                messages_users.from_id, 
                users.username as from_username,
                users.full_name as from_full_name,
                from_user_description.profile_pic as from_profile_pic,
                messages_users.to_id,
                to_user.username as to_username,
                to_user.full_name as to_full_name,
                to_user_description.profile_pic as to_profile_pic,
                messages.content,
                messages.date,
                messages.message_id');
            $this->db->from('(SELECT * FROM messages_users ORDER BY date DESC) messages_users');
            $this->db->join('(SELECT * FROM messages order by date DESC) messages', 'messages.message_id = messages_users.message_id');
            $this->db->join('user_description as from_user_description', 'from_user_description.user_id = messages_users.from_id', 'left');
            $this->db->join('user_description as to_user_description', 'to_user_description.user_id = messages_users.to_id', 'left');
            $this->db->join('users', 'users.id = messages_users.from_id', 'left');
            $this->db->join('users as to_user', 'to_user.id = messages_users.to_id', 'left');
            $this->db->where('messages_users.owner_id', $this->user->id);
            $this->db->where('messages_users.archive', "0");
            //$this->db->or_where('messages_users.from_id !=',$this->user->id);
            $this->db->group_by(array("messages_users.from_id", "messages_users.to_id", "messages_users.conversation_id"));
            $this->db->order_by("messages_users.date", "DESC");
            return $this->db->get()->result();
        } catch (ErrorException $e) {
            echo $e->getMessage();
        }
    }

    function message_conversation($to_id, $cid) {
        $this->db->select('users.id, users.full_name, user_description.profile_pic,messages.content, DATE_FORMAT(messages.date,"%b %e, %Y - %l:%i %p") as date', false);
        $this->db->from('messages_users');
        $this->db->join('users', 'messages_users.from_id = users.id');
        $this->db->join('messages', 'messages_users.message_id = messages.message_id');
        $this->db->join('user_description', 'messages_users.owner_id = user_description.user_id', 'left');

        if ($cid == "") {
            $this->db->where('messages_users.owner_id', $this->user->id);
            $this->db->where('messages_users.to_id', $to_id);
            $this->db->or_where('messages_users.owner_id', $to_id);
            $this->db->where('messages_users.to_id', $this->user->id);
        } else {
            $this->db->where('messages_users.owner_id', $this->user->id);
            $this->db->where('messages_users.conversation_id', $cid);
        }
        $this->db->group_by('messages_users.message_id');
        $this->db->order_by("messages_users.date", "desc");

        return $this->db->get()->result();
    }

    function archive_message_user($data, $to_id) {
        $user_id = $this->user->id;
        $where = "(owner_id = $user_id AND to_id = $to_id) OR (owner_id = $user_id  AND from_id = $to_id)";
        $this->db->where($where);
        $query = $this->db->update('messages_users', $data);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function count_unread_message() {
        $data = array('to_id' => $this->user->id, "read" => 0);
        $query = $this->db->get_where('messages', $data)->result();
        return $query;
    }
}

?>