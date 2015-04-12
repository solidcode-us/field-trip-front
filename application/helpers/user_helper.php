<?php

/**
 * @author Dmitriy
 * @copyright 2012
 */
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Return a users display name based on settings
 *
 * @param int $user the users id
 * @return  string
 */
 
function user_has_roll($module, $roll) {
	
	
	$ci = & get_instance();
	$permitInfo = $ci->permission_model->get_permission_module();


	$flag=0;
	foreach($permitInfo as $key=>$val) {
		
		if($permitInfo[$key]->module_name == $module) {
			if($permitInfo[$key]->add_permit==1 && $roll=="add") {
				$flag =1;
			}
			if($permitInfo[$key]->edit_permit==1 && $roll=="edit") {
				$flag =1;
			}
			if($permitInfo[$key]->del_permit==1 && $roll=="del") {
				$flag =1;
				
			}
		}
	}
	if($flag==1)
		return true;
	else
		show_401();
}
function user_has_roll_view($module, $roll) {	
	
	$ci = & get_instance();
	$permitInfo = $ci->permission_model->get_permission_module();
 
	$flag=0;
	if(is_array($permitInfo) && count($permitInfo)){
		foreach($permitInfo as $key=>$val) {
 
			if(trim($val->module_name) == trim($module)) {
				
				if($val->add_permit==1 && $roll=="add") {
					$flag =1;
				}
				if($val->edit_permit==1 && $roll=="edit") {
					$flag =1;
				}
				if($val->del_permit==1 && $roll=="del") {
					$flag =1;
					
				}
			}
		}
	}

 
	if($flag==1)
		return true;
	else
		return false;
}
function group_has_role($module, $role)
{
	if (empty(ci()->current_user))
	{
		return FALSE;
	}
    
	if (ci()->current_user->group == 'admin')
	{
		return TRUE;
	}

	$permissions = ci()->permission_model->get_group(ci()->current_user->group_id);

	if (empty($permissions[$module]) or empty($permissions[$module]->$role))
	{
		return FALSE;
	}

	return TRUE;
}


function role_or_die($module, $role, $redirect_to = 'backend', $message = '')
{

	if (ci()->input->is_ajax_request() AND ! group_has_role($module, $role))
	{
		echo json_encode(array('error' => ($message ? $message : 'You do not have sufficient permissions to view this page.')));
		return FALSE;
	}
	elseif ( ! group_has_role($module, $role))
	{
		ci()->session->set_flashdata('error', ($message ? $message : 'You do not have sufficient permissions to view this page.') );
		redirect($redirect_to);
	}
	
    return TRUE;
}

function show_401($page = '', $log_error = TRUE)
    {
        $heading = "401 Unauthorized";
        $message = "Unauthorized.";

        // By default we log this, but allow a dev to skip it
        if ($log_error)
        {
            log_message('error', '401 Unauthorized --> '.$page);
	        }
		$test = 'You do not have permission to view this page.';
        echo show_error($test);
        exit;
    }
?>