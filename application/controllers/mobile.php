<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends MY_Controller 
{	
	/**
	 * @name		index
	 * 
	 * @desc		Require logged in, show the profile index page.
	 *
	*/
	public function index() 
	{
		$this->load->view('mobile/index');
	}
	public function map() 
	{
		$this->load->view('mobile/map');
	}
	
	public function design()
	{
		$this->load->view('mobile/design');
	}
	public function exp_checkout()
	{
		$this->load->view('mobile/exp_checkout');
	}
	public function exp_confirmation()
	{
		$this->load->view('mobile/exp_confirmation');
	}
	public function my_exp()
	{
		$this->load->view('mobile/my_exp');
	}
	public function my_exp_details()
	{
		$this->load->view('mobile/my_exp_details');
	}

	public function my_design()
	{
		$this->load->view('mobile/my_design');
	}
	public function my_design_details()
	{
		$this->load->view('mobile/my_design_details');
	}
	public function my_design_offers()
	{
		$this->load->view('mobile/my_design_offers');
	}

	public function user_profile()
	{
		$this->load->view('mobile/user_profile');
	}

/* Experience pages */
	public function exp_vacation() 
	{
		$this->load->view('mobile/exp_vacation');
	}
	public function exp_adventure() 
	{
		$this->load->view('mobile/exp_adventure');
	}
	public function exp_event() 
	{
		$this->load->view('mobile/exp_event');
	}
	public function exp_activity() 
	{
		$this->load->view('mobile/exp_activity');
	}
}