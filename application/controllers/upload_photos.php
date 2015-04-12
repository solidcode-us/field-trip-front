<?php
/*
  Author: Barqsol
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload_photos extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        if (!$this->ion_auth->logged_in())
        {
                redirect('account/login');
        }
       // if(!$this->ion_auth->is_admin()){
       //     show_error("you are not allowed here", 500);
       // }
        
        /* Template configuration */
        /* ends */
    }
    
    function dropzone() {
        if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
            $this->_upload('file', $_FILES['file']['name'], 'experience', NULL);

            exit;
        }
    }

    function food_dropzone() {
        if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
            $this->food_upload('file', $_FILES['file']['name'], 'experience', NULL);

            exit;
        }
    }

    function lodging_dropzone() {
        if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
            $this->lodging_upload('file', $_FILES['file']['name'], 'experience', NULL);

            exit;
        }
    }

    


     public function upload_food_video() {
        if (!empty($_POST['video'])) {
            $data = array(
               'video_url' => $_POST['video']
            );

            $this->db->where('id', $_POST['id']);
            $this->db->update('foods', $data);
        }
        redirect('/food/view/'.$_POST['id'] , 'refresh');
    }

    public function upload_lodging_video() {
        if (!empty($_POST['video'])) {
            $data = array(
               'video_url' => $_POST['video']
            );

            $this->db->where('id', $_POST['id']);
            $this->db->update('lodgings', $data);
        }
        redirect('/lodging/view/'.$_POST['id'] , 'refresh');
    }


    public function upload_video() {
        if (!empty($_POST['video'])) {
            $data = array(
               'activity_video_url' => $_POST['video']
            );

            $this->db->where('activity_id', $_POST['id']);
            $this->db->update('activities', $data);
        }
        redirect('/activity/view/'.$_POST['id'] , 'refresh');
    }

    public function exp_img_delete() {

        $file_name = $this->input->post('image_name');
        $pic_type = $this->input->post('pic_type');
        $path = $this->config->item('cdn_images_server_path');
        if (file_exists($path . $file_name)) {
            unlink($path . $file_name);
            echo json_encode(array('response' => 'deleted', 'message' => 'Photo "' . $file_name . '" has been deleted successfully!'));
        } else {
            echo json_encode(array('response' => 'not_deleted', 'message' => 'Could not delete ' . $file_name . ', file does not exist'));
        }
    }

    private function _upload($file = null, $name = null, $folder = NULL, $pic_type = null) {
        if ($file != NULL) {

            $config['upload_path'] = $this->config->item('cdn_images_server_path'); //"./public/assets/user_uploads/$folder";

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file)) {
                $upload_error = array('error' => $this->upload->display_errors());
                echo json_encode(array("status" => 0, "upload_error" => strip_tags($upload_error['error'])));
            } else {
                $image_data = $this->upload->data();
                $photo = "";
                $imagename = time().rand(1111,9999).rand(111,999);
                $photo = $imagename . '.' . pathinfo($image_data['file_name'], PATHINFO_EXTENSION);
                $name_by_server = $image_data['file_name'];

                $data = array(
                   'activity_id' => $_POST['id'],
                   'activity_photo' => $photo,
                   'date' => date('Y-m-d')
                );

                $this->db->insert('activity_photos', $data);

                rename($this->config->item('cdn_images_server_path') . $image_data['file_name'], $this->config->item('cdn_images_server_path').$photo);

                echo json_encode(array("status" => 1, "imagePath" => $this->config->item('cdn_images_http_path') . $photo,
                    "imageName" => $photo, 'real_name' => $name, 'server_name' => $name_by_server));
            }
            exit;
        }
    }


    private function food_upload($file = null, $name = null, $folder = NULL, $pic_type = null) {
        if ($file != NULL) {

            $config['upload_path'] = $this->config->item('cdn_images_server_path'); //"./public/assets/user_uploads/$folder";

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file)) {
                $upload_error = array('error' => $this->upload->display_errors());
                echo json_encode(array("status" => 0, "upload_error" => strip_tags($upload_error['error'])));
            } else {
                $image_data = $this->upload->data();
                $photo = "";
                $imagename = time().rand(1111,9999).rand(111,999);
                $photo = $imagename . '.' . pathinfo($image_data['file_name'], PATHINFO_EXTENSION);
                $name_by_server = $image_data['file_name'];

                $data = array(
                   'food_id' => $_POST['id'],
                   'photo' => $photo,
                   'created_date' => date('Y-m-d')
                );

                $this->db->insert('food_photos', $data);

                rename($this->config->item('cdn_images_server_path') . $image_data['file_name'], $this->config->item('cdn_images_server_path').$photo);

                echo json_encode(array("status" => 1, "imagePath" => $this->config->item('cdn_images_http_path') . $photo,
                    "imageName" => $photo, 'real_name' => $name, 'server_name' => $name_by_server));
            }
            exit;
        }
    }

    private function lodging_upload($file = null, $name = null, $folder = NULL, $pic_type = null) {
        if ($file != NULL) {

            $config['upload_path'] = $this->config->item('cdn_images_server_path'); //"./public/assets/user_uploads/$folder";

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file)) {
                $upload_error = array('error' => $this->upload->display_errors());
                echo json_encode(array("status" => 0, "upload_error" => strip_tags($upload_error['error'])));
            } else {
                $image_data = $this->upload->data();
                $photo = "";
                $imagename = time().rand(1111,9999).rand(111,999);
                $photo = $imagename . '.' . pathinfo($image_data['file_name'], PATHINFO_EXTENSION);
                $name_by_server = $image_data['file_name'];

                $data = array(
                   'lodging_id' => $_POST['id'],
                   'photo' => $photo,
                   'created_date' => date('Y-m-d')
                );

                $this->db->insert('lodging_photos', $data);

                rename($this->config->item('cdn_images_server_path') . $image_data['file_name'], $this->config->item('cdn_images_server_path').$photo);

                echo json_encode(array("status" => 1, "imagePath" => $this->config->item('cdn_images_http_path') . $photo,
                    "imageName" => $photo, 'real_name' => $name, 'server_name' => $name_by_server));
            }
            exit;
        }
    }
    
    public function photos_preview(){
        
        if($this->input->post()){
            
            $photos = $this->input->post('photos');
            $video_url = $this->input->post('video_url');
            $photo_array = array(); 
            $video_valid_flag = FALSE;            
            
            if(!empty($video_url)){
                
                if (strpos($video_url, 'youtube') > 0) {
                
                $video_type = 'youtube';
                $url = $video_url;
                //preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                preg_match('/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/', $url, $matches);

                if($matches[2].length == 11){ // checking the length of the video id
                    $video_valid_flag = TRUE;
                    $url_id = $matches[2];
                    $vid_image = "http://img.youtube.com/vi/" . $url_id . "/0.jpg";
                }
                
            } elseif (strpos($video_url, 'vimeo') > 0) {
                
                $url = $video_url;
                $video_type = 'vimeo';
                $vid_id = explode('/',$url);  // from ID to end of the string
                $number_of_slasehes =  count($vid_id); 
                
                if($vid_id[$number_of_slasehes - 1].length == 8){
                    
                    $video_valid_flag = TRUE;
                    $url_id = $vid_id[$number_of_slasehd - 1];
                }
                
                
            }
        
            if($video_valid_flag){               
                    array_unshift($photo_array, array('url' => $url_id,'vid_image'=> $vid_image, 'video_type' => $video_type));
           } else{
                    array_unshift($photo_array, array('url' => 'not_valid'));
           }
           
                
         }
         
         if($video_valid_flag && !empty($photos)){
            foreach($photos as $photo){
                  $photo_array[] = $photo;
            }    
         }
            
            $this->data['photos'] = $photo_array;
            
//            echo "<pre>";
//                print_r($this->data['photos']);
//            echo "</pre>";
//            die;
            $this->load->view('exp/inner_banner', $this->data); 
            
            
        }
        
    }
}

?>