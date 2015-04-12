<?php
class Account extends MY_Controller {

    
	function __construct() {
        parent::__construct();
        $this->lang->load("auth", "english");
        $this->load->model('account_model');
		$this->load->model('member_model');
    }

    function index() {
        $this->common_lib->require_login();
        $data=array ();
        $user_id = $this->user->id;
        $data['booked_experiences'] = $this->account_model->booked_experience_list($user_id);
        $data['completed_experiences'] = $this->account_model->completed_experience_list($user_id);
        $data['user_like'] = $this->account_model->get_user_likes($user_id);
        $data['user_liked_experince'] = $this->account_model->user_liked_experience($user_id);
        $data['total_complete_experience'] = $this->account_model->get_completed_experience($user_id);
        $data['user_booked'] = $this->account_model->get_user_booked($user_id);
        if($this->ion_auth->logged_in())
            $this->load->view('account/index', $data);
    }
	public function signup() {
	
		$this->data['title'] = "Sign Up";
		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('footer', 'partials/footer');
		
		$membership = $this->member_model->get_membership();
		$interestData = $this->member_model->get_interest_data();
		
		$this->data['membership'] = $membership;
		$this->data['interestData'] = $interestData;
		$this->template->build('signup', $this->data);
	 }
    //log the user out
    function logout() {
        $this->data['title'] = "Logout";

        //log the user out
        $logout = $this->ion_auth->logout();

        //redirect them to the login page
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('account/login');
    }

    //forgot password
    function forgot_password() {
        if ($this->ion_auth->logged_in()) {
            redirect('account/offers', 'refresh');
        }
      $email = $this->input->post('email');

        if($email) {
           
           
                // get identity for that email
                $identity = $this->ion_auth->where('email', strtolower($email))->users()->row();
			
                if (empty($identity)) {
                    $this->ion_auth->set_message($this->lang->line('forgot_password_email_not_found'));
                    $response = array(
                        "status" => 0,
                        "valid_errors" => $this->lang->line('forgot_password_email_not_found')
                    );
                    echo json_encode($response);
                    exit;
                }
                //run the forgotten password method to email an activation code to the user
                $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});
			

