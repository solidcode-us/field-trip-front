<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This is LoginController class. This class will
 * execute all the request for login
 * Created By : Sarvesh@solidCodeus
 * Date : 1 Sep, 2014
 * @package MY_Controller  
 */
	class Login extends MY_Controller{
		
		/**
	 * This function is  
	 * Created By : Sarvesh
	 * Date : 2 Feb,2015
	 * @param null
	 * @return null
	 */

		public function index() 
		{	
			 
			$this->load->model('locations_model', 'locations');
			$locations_arr = $this->locations->get_javascript_array();			
			$this->form_validation->set_rules('login_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('login_password', 'Password', 'required|callback__authorize');
			# Set the form validation rules, including a custom callback to check if correct.			
			if ( $this->form_validation->run() !== false ){
				# Form validation passed				
				if ( $this->users->verified( $this->input->post('login_email'))){
					$session = array(					
						'email'	=>	$this->user->email,
						'salt'	=>	$this->user->salt						
					);
					$this->session->set_userdata($session);
					redirect('');
					# Successful login, set the session and redirect
				}else{
					$this->form_validation->set_error('You have not verified your account yet.');
				}
			}			
			$data = array('locations_arr' => $locations_arr);
			$this->load->view('login', $data);
			# Render the HTML for the login page.
		}
		/**
 		 * @name		_authorize
 		 * 
		 * @desc		Validation rule to check if email/password is correct.
		 *
		*/
		public function _authorize() 
		{
			$this->user = $this->users->authenticate($this->input->post('login_email'), $this->input->post('login_password'));
			$this->form_validation->set_message('_authorize', 'Your email/password do not match');
			return $this->user;
		}
	}
	
	/* End of file login.php */
	/* Location: application/controllers/login.php */