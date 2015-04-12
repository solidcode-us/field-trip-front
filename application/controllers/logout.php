<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Logout extends MY_Controller 
	{
		/**
 		 * @name		index
 		 * 
		 * @desc		Log the user out by destroying the session, and redirect to login.
		 *
		*/
		public function index() 
		{
			$this->session->sess_destroy();
			redirect('login');
			# Destroy the session and redirect to login page.
		}
	}
	
	/* End of file logout.php */
	/* Location: application/controllers/logout.php */