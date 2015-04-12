<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Form_validation Class
 *
 * Extends Form_Validation library
 *
 * Allows for custom error messages to be added to the error array
 *
 * Note that this update should be used with the
 * form_validation library introduced in CI 1.7.0
 */
class MY_Form_validation extends CI_Form_validation {

    function My_Form_validation()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Set Error
     *
     * @access  public
     * @param   string
     * @return  bool
    */  

    function set_error($error = '')
    {
        if (empty($error))
        {
            return FALSE;
        }
        else
        {
            $CI =& get_instance();

            $CI->form_validation->_error_array['custom_error'] = $error;

            return TRUE;
        }
    }
    
    public function is_unique_except($str, $field)
	{	
		list($table, $field, $id)=explode('.', $field);
		$query = $this->CI->db->from($table)->limit(1)->where($field, $str)->where('id !=', $id)->get();
		$CI =& get_instance();
		$CI->form_validation->set_message('is_unique_except', $str.' is already in use.');
		return $query->num_rows() === 0;
    }

}