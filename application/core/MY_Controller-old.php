<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Controller extends CI_Controller 
	{
		protected $user;
		# Holds the information of the logged in user.
		
		/**
 		 * @name		__construct
 		 * 
		 * @desc		Call the parent constructor & load the users model.
		 *
		*/
		function __construct() 
		{
			parent::__construct();

			
			$this->load->model('users_model', 'users');
			# Load in the users model
			
			$session = array(
				 
				'salt' 	=> $this->session->userdata('salt')
			
			);
			
			#var_dump($session['email']);
			#print_r( $this->session );
			if ( $session['salt'] ) 
			{
				$this->user = $this->users->get( $session );
			}
			# Check for user.
			$this->load->vars( array( 'user' => $this->user ) );
			
		}
		/**
 		 * @name		require_authentication
 		 * 
		 * @desc		Retrieve the user information from the session, redirect to login if fails.
		 *
		*/
		public function require_auth() 
		{
			if ( ! $this->user ) 
			{
				redirect('login');
			}
		}
	}
	
	/* End of file MY_Controller.php */
	/* Location: application/core/MY_Controller.php */