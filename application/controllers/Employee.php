<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Employee extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Hotel_model');
        $this->load->model('Employee_model');
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		if(! $this->isUserLoggedIn){ 
            redirect('users/login');
        }
	}

    public function savedata()
	{  

		if($this->input->post('type')==1)
		{   
			

			$staffName=$this->input->post('staffName');
			$temporaryAddress=$this->input->post('temporaryAddress');
            $email=$this->input->post('email');
            $jobPosition=$this->input->post('jobPosition');
			$mobileNumber=$this->input->post('mobileNumber');
			$gender=$this->input->post('gender');
            $staffImage = $this->input->post('staffImage');

			
			$this->Employee_model->saverecords($staffName,$temporaryAddress,$email,
            $jobPosition,$mobileNumber,$gender,$staffImage);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
    public function image_upload(){
        if($_FILES["file"]["name"] != '')
            {
            $test = explode('.', $_FILES["file"]["name"]);
            // print_r($test['0']);exit();
            $ext = end($test);
            $name = $test['0'] . '.' . $ext;
            $location = './images/' . $name;  
            move_uploaded_file($_FILES["file"]["tmp_name"], $location);
            echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
            }
    }

    public function view_all_staff_body(){
        if($this->input->post('type') == '1'){
            $data= $this->Employee_model->all_staff_body();

            if($data){

                echo json_encode(array(
                    "data" =>$data,
                    "statusCode"=>200,
                ));
            }else{
                echo json_encode(array(
                    "statusCode"=>201,
                ));

            }

          

        }

    }
}