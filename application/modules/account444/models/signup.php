<?php
class Login extends MY_Controller {
   
   function __construct()
   {
      parent::__construct();
   }
   
   function index()
   {
       $this->template->set_partial('header', 'elements/header');
       $this->template->set_partial('footer', 'elements/footer');
       $this->template
              ->set_layout('default')
              ->build('login');
   }
   
   function fb_info_save(){
       print_r($_POST);
       
       if($this->input->post()){
//                $this->load->model('users_model');                
//                $response = $this->users_model->feedback_save($this->input->post(),$this->user->id);                
//                 # get feedback against related event by specific promoter
//                $this->data['feedbacks'] = $this->users_model->get_feedback_by_prmoter_id($this->input->post('promoter_id'));               
//                $this->data['promoter_id']  = $this->input->post('promoter_id');
//                
//                $this->data['user_data']  = $this->users_model->get(array('users.id'=>$this->user->id));
//                $this->load->view('partials/lists/list_feedbacks', $this->data);
            echo "save";
      }
   }
   
}