<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Hotel extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Hotel_model');
		$this->load->model('Destination_model');
		$this->load->model('Food_model');
		$this->load->model('Room_model');
		$this->load->model('Employee_model');
		$this->load->model('Booking_model');



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
	public function save_seller_data()
	{
		
	
		if($this->input->post('type')==1)
		{   
			// print_r('hiuds');
			// exit();
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
            $address=$this->input->post('address');
            $rate=$this->input->post('rate');
			$car=$this->input->post('car');
			$bus=$this->input->post('bus');

			$phone=$this->input->post('number');
			$image=$this->input->post('image');
			$description=$this->input->post('description');

			// $user_id=$this->input->post('userId');
            $user_id =$this->session->userdata('userId');
			// print_r($user_id);
			// exit();

			$role = $this->db->get_where('users', array('id' => $user_id), $limit=1, $offset=0)->result_array();
			// print_r($role);
			// exit();
			$role_id = $role[0]['role_id'];
			

			$this->Hotel_model->saverecords($name,$email,$address,$rate,$car,$bus,$phone,$image,$user_id,$role_id,$description);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
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
			$car=$this->input->post('car');
			$bus=$this->input->post('bus');

			$phone=$this->input->post('number');
			$image=$this->input->post('image');
			$description=$this->input->post('description');

			$user_id=$this->input->post('userId');
            // $user_id =$this->session->userdata('userId');
			

			$role = $this->db->get_where('users', array('id' => $user_id), $limit=1, $offset=0)->result_array();
			// print_r($role);
			// exit();
			$role_id = $role[0]['role_id'];
			

			$this->Hotel_model->saverecords($name,$email,$address,$rate,$car,$bus,$phone,$image,$user_id,$role_id,$description);	
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
	public function new_image_upload(){
		
		// Count total files
					
					$countfiles = count($_FILES['files']['name']);

					// Upload directory
					// $upload_location = './images/';

					// To store uploaded files path
					$files_arr = array();

					// Loop all files
					for($index = 0;$index < $countfiles;$index++){

					if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
						// File name
						$filename = $_FILES['files']['name'][$index];

						// Get extension
						$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

						// Valid image extension
						$valid_ext = array("png","jpeg","jpg");

						// Check extension
						if(in_array($ext, $valid_ext)){

							// File path
							$path = './images/' . $filename;  
							// $path = $upload_location.$filename;

							// Upload file
							if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
								$files_arr[] = $path;
							}
						}
					}
					}
					
					$user_data = $this->input->post();
				
					foreach ($files_arr as $value){
						$file_name = basename($value).PHP_EOL;
						$hotel_id = $this->input->post('hotelId');
						$type = $this->input->post('type');
						$price = $this->input->post('price');
						$description = $this->input->post('description');
						$name = $this->input->post('name');


						if($type == 'foods'){
							$this->Food_model->save_food($file_name,$hotel_id,$type, $price,$description,$name);
						} else if($type == 'rooms')
						{
							$this->Room_model->save_room($file_name,$hotel_id,$type, $price,$description,$name);
						}else if($type == 'hotels')
						{	
						

							$this->Hotel_model->save_hotel_image($file_name,$hotel_id,$type);
						} 
						else{
							$this->Destination_model->save_destination($file_name,$hotel_id,$type, $price,$description,$name);
						}
		

					}
				
					

					echo json_encode($files_arr);
					die;

	}
	public  function saveImage(){

		// print_r('hree');
		// $countfiles = count($_FILES['files']['name']);

			print_r($this->input->post());
			exit();

	}
	public function book_now($hotel_id = NULL){
			
		$data = array(); 
        if($this->isUserLoggedIn){ 

			$data['rooms'] =$this->Hotel_model->get_rooms_details($hotel_id);
			$data['foods'] = $this->Hotel_model->get_foods_details($hotel_id);
			$data['destinations']= $this->Hotel_model->get_destinations_details($hotel_id);
			$data['hotel_id']= $hotel_id;
			$data['hotel_info']= $this->Hotel_model->get_hotel_name($hotel_id);
            $data['get_loyalty'] = $this->Booking_model->loyalty_point();

		
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
	public function	get_hotel(){
		 
		$hotel_id = $this->input->post('hotelId');
        $user_id = $this->session->userdata('userId');
        $data=$this->Hotel_model->view_hotel($hotel_id, $user_id);
		$hotel_image_data=$this->Hotel_model->view_hotel_image($hotel_id);
    //  print_r($hotel_image_data);
	//  print_r($data);

	//  exit();
        echo json_encode(array(
            "data" =>$data,
			"hotel_image_data" => $hotel_image_data
        ));

	}
	public function review_data_save(){
		$hotel_id = $this->input->post('hotelId');
		$user_id = $this->session->userdata('userId');
		$rate = $this->input->post('rate');
		$comment =$this->input->post('comment');
		$data=$this->Hotel_model->save_review($hotel_id, $user_id, $rate , $comment);    
		echo json_encode(array(
			"statusCode"=>200
		));
	}
	 function view_all_customer_review()
	 {
		
		if($this->input->post('type') == '1'){
           
            $data= $this->Hotel_model->all_customer_review();
			
			
            if($data){

                echo json_encode(array(
                    "data" =>$data,
                    "statusCode"=>200,
                ));
            }else{
                echo json_encode(array(
					"data" =>$data,
                    "statusCode"=>201,
                ));

            }
          

        }
	}
	function post_advertisement(){
			$image = $this->input->post('adImage');
			$data= $this->Hotel_model->save_advertisement($image);
			if($data == '1'){

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

	function update_hotel(){
		
		if($this->input->post('type') == '1'){
			$name=$this->input->post('name');
			$email=$this->input->post('email');
            $address=$this->input->post('address');
			$description = $this->input->post('description');
            $rate=$this->input->post('rate');
			$car=$this->input->post('car');
            $bus=$this->input->post('bus');
			$phone=$this->input->post('number');
			$image=$this->input->post('image');
            $hotel_id = $this->input->post('hotelId');
			$data = $this->Hotel_model->update_hotel_data($name,$email,$address,$description,$rate,$car,$bus,$phone,$image,$hotel_id);
			
			if($data == '1'){

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
	function delete_employee(){
		$employee_id = $this->input->post('employee_id');
		$data = $this->Employee_model->delete($employee_id);
		if($data == '1'){

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
	function get_all_hotel(){
		$con = array( 
			'id' => $this->session->userdata('userId') 
		);
		$data = $this->Hotel_model->get_hotel_details($con);
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
