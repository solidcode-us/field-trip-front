<?php

class messages extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load("auth", "english");
        $this->load->model('message_model');
    }

    function index() {       
        if ($this->ion_auth->logged_in()) {
            echo "sssssssssss";
            
            $this->data['messages'] = $this->message_model->get_message_list();
            echo "ada<pre>";            print_r($this->data['messages']);
            $this->data['unread'] = $this->message_model->count_unread_message();
            $this->template->set_partial('header', 'partials/header');
            $this->template->set_partial('footer', 'partials/footer');
            $this->template->set_layout('default')
                    ->build('account/inbox' , $this->data);
        }
    }

    public function inbox() {
        if ($this->ion_auth->logged_in()) {

            $this->template->set_partial('header', 'partials/header');
            $this->template->set_partial('footer', 'partials/footer');
            $this->template->set_layout('default')
                    ->build('account/inbox');
            // $this->load->view('account/inbox');
        }
    }

    function send_message() {
        if ($this->ion_auth->logged_in()) {
            $to_id = explode(',', $this->input->post('to_id'));
            $content = $this->input->post('content');
            foreach ($to_id as $to_ids) {
                $data = array("owner_id" => $this->user->id, "from_id" => $this->user->id, "to_id" => $to_ids, "content" => $content, "read" => "0");
                $copy_data = array("owner_id" => $to_ids, "from_id" => $this->user->id, "to_id" => $to_ids, "content" => $content, "read" => "0");
                $this->load->model('account_model');
                $insert_data = $this->account_model->send_message($data);
                $insert_data_copy = $this->account_model->send_message($copy_data);

                if (isset($insert_data) && isset($insert_data_copy)) {

                    $to_email = $this->account_model->get_user_detail($to_ids);
                    $from_email = $this->account_model->get_user_detail($this->user->id);
                    $data['data'] = array("from_email" => $from_email, "to_email" => $to_email, "content" => $content);

                    $email_body = $this->load->view('emails/message_send', $data, true);

                    $this->load->library('email');
                    //$config['protocol'] = 'sendmail';
                    $config['mailtype'] = 'html';

                    $this->email->initialize($config);
                    // Load the library
                    $this->email->set_newline("\r\n");
                    $this->email->from('info@field-trip.com', 'Field-Trip!');
                    $this->email->to($to_email[0]->email);
                    // Set to and from
                    $subject = "New Message From" . " " . $from_email[0]->full_name;
                    $this->email->subject($subject);

                    $this->email->message($email_body);
                    $this->email->send();
                }
            }
            $this->data['messages'] = $this->account_model->get_message_list();
            $this->load->view('account/show_messages', $this->data);
        }
    }

    function send_user_message() {
        if ($this->ion_auth->logged_in()) {
            $to_id = $this->input->post('to_id');
            $content = $this->input->post('content');

            $data = array("from_id" => $this->user->id, "to_id" => $to_id, "content" => $content, "read" => "0");
            $this->load->model('account_model');
            $insert_data = $this->account_model->send_message($data);

            if ($insert_data) {

                $to_email = $this->account_model->get_from_email($to_id);
                $from_email = $this->account_model->get_from_email($this->user->id);
                $data['data'] = array("from_email" => $from_email, "to_email" => $to_email, "content" => $content);
                $email_body = $this->load->view('emails/message_send', $data, true);

                $this->load->library('email');
                //$config['protocol'] = 'sendmail';
                $config['mailtype'] = 'html';

                $this->email->initialize($config);
                // Load the library
                $this->email->set_newline("\r\n");
                $this->email->from('info@field-trip.com', 'Field-Trip!');
                $this->email->to($to_email->email);
                // Set to and from
                $this->email->subject('Message From Field Trip');

                $this->email->message($email_body);
                $this->email->send();
            }

            $response = array("status" => 1);
            echo json_encode($response);
        }
    }

    function show_user_conversation() {

        if ($this->ion_auth->logged_in()) {
            $to_id = $this->input->post('to_id');
            $this->load->model('account_model');
            $this->data['conversation'] = $this->account_model->message_conversation($to_id);
            $this->load->view('account/conversation', $this->data);
        }
    }

    function delete_message() {
        if ($this->ion_auth->logged_in()) {
            $to_id = $this->input->post('to_id');

            $data = array("archive" => "1");
            $this->load->model('account_model');
            $result = $this->account_model->archive_message_user($data, $to_id);
            if ($result) {
                $this->data['messages'] = $this->account_model->get_message_list();
                $this->load->view('account/show_messages', $this->data);
            }
        }
    }

}