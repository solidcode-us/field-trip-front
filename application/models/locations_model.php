<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Locations_model extends CI_Model 
	{
		/**
 		 * @name		get_javascript_array
 		 * 
		 * @desc		Return a JS array formatted string of the locations.
		 *
		*/
		public function get_javascript_array() 
		{
			$this->db->from('locations');
			$str = '[';
			foreach( $this->db->get()->result() as $location ) 
			{
				$str .= '"'.$location->city.', '.$location->state.'", ';
			}
			$str = substr($str, 0, strlen($str)-2).']';
			
			return $str;
		
		}
	}
	
	/* End of file application/models/locations_model.php */
	/* Location: locations_model.php */
	