<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Signup extends MY_Controller 
	{
		/**
 		 * @name		index
 		 * 
		 * @desc		Show the login/join forms and process joins.
		 *
		*/
		public function index() 
		{
			$this->load->model('locations_model', 'locations');
			$locations_arr = $this->locations->get_javascript_array();
			
			$this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|callback_unique_username');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]|callback_unique_email');
			$this->form_validation->set_rules('reent_email', 'Email Confirm', 'required|matches[email]');
			$this->form_validation->set_rules('password', 'New Password', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required|callback_age_check');
			$this->form_validation->set_rules('location', 'City', 'required');
			
			$this->form_validation->set_message('is_unique', 'That username/email is already registered.');
			$this->form_validation->set_message('matches', 'The two emails do not match.');
			
			if ( $this->form_validation->run() !== false ) 
			{
				# Validated
				
				$dob = explode('/', $this->input->post('date_of_birth'));
				$dob = $dob[2].'-'.$dob[0].'-'.$dob[1];
				$user = array(
				
					'username'	=>	$this->input->post('username'),
					'email'		=>	$this->input->post('email'), 
					'gender'	=>	$this->input->post('gender'),
					'dob'		=>	$dob,
					'location'	=>	$this->input->post('location'),
					'password'	=>	$this->input->post('password')
					
				);
				
				if ( $id = $this->users->add( $user ) ) 
				{
					# The user was added!
					$new_user = $this->users->get(array('id' => $id));
					$data = array('user' => $new_user);
					$email_body = $this->load->view('emails/join', $data, true);
					# fetch the email body
					
					
					$config['protocol'] = 'sendmail';
					$config['mailtype'] = 'html';
					$this->load->library('email', $config); 
					// Load the library
					$this->email->set_newline("\r\n");
					$this->email->from('fieldtripworld@gmail.com', 'Field-Trip!');
					$this->email->to($this->input->post('email')); 
					// Set to and from
					$this->email->subject('Please verify your account');
					
					$this->email->message($email_body);
					$this->email->send();
					
					# send out the verification email.
					
					$this->session->set_flashdata('confirmation_message', 
					'Thanks for signing up. Your account now needs to be verified. Please check your email.');
					redirect('login');
				}
			}
			
			$data = array(
			
				'locations_arr' => $locations_arr
			);
			$this->load->view('signup', $data);
			
		}
		
		/* --------------------------------------------------------------------------
			Validation rules 
		   ------------------------------------------------------------------------*/
		/**
 		 * @name		unique_username
 		 * 
		 * @desc		Return TRUE/FALSE on whether a username is unique
		 *
		*/
		public function unique_username($str) 
		{
			$this->form_validation->set_message('unique_username', 'That username is already taken.');
			return $this->users->check_unique('username', $str);
		}
		/**
 		 * @name		unique_email
 		 * 
		 * @desc		Return TRUE/FALSE on whether an email is unique
		 *
		*/
		public function unique_email($str) 
		{
			$this->form_validation->set_message('unique_email', 'That email is already taken.');
			return $this->users->check_unique('email', $str);
		}
		/**
 		 * @name		age_check
 		 * 
		 * @desc		Return TRUE/FALSE on whether a date of birth is over 13 years old.
		 *
		*/
		public function age_check($str) 
		{
			$dob = explode('/', $str);
			$dob = strtotime( $dob[2].'-'.$dob[0].'-'.$dob[1] );
			$this->form_validation->set_message('age_check', 'You must be at least 13 years old to register.');

			return ( (strtotime('now') - $dob) > (13*3600*24*365.25) );	
		}
	}
	
	/* End of file join.php */
	/* Location: application/controllers/join.php */