<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Controller extends CI_Controller 
	{
		public  $user;
		# Holds the information of the logged in user.
                
                public  $device;
		# Define the user device i.e. Desktop, Mobile or Tablet etc...
		
		/**
 		 * @name		__construct
 		 * 
		 * @desc		Call the parent constructor & load the users model.
		 *
		*/
		function __construct() 
		{
			parent::__construct();

			// fetches a user's details on init
                        $this->user = $this->ion_auth->user()->row();
                        $this->load->library('user_agent');
                         if($this->agent->is_mobile()) {
                            $this->device = true;
                         }else{
                             $this->device = false;
                         }
			
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