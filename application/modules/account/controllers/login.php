<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MY_Controller {

    function __construct() {
        parent::__construct();  
		$this->load->model('member_model');       
    }

     
    function index() {

        if ($this->ion_auth->logged_in()){            
               redirect('user/profile','refresh');
            
        }
        if($this->session->userdata('redirect_on_login') || $this->input->get('redirect_url')){
            if($this->session->userdata('redirect_on_login')){
                $redirect_url = $this->session->userdata('redirect_on_login');
            } else{
                $this->session->set_userdata('redirect_on_login',$this->input->get('redirect_url'));
                $redirect_url = $this->session->userdata('redirect_on_login'); 
            }
        }
        else {
            $redirect_url = base_url().'user/profile';
        }
        //validate form input
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->input->is_ajax_request()) {
            if ($this->form_validation->run() == true) {
            //check to see if the user is logging in
            //check for "remember me"
			
            $remember = (bool) $this->input->post('remember');
            // redirect logged in user according group
			//echo $this->input->post('email').'=='.$this->input->post('password'); exit;
                if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember)){
                   
                        $redirect_url = base_url()."admin";
                    
                    $response = array(
                        "status" => 1,
                        "redirect_url" => $redirect_url
                    );
                    echo json_encode($response); exit;
                } else {
                    //if the login was un-successful                
                    $response = array(
                        "status" => 0,
                        "valid_errors" => $this->ion_auth->errors()
                    );
					
                    echo json_encode($response); exit;
                }
            } else {
                //the user is not logging in so display the login page
                //set the flash data error message if there is one 
                $response = array(
                    "status" => 0,
                    "valid_errors" => validation_errors()
                );
                echo json_encode($response); exit;
            }
        }
		
        $this->data['title'] = "Login";
        $this->template->set_partial('header', 'partials/section_header');
        $this->template->set_partial('footer', 'partials/footer_main');
       // $this->template->set_layout('admin');
        $this->template->build('login', $this->data);
    }

}