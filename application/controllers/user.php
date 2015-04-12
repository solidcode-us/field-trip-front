<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends MY_Controller 
	{	
		/**
 		 * @name		index
 		 * 
		 * @desc		Require logged in, show the profile index page.
		 *
		*/
		public function index() 
		{
			$this->load->view('user/index');
		}
	}