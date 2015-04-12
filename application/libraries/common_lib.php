<?php

class Common_lib {
//get access to the CI object
	public function __construct() {
		$this->CI =& get_instance();
	}
public function require_login(){
   
  
    if($this->CI->ion_auth->logged_in()){
        return true;
    }else {
    $this->CI->session->set_userdata('redirect_on_login' , current_url());
       redirect("account/login"); 
    }
}    
    
public function redirect_if_not_logged_in()
 {
   
  if(!$this->CI->ion_auth->logged_in()){
   // the name is a fusion of 'n-th' redirection
   $redirectionth = $this->CI->session->userdata('redirectionth') + 1;
   $this->CI->session->set_userdata(array(
    'ion_auth_errors' => '<div class="mws-form-message error">'.lang('common_lib_error_not_authorized').'</div>',
    'redirect_on_login' => current_url(),
    'redirectionth' => $redirectionth,
   ));

   redirect(base_url());
  }

 }
//kick users who are trying to look at the wrong group's powers
 public function exclusive_group_access($allowed_groups) {
  $access_denied = TRUE;

  //if I don't supply any allowed groups, it means everyone can come in
  if(empty($allowed_groups)) {
   $access_denied = FALSE;
  } else {
   foreach($allowed_groups as $allowed_group) {
    if($this->CI->ion_auth->in_group($allowed_group) !== FALSE) {
     $access_denied = FALSE;
    }
   }
  }

  if($access_denied) {
   $this->CI->ion_auth->logout();
   redirect(base_url());
  } else {
   return TRUE;
  }
 }
}

