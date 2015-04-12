<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller 
{	
	 function __construct() {
        parent::__construct();
        $this->lang->load("auth", "english");
        
        $this->load->helper('common');
        if (!$this->ion_auth->logged_in()) {
            redirect('account/login');
        }

		 
    }

    function inbox() {
	 	
		$this->common_lib->require_login();
		$notificationInfo = $this->user_model->get_user_notification_info($this->user->id);
		//if($_SERVER['REMOTE_ADDR']=="14.102.97.252") {
			//echo $this->db->last_query(); exit;
			//asd($notificationInfo,2);
		//}
		$connecUserData="";
		$userFriend ="";
		$notifyInfo = "";
		$notifyReplyInfo="";
		if(sizeof($notificationInfo)>0 && $notificationInfo[0]->notification_type=="admin") {
			
			$notifyInfo = $this->user_model->get_user_notification($notificationInfo[0]->id, $notificationInfo[0]->notification_by);
			$notifyReplyInfo = $this->user_model->get_user_all_notification($notificationInfo[0]->id, $notificationInfo[0]->notification_by);
		} else if(sizeof($notificationInfo)>0 && $notificationInfo[0]->notification_type=="connection") {
		
			$connecUserData =  (array) $this->user_model->get_user_connection($notificationInfo[0]->notification_by);
			$userFriend = $this->user_model->get_user_common_friend($notificationInfo[0]->notification_by);
		}
		//asd($notifyInfo);
		//asd($notifyReplyInfo,2);
        $this->data['title'] = "Users";
		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('footer', 'partials/footer');
		
		$this->data['notificInfo'] = $notificationInfo;
		$this->data['notifyInfo'] = $notifyInfo;
		$this->data['connecUserData'] = $connecUserData;
		$this->data['userFriend'] = $userFriend;
		$this->data['notifyReplyInfo'] = $notifyReplyInfo;
        $this->template->build('inbox', $this->data);
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
			echo $interest_id; exit;
		 } else {
		 	
			$status = $this->setting_model->update_member_interest($data,$interest_id);
			if($status) {
				$this->session->set_flashdata('update_message', "Interest has been updated successfully.");
				echo $status;
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
			'card_number' => $card_number,
			'card_type' => $card_type,
			'expire_month' => $expire_month,
			'expire_year' => $expire_year,
			'cvv_code' =>$cvv_code,
			'charged' =>'0',
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
		 echo json_encode($card_info); exit;
	}	
	
	function delete_card_information() {
		
		 $card_id   = $this->input->post('card_id');
		 if(!empty($card_id)) {
		 	$status = $this->setting_model->delete_card_information($card_id);
			$this->session->set_flashdata('delete_message', "Card Information has been deleted successfully.");
		 }
		 echo json_encode($status); exit;
	}
	public function get_message_details() {
	
		$notification_id   = $this->input->post('notification_id');
		$notification_by   = $this->input->post('notification_by');
		$notification_type   = $this->input->post('notification_type');
		$this->user_model->update_notification_flag(array('notification_flag'=>'0'),$notification_id);
		$notificationInfo = $this->user_model->get_user_notification_flag($this->user->id);
		$notificCount = (isset($notificationInfo->noOfNotif)) ? $notificationInfo->noOfNotif : "";
		if($notification_type=="admin") { 
		
			$notificData =  $this->user_model->get_user_notification($notification_id);
			//asd($notificData,2);
			$notificText = "";
			if(sizeof($notificData )>0) {
				
				foreach($notificData as $key=>$value) {
			
				 $notificText .= '<li>
					<div class="alist-img" style="background-image:url('.base_url().'public/assets/user_uploads/img_user.png);"></div>
					<div class="alist-info">
					  <h4><a href="#">'.$value->first_name.' '. $value->last_name.'</a></h4>
					  <span class="alist-data">
						<p class="muted" style="margin:0 0 3px;">'. date('M d, Y h:i A', strtotime($value->created_at)).'</p>
						<p>'.$value->notification_msg.'</p>
					  </span>
					</div>
				</li>';
				}
          	}
			$notificRepliedData =  $this->user_model->get_user_all_notification($notification_id, $notification_by);
			
			$notificRepliedText = "";
			if(sizeof($notificRepliedData )>0) {
				
				foreach($notificRepliedData as $key=>$value) {
			
				 $notificRepliedText .= '<li>
					<div class="alist-img" style="background-image:url('.base_url().'public/assets/user_uploads/img_user.png);"></div>
					<div class="alist-info">
					  <h4><a href="#">'.$value->first_name.' '. $value->last_name.'</a></h4>
					  <span class="alist-data">
						<p class="muted" style="margin:0 0 3px;">'. date('M d, Y h:i A', strtotime($value->created_at)).'</p>
						<p>'.$value->reply_message.'</p>
					  </span>
					</div>
				</li>';
				}
          	}
			$notificText = $notificRepliedText.$notificText;
			 echo json_encode(array('notificationData'=>$notificText,'type'=>'admin','notificCount'=>$notificCount)); exit;
		} else {
			$connecUserData =  (array) $this->user_model->get_user_connection($notification_by);
			//echo $this->db->last_query(); exit;
			$userFriend = $this->user_model->get_user_common_friend($notification_by);
			
			//asd($connecUserData,2);
			if(sizeof($connecUserData)>0 && is_array($connecUserData)) {
				
					$connection_id = $connecUserData['id'];
					$profile_image = $connecUserData['profile_image'];
					
					$connecData='<Section class="well-box-in">
							<ul class="arrow-list">
								<li>
									<div class="alist-img"><a href="#"><img src="'.base_url().'public/assets/user_uploads/user_profile_pics/'.$profile_image.'"/></a></div>
									<div class="alist-info">
									<h4>'.$connecUserData['name'].'</h4>
									<span class="alist-data">
										<p class="muted" style="margin:0 0 3px;">'.date('M d, Y h:i A', strtotime($connecUserData['created_at'])).'</p>
										<p>'.$connecUserData['name'].' added you as a friend.</p>
									</span>
									</div>
								</li>
							  </ul>
							  <hr>';
							   if(is_array($userFriend) && sizeof($userFriend)>0) {
							  $connecData .='<h4 class="mid-title">Your connection with '.$connecUserData['name'].'</h4>
							  <ul class="people users">';
							
								foreach($userFriend as $key=>$value) {
									$connecData .='<li>
										<a href="#" class="open-user-btn"><img src="'.base_url().'public/assets/user_uploads/user_profile_pics/'.$value->profile_image.'"/></a>
										<p>'.$value->name.'</p>
									</li>';
								}
						
								
			  	$connecData .='</ul>';
				}
			$connecData .='</Section>';
			if($connecUserData['status']==0) {
				$connecData .='<section class="dis-block text-center"><input type="hidden" id="invited_by" value="'.$notification_by.'">    
			  <button class="btn btn-lg btn-blue" id="btnConneAccept" 
			  onclick="changeConnectionStatus('.$connection_id.',\'accept\')">Accept</button>
			  <button class="btn btn-lg"  id="btnConneDecline" onclick="changeConnectionStatus('.$connection_id.',\'reject\')">Decline</button>
			</section>';
			}
			
			 echo json_encode(array('connecData'=>$connecData,'type'=>'connection','notificCount'=>$notificCount)); exit;
			}
		}
		 echo json_encode(array('status'=>0)); exit;
	}
	
	public function ajax_save_notification_replay() {
		
		$notification_id   = $this->input->post('notification_id');
		$notification_by   = $this->user->id;
		$reply_message  =  $this->input->post('reply_message');
		
		$data = array(
		 	'notification_id' => $notification_id,
			'replied_by' => $notification_by,
			'reply_message' => $reply_message,
			'created_at' => date('Y-m-d h:i:s')
		 );
		 if(!empty($notification_id)) {
		 	
			$reply_id = $this->user_model->save_notification_replay($data);
		 }
		
			 $notificText = '<li>
				<div class="alist-img" style="background-image:url('.base_url().'public/assets/images/img_agent_1.png);"></div>
				<div class="alist-info">
				  <h4><a href="#">Me</a></h4>
				  <span class="alist-data">
					<p class="muted" style="margin:0 0 3px;">'. date('M d, Y h:i A').'</p>
					<p>'.$reply_message.'</p>
				  </span>
				</div>
			</li>';
		
			 echo json_encode(array('notificationData'=>$notificText)); exit;
	}



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

/** Nav main Pages ***/

	public function account_settings() 
	{
		$this->load->view('user/account_settings.php');
	}

	public function profile() 
	{ 
		$data['groups']=$this->user_model->get_connection_groups(); 
		$data['connections']=$this->user_model->get_connections($this->user->id);

		$this->load->view('user/profile.php',$data);
	}

	public function send_invitation(){
		if($this->input->is_ajax_request())
        {
            
				$data['name']	 	= $this->input->post('name');
				$data['age_range']	= $this->input->post('age_range');
				$data['email']	 	= $this->input->post('email');				 
				$data['connection_group_id']	 = $this->input->post('connection_type');				 
				$data['phone']	 	= $this->input->post('phone');
				$data['invited_by']	= $this->user->id;
				$data['created_at']	= date('Y-m-d H:i:s');


				$isUser = $this->user_model->checkUser($this->input->post('email'));
				if($isUser){
					 //Send Notification
					$ndata['notification_type']	= 'connection';
					$ndata['notification_to']	= $isUser;
					$ndata['notification_by']	= $this->user->id;				 
					
					$ndata['created_at']	= date('Y-m-d H:i:s');
					$this->user_model->save_notification($ndata);


					 
					$cdata['user_id']		= $isUser;
					$cdata['invited_by']	= $this->user->id;
					$cdata['connection_group']	= $this->input->post('connection_type'); 
					$cdata['created_at']	= date('Y-m-d H:i:s');
					$this->user_model->save_connection($cdata);




				}else{
					  $data1=array("username"=>$data['name'],'relationName'=>$this->user->name, "invitation_code"=>base64_encode($data['invited_by']));
                        $email_message=$this->load->view('emails/invitation',$data1, true);

                        $eData =array();
                        $eData['email'] = $data['email'];
                        $eData['subject'] = 'Invitation to join Field-trip.com';
                        $eData['message'] = $email_message;
                        sendMail($eData);
				}

				if($this->user_model->save_invitation($data)){
					echo json_encode(array('status'=>1));
				}else{
					echo json_encode(array('status'=>0)); 
				}

				exit;
		  
		}
	}

	
	public function check_email_availability($email='')
	{
		$email   = $this->input->post('email');
        $result  = $this->user_model->check_connection($email);  #send the post variable to the model
		
        if($result==1){
            echo "0";
        }else{
            echo "1";
        }

	}

	public function get_connection_details($memeberId='')
	{
		$data['groups']=$this->user_model->get_connection_groups(); 
		$data['usersData']=$this->user_model->get_connection_details($memeberId,$this->user->id); 

		$html = $this->load->view('user/profile/connection-detail.php',$data,true); 
		 echo json_encode(array('html'=>$html));
	}
	
	public function remove_connection($memeberId='')
	{
		$this->user_model->remove_connection($memeberId,$this->user->id);
		$data['connections']=$this->user_model->get_connections($this->user->id);
		$html = $this->load->view('user/profile/connection-list.php',$data,true); 
		 echo json_encode(array('html'=>$html));
		 
	}

	public function filter_connection($type=0)
	{
		 
		$data['connections']=$this->user_model->search_connections($this->user->id, $type);
		$html = $this->load->view('user/profile/connection-list.php',$data,true); 
		 echo json_encode(array('html'=>$html));
		 
	}



	public function my_interests() 
	{
		$this->load->view('user/my_interests.php');
	}

	public function offers() 
	{
		$this->load->view('user/offers.php');
	}	
	
	public function my_exp() 
	{
		$this->load->view('user/my_exp.php');
	}

	public function design() 
	{
		$this->load->view('user/design.php');
	}

	public function itinerary()
	{
		$this->load->view('user/itinerary.php');
	}
	public function profile_sub() 
	{
		$this->load->view('user/profile_sub.php');
	}
	public function change_connection_status() {
		
		$connection_id   = $this->input->post('connection_id');
		$status   = $this->input->post('connection_id');
		
		if(!empty($connection_id)) {
			
			$cstatus = $this->user_model->update_connection_data(array('status'=>$status), $connection_id);
		}
		echo $cstatus;
	}
}