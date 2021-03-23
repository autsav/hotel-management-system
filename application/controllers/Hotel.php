<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Hotel extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Hotel_model');

		$this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		if(! $this->isUserLoggedIn){ 
            redirect('users/login');
        }
	}
	public function register()
	{
		$this->load->view('register');
	}
    public function savedata()
	{
		
	
		if($this->input->post('type')==1)
		{   
			// print_r('hiuds');
			// exit();

			$name=$this->input->post('name');
			$email=$this->input->post('email');
            $address=$this->input->post('address');
            $rate=$this->input->post('rate');
			$phone=$this->input->post('number');
			$image=$this->input->post('image');
            $user_id =$this->session->userdata('userId');

			$role = $this->db->get_where('users', array('id' => $user_id), $limit=1, $offset=0)->result_array();
			$role_id = $role[0]['role_id'];
			

			$this->Hotel_model->saverecords($name,$email,$address,$rate,$phone,$image,$user_id,$role_id);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
	public function savecategory(){
		if($this->input->post('type')==1)
		{  
			$category_name=$this->input->post('categoryName');

			$this->Hotel_model->savecategory($category_name);	
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
	public function book_now($hotel_id = NULL){
			
		$data = array(); 
        if($this->isUserLoggedIn){ 

			$data['rooms'] =$this->Hotel_model->get_rooms_details($hotel_id);
			$data['foods'] = $this->Hotel_model->get_foods_details($hotel_id);
			$data['destinations']= $this->Hotel_model->get_destinations_details($hotel_id);
			$data['hotel_id']= $hotel_id;

		
            $con = array( 
                'id' => $this->session->userdata('userId') 
            );
			

			$data['user'] = $this->user->getRows($con); 
			// $data['hotels'] = $this->Hotel_model->get_hotel_details($con);

			$this->load->view('elements/header', $data); 
			$this->load->view('customer/home/navbar', $data); 
            $this->load->view('customer/home/book_now', $data); 
            
            
            $this->load->view('elements/footer'); 


           

		}
			
	}
	public function delete_hotel(){
		$hotel_id = $this->input->post('hotelId');
		return $this->Hotel_model->delete($hotel_id);
	}

}
