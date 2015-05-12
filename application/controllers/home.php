<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller 
{	
	/**
	 * @name		index
	 * 
	 * @desc		Require logged in, show the profile index page.
	 *
	*/
	public function index() 
	{
		$this->load->view('home/index');
	}

	public function tour() 
	{
		$this->load->view('home/tour');
	}
	public function event() 
	{
		$this->load->view('home/event');
	}

	public function tour_booked() 
	{
		$this->load->view('home/tour_booked');
	}

	public function exp_all() 
	{
		$this->load->view('home/exp_all');
	}
	public function itinerary() 
	{
		$this->load->view('home/itinerary');
	}	

}