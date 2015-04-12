<?php
class Settings extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load("auth", "english");
        $this->load->model('account/member_model');
		$this->load->model('setting_model');
    }

    function index() {
	 	 $this->common_lib->require_login();
        $this->data['title'] = "Settings";
		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('footer', 'partials/footer');
		
      	$member_interests = "";
		$memberPlanInfo = "";
		$last_pay_date="";
		$interestData = $this->member_model->get_interest_data();
		$userInterestData = $this->setting_model->get_user_interest_data($this->user->id);
	
		if(sizeof($userInterestData)==1 && isset($userInterestData->member_interests)) {
			$member_interests = explode(',',$userInterestData->member_interests);
		}
		$userInfo = $this->member_model->get_user_data($this->user->id);
		if(isset($userInfo->plan_id)) {
			
			$memberPlanInfo = $this->setting_model->get_membership_plan($userInfo->plan_id);
			
		}
		
		$payInfo = $this->setting_model->get_payment_data($this->user->id,'membership');
		if(sizeof($payInfo)>0 && isset($payInfo[0]->created_at)) {
			$last_pay_date = $payInfo[0]->created_at;
		}
		$paymentInfo = $this->setting_model->get_payment_data($this->user->id);
		$cardInfo = $this->setting_model->get_member_card_info($this->user->id);
		
		$this->data['interestData'] = $interestData;
		$this->data['last_pay_date'] = $last_pay_date;
		$this->data['member_interests'] = $member_interests;
		$this->data['interest_id'] = $userInterestData->id;
		
		$this->data['userInfo'] = (array) $userInfo;
		$this->data['memberPlanInfo'] = (array) $memberPlanInfo;
		$this->data['paymentInfo'] = $paymentInfo;
		$this->data['cardInfo'] = $cardInfo;
        $this->template->build('index', $this->data);

    }

    //log the user out
    function ajax_member_interest() {
      
	     $member_id   = $this->input->post('member_id');
		 $interest_id   = $this->input->post('interest_id');
		 $interest_ids   = $this->input->post('interest_ids');
		
		 if(sizeof($interest_ids)>0) {
		 	$interestIds = implode(',',$interest_ids);
		 } else {
		 	$interestIds =$interest_ids;
		 }
		
		 $data = array(
			'member_id' => $member_id,
			'member_interests' => $interestIds,
			'created_at' => date('Y-m-d h:i:s')
		 );
		 if(empty($interest_id)) {
		 	$interest_id = $this->member_model->save_member_interest($data);
			echo json_encode(array('status'=>'add', 'interest_id'=>$interest_id)); exit;
		 } else {
		 	
			$status = $this->setting_model->update_member_interest($data,$interest_id);
			if($status) {
				//$this->session->set_flashdata('update_message', "Interest has been updated successfully.");
				echo json_encode(array('status'=>'update', 'interest_id'=>$interest_id)); exit;
			}
			echo "0"; exit;
		 }
    }

   public function ajax_member_update() {
		
		 $member_id   = $this->input->post('member_id');
		 $first_name   = $this->input->post('first_name');
		 $last_name   = $this->input->post('last_name');
		 $email   = $this->input->post('email');
		 $phone   = $this->input->post('phone');
		 $language   = $this->input->post('language');
		
		 $data = array(
			'name' => $first_name.' '.$last_name,
			'email' => $email,
			'phone' => $phone,
			'language' => $language,
			'updated_at' => date('Y-m-d h:i:s')
		 );
		 if(!empty($member_id)) {
		 	
			$status = $this->member_model->update_user($data, $member_id);
			if($status) {
				//$this->session->set_flashdata('update_message', "");
				echo $status; exit;
			}
			echo "0"; exit;
		 }
	}
	
	public function ajax_member_change_password() {
	
		 $currentPassword   = $this->input->post('currentPassword');
		 $newPassword   = $this->input->post('newPassword');
		 if($this->user->email) {
		 
			$status = $this->ion_auth->change_password($this->user->email, $currentPassword, $newPassword);
			if($status) {
				
				echo json_encode(array('message'=>1));die;
			} else {
				
				echo json_encode(array('message'=>0));die;
			}		
		 }
	}
	
	public function ajax_member_update_profile() {
		
		 $member_id   = $this->input->post('member_id');
		 $display_name   = $this->input->post('display_name');
		 $travelogue   = $this->input->post('travelogue');
		 $interests   = $this->input->post('interests');
		 $connections   = $this->input->post('connections');
		 $photo_videos   = $this->input->post('photo_videos');
		 $fb_timeline   = $this->input->post('fb_timeline');
		 $profile_id = $this->input->post('profile_id');
		 
		 $data = array(
		 	'member_id' => $member_id,
			'display_name' => $display_name,
			'travelogue' => implode(',',$travelogue),
			'interests' => implode(',',$interests),
			'connections' => implode(',',$connections),
			'photo_videos' => implode(',',$photo_videos),
			'fb_timeline' => $fb_timeline,
			'updated_at' => date('Y-m-d h:i:s')
		 );
		 if(empty($profile_id)) {
		 	
			$profile_id = $this->setting_model->save_member_profile($data);
			echo json_encode(array('profile_id'=>$profile_id,'status'=>'add')); exit;
		 } else {
		 
		 	$status = $this->setting_model->update_member_profile($data, $profile_id);
			if($profile_id) {
				//$this->session->set_flashdata('update_message', "");
				echo json_encode(array('status'=>$status, 'profile_id'=>$profile_id)); exit;
			}
		 }
	}
	function ajax_member_status_update() {
			
			$userInfo = $this->member_model->get_user_data($this->user->id);
			$status = ($userInfo->active==1) ? '0':'1';
			if($this->setting_model->update_member_status(array('active'=>$status), $this->user->id)) {
				
				$this->data['title'] = "Logout";
				//log the user out
				$logout = $this->ion_auth->logout();
		
				//redirect them to the login page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('account/login');
			}
			echo '0'; exit;
	}
	function ajax_card_information() {
	
		 $member_id   = $this->user->id;
		 $card_number   = $this->input->post('card_number');
		 $expire_month   = $this->input->post('expire_month');
		 $expire_year   = $this->input->post('expire_year');
		 $cvv_code   = $this->input->post('cvv_code');
		 $card_type   = $this->input->post('card_type');
		 $card_id   = $this->input->post('card_id');
		 
		 $data = array(
		 	'member_id' => $member_id,
			'card_number' => base64_encode($card_number),
			'card_type' => $card_type,
			'expire_month' => $expire_month,
			'expire_year' => $expire_year,
			'cvv_code' =>$cvv_code,
			'created_at' => date('Y-m-d h:i:s')
		 );
		 if(empty($card_id)) {
		 	
			$card_id = $this->setting_model->save_card_info($data);
			$this->session->set_flashdata('confirmation_message', "Card Information has been added successfully.");
			echo json_encode(array('card_id'=>$card_id,'status'=>'add'));
		 } else {
		 
		 	$status = $this->setting_model->update_card_info($data, $card_id);
			if($status) {
				$this->session->set_flashdata('update_message', "Card Information has been updated successfully.");
				echo json_encode(array('card_id'=>$card_id,'status'=>$status));
			}
		 }
		 exit;
	}
	public function get_card_information() {
		
		 $card_id   = $this->input->post('card_id');
		 if(!empty($card_id)) {
		 	$card_info = $this->setting_model->get_card_information($card_id);
		 }
		 if(sizeof($card_info)==1) {
		 	$cardInfo['id'] = $card_info->id;
			$cardInfo['member_id'] = $card_info->member_id;
			$cardInfo['card_type'] = $card_info->card_type;
			$cardInfo['expire_month'] = $card_info->expire_month;
			$cardInfo['expire_year'] = $card_info->expire_year;
			$card_number = base64_decode($card_info->card_number);
			$cardInfo['card_number'] = $card_number;
			if(empty($card_info->cvv_code)) {
			
				$cardInfo['cvv_code'] = substr($card_number, -3);
			} else {
				$cardInfo['cvv_code'] = $card_info->cvv_code;
			}
			//$cardInfo['charged'] = $card_info->charged;
			$cardInfo['created_at'] = $card_info->created_at;
		 }
		 echo json_encode($cardInfo); exit;
	}	
	
	function delete_card_information() {
		
		 $card_id   = $this->input->post('card_id');
		 if(!empty($card_id)) {
		 	$status = $this->setting_model->delete_card_information($card_id);
			$this->session->set_flashdata('delete_message', "Card Information has been deleted successfully.");
		 }
		 echo json_encode($status); exit;
	}
}