                if ($forgotten) {
                    //if there were no errors
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    $response = array(
                        "status" => 1,
                        "redirect_url" => base_url() . "account/login"
                    );
                    echo json_encode($response);
                    exit;
                } else {
                    $response = array(
                        "status" => 0,
                        "valid_errors" => $this->ion_auth->errors()
                    );
                    echo json_encode($response);
                    exit;
                }


             
        }
        $this->data['email'] = array('name' => 'email',
            'id' => 'email',
            'type' => 'text',
            'value' => $this->form_validation->set_value('email'),
            'placeholder' => 'Email',
        );
		
        $this->data['title'] = "Forgot Password";
         $this->template->set_partial('header', 'partials/section_header');
        $this->template->set_partial('footer', 'partials/footer_main');
       // $this->template->set_layout('admin');
        $this->template->build('forgot_password', $this->data);
    }

    //reset password - final step for forgotten password
    public function reset_password_one($code = NULL) {
        if ($this->ion_auth->logged_in()) {
            redirect('account/offers', 'refresh');
        }
        if (!$code) {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);
        if ($user) {
            $csrf_array = $this->_get_csrf_nonce();
            foreach ($csrf_array as $key => $val) {
                $name = $key;
                $value = $val;
            }
            $csrf = array('name' => $name, 'value' => $value, 'id' => 'ran', 'type' => 'hidden');

            //if the code is valid then display the password reset form
            $this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');
            if ($this->input->is_ajax_request()) {

                if ($this->form_validation->run() == false) {
                    //display the form
                    //set the flash data error message if there is one
                    $msg = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
                    $name = $this->session->flashdata('csrfkey');
                    $value = $this->session->flashdata('csrfvalue');
                    $response = array(
                        "status" => 0,
                        "valid_errors" => $msg,
                        "name" => $name,
                        "value" => $value
                    );
                    echo json_encode($response);
                    exit;
                } else {
                    // do we have a valid request?
                    if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) {
                        die('2');

                        //something fishy might be up
                        $this->ion_auth->clear_forgotten_password_code($code);
                        // show_error($this->lang->line('error_csrf'));

                        $response = array(
                            "status" => 0,
                            "valid_errors" => $this->lang->line('error_csrf')
                        );
                        echo json_encode($response);
                        exit;
                    } else {
                        // die('1');
                        // finally change the password
                        $identity = $user->{$this->config->item('identity', 'ion_auth')};

                        $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                        if ($change) {
                            //if the password was successfully changed
                            // $this->session->set_flashdata('message', $this->ion_auth->messages());
                            
                            $response = array(
                                "status" => 1,
                                "redirect_url" => base_url() . "account/logout",
                                "message" => $this->ion_auth->messages()
                            );
                            echo json_encode($response);
                            exit;
                        } else {
                            $this->session->set_flashdata('message', $this->ion_auth->errors());
                            $response = array(
                                "status" => 2,
                                "redirect_url" => base_url() . "account/forgot_password"
                            );
                            echo json_encode($response);
                            exit;
                        }
                    }
                }
            }
            $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $this->data['new_password'] = array(
                'name' => 'new',
                'id' => 'new',
                'type' => 'password',
                'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            );
            $this->data['new_password_confirm'] = array(
                'name' => 'new_confirm',
                'id' => 'new_confirm',
                'type' => 'password',
                'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            );
            $this->data['user_id'] = array(
                'name' => 'user_id',
                'id' => 'user_id',
                'type' => 'hidden',
                'value' => $user->id,
            );
            // $this->data['csrf'] = $this->_get_csrf_nonce();

            $this->data['csrf'] = $csrf;
            $this->data['code'] = $code;
            $this->data['title'] = "Reset Password";
             $this->template->set_partial('header', 'partials/section_header');
       		 $this->template->set_partial('footer', 'partials/footer_main');
            $this->template->build('reset_password', $this->data);
        } else {
            //if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("account/forgot_password", 'refresh');
        }
    }

    public function reset_password($code = NULL) {
       
		if (!$code) {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);
 
        if ($user) {
            //if the code is valid then display the password reset form

            $this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

            if ($this->form_validation->run() == false) {
                //display the form
                //set the flash data error message if there is one
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                $this->data['new_password'] = array(
                    'name' => 'new',
                    'id' => 'new',
                    'type' => 'password',
                    'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
                );
                $this->data['new_password_confirm'] = array(
                    'name' => 'new_confirm',
                    'id' => 'new_confirm',
                    'type' => 'password',
                    'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
                );
                $this->data['user_id'] = array(
                    'name' => 'user_id',
                    'id' => 'user_id',
                    'type' => 'hidden',
                    'value' => $user->id,
                );
                $this->data['csrf'] = $this->_get_csrf_nonce();
                $this->data['code'] = $code;

                $this->data['title'] = "Reset Password";
                $this->template->set_partial('header', 'partials/header');
                $this->template->set_partial('footer', 'partials/footer');
               // $this->template->set_layout('admin');
                $this->template->build('reset_password', $this->data);
            } else {
                // do we have a valid request?
                // if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) {

                //     //something fishy might be up
                //     $this->ion_auth->clear_forgotten_password_code($code);

                //     show_error($this->lang->line('error_csrf'));
                // } else {
                    // finally change the password
                    $identity = $user->{$this->config->item('identity', 'ion_auth')};

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                    if ($change) {
                        //if the password was successfully changed
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                       
                         $data=array("username"=>$user->first_name, "password"=>$this->input->post('new'));
                        $email_message=$this->load->view('emails/resetpass',$data, true);

                        $eData =array();
                        $eData['email'] = $user->email;
                        $eData['subject'] = 'New Password';
                        $eData['message'] = $email_message;
                        sendMail($eData);
                        $this->ion_auth->login_verify($user->email,$this->input->post('new'),1);
                        echo json_encode(array('status'=>1,'redirect_url'=>base_url().'admin'));
                        die;
                    } else {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('account/reset_password/' . $code, 'refresh');
                    }
                //}
            }
        } else {
            //if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("account/forgot_password", 'refresh');
        }
    }

    function _get_csrf_nonce() {
        $this->load->helper('string');
        $key = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    function _valid_csrf_nonce() {
        if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
                $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
 

    public function verify( $salt = null ) 
    {
        if ( isset( $salt ) ) 
        {
               $userId =  $this->account_model->verify($salt);
                if( $userId) 
                {    

                    $userdata = $this->account_model->get_user_datas($userId);
                
                    $passRand = $this->generateRandomString(8);
                    $saltChar = $this->ion_auth->salt();
                    $userpass = $this->ion_auth->hash_password($passRand,$saltChar); 

                    $this->account_model->update_password($userId,$userpass);

                   // $this->session->set_flashdata('confirmation_message', 'Thank you for activiating your account '.$userdata->first_name.', you are now logged in to field-trip.com We have also sent you an email with your login detail for future use.');

                    
                    $data=array("username"=>$userdata->first_name,"email"=>$userdata->email, "password"=>$passRand);
                    $email_message=$this->load->view('emails/welcome',$data, true);

                    $eData =array();
                    $eData['email'] = $userdata->email;
                    $eData['subject'] = 'Welcome to field-trip.com';
                    $eData['message'] = $email_message;
                    sendMail($eData);
					
                     $this->ion_auth->login_verify($userdata->email,$passRand);
                }
                else
                {
                    $this->form_validation->set_error('Could not verify that key');
                }
            }
            else
            {
                $this->form_validation->set_error('You did not provide the verification key');
            }
            
            $this->load->view('account/verify');
        }

    private  function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
		
	 public function member_registration() {
	   
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		
		if($this->member_model->checkUser($email)) {
		
			$date['response'] = false;
			$this->session->set_flashdata('error_message', 'User already exists');
			echo json_encode($date); exit;
		}
		$data = array(
			'name' => $name,
			'dob' => $dob,
			'gender' => $gender,
			'email' => $email,
			'username'=>$email,
			'phone' => $phone,
			'address' => $address,
			'created_at' => date('Y-m-d h:i:s')
		);
		
		$member_id = $this->member_model->save_member($data);
		
		$userInfo = array(
					'name' => $name,
					'dob' => $dob,
					'gender' => $gender,
					'email' => $email,
					'username'=>$email,
					'phone' => $phone,
					'address' => $address,
					'member_id' =>(!empty($member_id)) ? $member_id:"",
					);
					
					
		echo  json_encode($userInfo);die;
    }
	function check_email_availability()
    {
        $email   = $this->input->post('email');
        $result  = $this->member_model->checkUser($email);  #send the post variable to the model
		
        if($result==1){
            echo "0";
        }else{
            echo "1";
        }
    }
	public function ajax_member_interest() {
		
		 $member_id   = $this->input->post('member_id');
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
		 if(!empty($member_id)) {
		 	$interest_id = $this->member_model->save_member_interest($data);
			if($interest_id) {
				echo $interest_id;
			}
			echo "0";
		 }
	}
	
	public function ajax_member_set_password() {
		
		 $member_id   = $this->input->post('member_id');
		 $new_password   = $this->input->post('new_password');
		
		 $saltChar = $this->ion_auth->salt();
		 $userpass = $this->ion_auth->hash_password($new_password,$saltChar); 
		 $data = array(
			'salt' => $saltChar,
			'password' => $userpass,
			'updated_at' => date('Y-m-d h:i:s')
		 );
		
		 if(!empty($member_id)) {
		 	$status = $this->member_model->update_user($data, $member_id);
			if($status) {
				echo '1'; exit;
			}
			echo "0"; exit;
		 }
	}
	
	public function offers() {
		
		$this->data['title'] = "Offers";
		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('footer', 'partials/footer');
		
		//$this->data['thankInfo'] = "Comming Soon...........";
		$this->template->build('offers');
	}
	
	public function member_strip_payment() {
		
		require_once(APPPATH.'libraries/stripe/init.php');
		
		\Stripe\Stripe::setApiKey("sk_test_AUc9hGRVBT2u1pCT6E588tBn");
		
		$member_id = $this->input->post('member_id');
		$token = $this->input->post('token');
		$currency = $this->input->post('currency'); 
		$amount = $this->input->post('amount'); 
		$plan_id = $this->input->post('plan_id'); 
		
		$userInfo = $this->member_model->get_user_data($member_id);
	
		$stripArr = array("amount" => $amount,  "currency" => $currency,  "card" => $token, "description" => "Membership charge from $userInfo->email");
		
		$PayDataInfo = array('member_id'=>$member_id,
						   'amount'=>$amount,
						   'currency'=>$currency,
						   'status'=>"unpaid",
						   'created_at'=>date("Y-m-d h:i:s")
						  );
		
		if($member_id) {
			$payment_id = $this->member_model->save_member_payment_data($PayDataInfo);
			
		}
		$error = '';
		$success = '';
		
		try {
			if (!isset($token))
				throw new Exception("The Stripe Token was not generated correctly");
			
			$payinfo = \Stripe\Charge::create($stripArr);
			
			if($payinfo->status=="paid") {
				
				$this->member_model->update_member_payment_data(array('status'=>'paid','updated_at'=>date("Y-m-d h:i:s")),$payment_id);
				$userData = array('plan_id'=>$plan_id,'active'=>'1');
				$payment_id = $this->member_model->update_user($userData,$member_id);
				
				$cardInfoData = array('member_id'=>$member_id,
									  'card_type'=>$payinfo->source->brand,
									  'card_number'=>$payinfo->source->last4,
									  'expire_month'=>$payinfo->source->exp_month,
									  'expire_year'=>$payinfo->source->exp_year,
									  'created_at'=>date("Y-m-d h:i:s")
									 );
			    $this->member_model->save_member_card($cardInfoData);
			} else {
				 echo "error"; exit;
			}
			
			
			$data=array("username"=>$userInfo->name,"email"=>$userInfo->email,"amount"=>$amount);
			$email_message=$this->load->view('emails/payment_user',$data, true);

			$eData =array();
			$eData['email'] = $userInfo->email;
			$eData['subject'] = 'Payment Information';
			$eData['message'] = $email_message;
			sendMail($eData);
			
			$data=array("email"=>$userInfo->email,"amount"=>$amount);
			$email_message=$this->load->view('emails/payment_admin',$data, true);
			
			$eData1 =array();
			$eData1['email'] = 'info@field-trip.com';
			$eData1['subject'] = 'New User Payment Information';
			$eData1['message'] = $email_message;
			sendMail($eData1);
			
			exit;
		}
		catch (Exception $e) {
			$error = $e->getMessage();
			echo $error; exit;
		} 
		
	}
}
