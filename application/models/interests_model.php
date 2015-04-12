<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interests_model extends CI_Model
{
	/**
	 * @name		get
	 *
	 * @desc		Get all interests
	 *
	 */
	public function get_all( $options = array() )
	{
		return $this->db->get('interests');
		// fix author and committer, uhg
	}
}