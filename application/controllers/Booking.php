<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Booking extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Hotel_model');

		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->model('Booking_model');
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		if(! $this->isUserLoggedIn){ 
            redirect('users/login');
        }
	}
 
    public function index(){
        // print_r($this->input->post());
        // exit();
        // if($this->input->post('rooms')){
        //     print_r('if');
        // }else{
        //     print_r('else');
        // }
        // print_r($this->input->post('rooms'));
		// exit();
    }
    public function savedata()
	{
         
		if($this->input->post('type')==1)
		{   
			$full_name=$this->input->post('fullName');
            $gender=$this->input->post('gender');
			$current_address=$this->input->post('currentAddress');
            $booking_date=$this->input->post('bookingDate');
            $time=$this->input->post('time');
			$mobile=$this->input->post('mobileNumber');
			$total_amount=$this->input->post('totalAmount');
            $room_id=$this->input->post('rooms');
            $destination_id=$this->input->post('destinations');
            $food_id=$this->input->post('foods');

            $customer_id =$this->session->userdata('userId');
            $hotel_id = $this->input->post('hotelId');
            
		    $recent_booking_id=	$this->Booking_model->saverecords($full_name, $gender,$current_address,$booking_date,$time,
            $mobile,$total_amount, $room_id,$destination_id,$food_id,$customer_id,$hotel_id);	
			echo json_encode(array(
				"statusCode"=>200,
                "booking_id"=> $recent_booking_id
			));
		} 
	}

    public function getdata()
    {
        $hotel_id = $this->input->post('hotelId');
        $user_id = $this->session->userdata('userId');
        $data=$this->Booking_model->view_booking($hotel_id, $user_id);
     
        echo json_encode(array(
            "data" =>$data
        ));

    }
    public function status(){
        $booking_id = $this->input->post('bookId'); 
        if($this->input->post('cId') == '0'){
            $id = $this->input->post('cId'); 
            $this->Booking_model->updateStatus($id, $booking_id);
            return '1';
        }else{
            $id = $this->input->post('pId'); // this will return the hid POST parameter
            $this->Booking_model->updateStatus($id, $booking_id);
            return '0';
        }
 }
    public function view_all_customer_booking(){
        
        if($this->input->post('type') == '1'){
           
            $data= $this->Booking_model->all_customer_booking();
           
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
