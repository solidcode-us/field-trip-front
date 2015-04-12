<?php

class signup extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        # echo"<pre>";print_r($_POST); 

        $this->load->model('locations_model', 'locations');
        //  $data['locationsevent'] = make_pair_array($this->locations->getAll(), "id", "location");
        $data['locations_arr'] = $this->locations->get_javascript_array();


        $tables = $this->config->item('tables', 'ion_auth');
        $this->lang->load("auth","english");
        //validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required|min_length[8]|max_length[20]|xss_clean');
        //    $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
        //    $this->form_validation->set_rules('bod_day', $this->lang->line('create_user_validation_dob_label'), 'required|xss_clean');
        $this->form_validation->set_rules('gender', $this->lang->line('create_user_validation_gender_label'), 'required|xss_clean');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
        ## gender selection 
//        $checked = "";
//        $checked1 = "";
//        if ($this->input->post('gender') === "male") {
//            $checked = "checked='checked'";
//            $this->data['checked'] = $checked;
//        } elseif ($this->input->post('gender') === "female") {
//            $checked1 = "checked='checked'";
//            $this->data['checked1'] = $checked1;
//        }
        if ($this->input->is_ajax_request()) {
        # if form validation true
        if ($this->form_validation->run() == true) {
            $username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
            $email = strtolower($this->input->post('email'));
            $password = $this->input->post('password');
            $this->load->helper('string');


            ## date of birth
            if ($this->input->post('bod_day') < 10) {
                $day = "0" . $this->input->post('bod_day');
            } else {
                $day = $this->input->post('bod_day');
            }
            if ($this->input->post('bod_month') < 10) {
                $month = "0" . $this->input->post('bod_month');
            } else {
                $month = $this->input->post('bod_month');
            }
            $year = $this->input->post('bod_year');
            $dob = $day . $month . $year;

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'dob' => $dob,
                'gender' => $this->input->post('gender'),
                'phone' => $this->input->post('phone'),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data)) {
            //check to see if we are creating the user
            //redirect them back to the admin page
//            $this->session->set_flashdata('message', $this->ion_auth->messages());
//            redirect("/homepage", 'refresh');
            $response = array(
                "status" => 1,
                "message" => $this->ion_auth->messages()
            );
            echo json_encode($response); exit;
        } else {
            //display the create user form
            //set the flash data error message if there is one
           // $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $alert_msg = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $response = array(
                "status" => 0,
                "valid_errors" => $alert_msg
            );
            echo json_encode($response); exit;
        }
    }
         $this->data['first_name'] = array(
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'placeholder' => 'First Name',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'placeholder' => 'Last Name',
                'onChange' => 'verify_username();',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['email'] = array(
                'name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'onChange' => 'verify_email();',
                'placeholder' => 'Email address',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['dob'] = array(
                'name' => 'dob',
                'id' => 'dob',
                'type' => 'text',
                'placeholder' => 'Date Of Birth',
                'value' => $this->form_validation->set_value('dob'),
            );
            $this->data['company'] = array(
                'name' => 'company',
                'id' => 'company',
                'type' => 'text',
                'placeholder' => 'Phone Number',
                'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                'name' => 'phone',
                'id' => 'phone',
                'type' => 'text',
                'placeholder' => 'Phone Number',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'placeholder' => 'Create Password',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'placeholder' => 'Confirm Password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );



            $this->template->set_partial('header', 'partials/header');
            $this->template->set_partial('footer', 'partials/footer');
            $this->template->set_layout('admin');

            $this->template->build('signup', $this->data);
    }

    //activate the user
    function activate($id, $code = false) {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        } else if ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
        }

        if ($activation) {
            //redirect them to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("account/login", 'refresh');
        } else {
            //redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

}
