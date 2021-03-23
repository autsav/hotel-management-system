<?php
class Booking_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'booking'; 
    } 

	function saverecords($full_name,$gender,$current_address,$booking_date,$time,$mobile,$total_amount, $room_id,$destination_id,$food_id,$customer_id,$hotel_id)
	{     
            // print_r($hotel_id);
            // exit();
        // To save multiple checkboxes 
        
       
            $status = 0;
		$query="INSERT INTO `booking`(`full_name`,`gender`,`status`,`current_address`,`booking_date`, `time`, `mobile`,`total_amount`,`room_id`,`destination_id`,`food_id`,`customer_id`,`hotel_id`) 
		                    VALUES ('$full_name','$gender','$status','$current_address','$booking_date','$time','$mobile' ,'$total_amount','$room_id','$destination_id','$food_id','$customer_id','$hotel_id')";
      
		$this->db->query($query);
     
	}

    public function view_booking($hotel_id){
        
         $limit =0;
         $offset=0; 
        // $this->db->where('user_id', $user_id);
        // $result = $this->db->get_where($this->table, array('hotel_id' => $hotel_id,'customer_id' => $user_id), $limit, $offset)->result_array();

        // $data['result'] = $this->db->get_where($this->table, array('hotel_id' => $hotel_id), $limit, $offset)->result_array();
        $result = $this->db->from($this->table);
                                        $this->db->order_by("booking_id", "desc");
                                        $this->db->limit(1); 
                                        $query = $this->db->get(); 
                                        return $query->result();

       
        return $result;

    }
    public function checkbox_records($full_name,$current_address,$booking_date,$time,$mobile,$total_amount, $room_id,$destination_id,$food_id,$customer_id,$hotel_id)
    {
        
        $temp_room_id = explode (",", $room_id);  
        $room_id = $temp_room_id;
        
    
        $temp_destination_id = explode (",", $destination_id);  
        $destination_id = $temp_destination_id;
        $no_destination = count($destination_id);
        

        $temp_food_id = explode (",", $food_id);  
        $food_id = $temp_food_id;
      

        for($i=0;$i<count($room_id);$i++){
           
           
            // exit();
          
            for($j=0;$j<$no_destination;$j++){

                $category_id = $room_id[$i];
                // $destination_id = $destination_id[$i];
                print_r($category_id);
                print_r($destination_id);
                // exit();
                
            
                // for($k=0;$k<count($food_id);$k++){
                //     $food_id = $food_id[$k];
                    
                //     echo"($category_id, $destination_id,$food_id)";
                    
                    
                // }
                // print_r($category_id);
                // print_r($destination_id);
                
            }

            
            //Call the modal
            
        }

        die();

    }
    
    // public function get_hotel_details($id){
    //     $user_id = ($id['id']);
    //      $limit =0;
    //      $offset=0; 
       
       
    //     $result = $this->db->get_where($this->table, array('user_id' => $user_id), $limit, $offset)->result_array();

     
    //     return $result;
    // }
    public function get_all_details($id){
        $user_id = ($id['id']);
         $limit =40;
         $offset=0; 
        // $this->db->where('user_id', $user_id);
        $result = $this->db->get($this->table,$limit, $offset)->result_array();
        // $result = $this->db->get_where($this->table, array('user_id' => $user_id), $limit, $offset)->result_array();
     
        return $result;
    }
    public function get_all_booking($customer_id)
    {   
        // $user_id = ($customer_id['id']);
        // print_r($customer_id);
        // exit();
        $this->db->select('hotel.image,booking.customer_id,booking.total_amount,booking.booking_id,booking.full_name,booking.hotel_id,booking.current_address,booking.booking_date,booking.time,booking.food_id,booking.room_id,booking.destination_id,booking.status');
        $this->db->from('hotel');
        $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
        // $this->db->where('booking.customer_id', $customer_id['id']);

         $query = $this->db->get();
         $result = $query->result_array(); 
        //  print_r($result);
        //  exit();
         return $result;



        // $this->db->select('*'); 
        // $this->db->from($this->table); 
        // $query = $this->db->get(); 
        // $result = $query->result_array(); 
        // return $result;

    }
    public function updateStatus($id,$booking_id){
        // $user_id = $this->session->userdata('userId') ;
        // print_r($booking_id);
        // print_r($id);
        // exit();
        $this->db->set('status', $id);
        $this->db->where('booking_id', $booking_id);
        $this->db->update($this->table);


        
    }
    public function get_hotel_status(){

        $this->db->where('status =', 0);
            $query = $this->db->get($this->table);
         $result =$query->num_rows();
         return $result;

    }
}