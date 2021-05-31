<?php
class Booking_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'booking'; 
    } 

	function saverecords($full_name,$gender,$transport,$email,$current_address,$booking_date,$time,$mobile,$total_amount, $room_id,$destination_id,$food_id,$customer_id,$hotel_id)
	{     
        // print_r(($room_id));
        // exit();
            // print_r($hotel_id);
            // exit();
        // To save multiple checkboxes 
        
       
            $status = 0;
		$query="INSERT INTO `booking`(`full_name`,`gender`,`transport`,`email`,`status`,`current_address`,`booking_date`, `time`, `mobile`,`total_amount`,`room_id`,`destination_id`,`food_id`,`customer_id`,`hotel_id`) 
		                    VALUES ('$full_name','$gender','$transport','$email','$status','$current_address','$booking_date','$time','$mobile' ,'$total_amount','$room_id','$destination_id','$food_id','$customer_id','$hotel_id')";
      
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
    public function get_all_seller_booking($customer_id){
        
        //get hotel id
          //Select the hotel_id///
          

          $this->db->select('hotel_id'); 
          $this->db->from('hotel'); 
          $this->db->where('user_id', $customer_id['id']);
      
          // $this->db->where('booking_date <=', $today_date);    
          $id = $this->db->get()->result_array();   
          if($id){

                    $hotel_id =  ($id[0]['hotel_id']);
                    $this->db->select('hotel.image,booking.customer_id,booking.total_amount,booking.booking_id,booking.full_name,booking.hotel_id,booking.current_address,booking.booking_date,booking.time,booking.food_id,booking.room_id,booking.destination_id,booking.status');
                    $this->db->from('hotel');
                    $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
                    $this->db->where('booking.hotel_id', $hotel_id);   
                    $query = $this->db->get();
                    $result = $query->result_array(); 
                   
                    return $result;

          } else{
            return 0;
          }
                
        

    }
    public function get_hotel_status($customer_id){
        $status =0;
        $this->db->select('hotel.image,booking.customer_id,booking.total_amount,booking.booking_id,booking.full_name,booking.hotel_id,booking.current_address,booking.booking_date,booking.time,booking.food_id,booking.room_id,booking.destination_id,booking.status');
        $this->db->from('hotel');
        $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
        $this->db->where('booking.status', $status); 

        // $this->db->where('booking.customer_id', $customer_id['id']);

         $query = $this->db->get();
         $result = $query->num_rows(); 
         if($result == 0){
            return 0;

         }
        //  print_r($result);
        //  exit();
         return $result;


        
        // $this->db->select('hotel_id'); 
        // $this->db->from('hotel'); 
        // $this->db->where('user_id', $customer_id['id']);
    
        // $id = $this->db->get()->result_array();   
        // if($id){
        //     $status =0;
        //           $hotel_id =  ($id[0]['hotel_id']);
        //           $this->db->select('hotel.image,booking.customer_id,booking.total_amount,booking.booking_id,booking.full_name,booking.hotel_id,booking.current_address,booking.booking_date,booking.time,booking.food_id,booking.room_id,booking.destination_id,booking.status');
        //           $this->db->from('hotel');
        //           $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
        //           $this->db->where('booking.hotel_id', $hotel_id);   
        //           $this->db->where('booking.status', $status);   

        //           $query = $this->db->get();
        //           $result = $query->num_rows(); 
                 
        //           return $result;

        // } else{
        //   return 0;
        // }


        // $this->db->where('status =', 0);
        //     $query = $this->db->get($this->table);
        //  $result =$query->num_rows();
        //  return $result;

    }
    public function get_hotel_seller_status($customer_id){
        
        $this->db->select('hotel_id'); 
        $this->db->from('hotel'); 
        $this->db->where('user_id', $customer_id['id']);
    
        // $this->db->where('booking_date <=', $today_date);    
        $id = $this->db->get()->result_array();   
        if($id){
            $status =0;
                  $hotel_id =  ($id[0]['hotel_id']);
                  $this->db->select('hotel.image,booking.customer_id,booking.total_amount,booking.booking_id,booking.full_name,booking.hotel_id,booking.current_address,booking.booking_date,booking.time,booking.food_id,booking.room_id,booking.destination_id,booking.status');
                  $this->db->from('hotel');
                  $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
                  $this->db->where('booking.hotel_id', $hotel_id);   
                  $this->db->where('booking.status', $status);   

                  $query = $this->db->get();
                  $result = $query->num_rows(); 
                 
                  return $result;

        } else{
          return 0;
        }


        $this->db->where('status =', 0);
            $query = $this->db->get($this->table);
         $result =$query->num_rows();
         return $result;

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
   

    public function all_customer_booking(){
        $user_id = $this->session->userdata('userId') ;
        
        
        $today_date = date("Y-m-d");
       $status = 1;
        
        //Select the hotel_id///
        $this->db->select('hotel_id'); 
        $this->db->from($this->table); 
        $this->db->where('customer_id', $user_id);
        // $this->db->where('booking_date <=', $today_date);
    
        $h_id = $this->db->get()->result_array(); 


        $all_hotel_id = [];
        foreach($h_id as $i){
            array_push($all_hotel_id , $i['hotel_id']);
            
        }
        
        $all_hotel_id = array_unique($all_hotel_id);
        // print_r($all_hotel_id);
        // exit();


        if ($all_hotel_id){
            $all_result= [];
            foreach($all_hotel_id as $id){
               $result = $this->booking_hotels($id,$status,$user_id);
                
               array_push($all_result, $result[0]);
            }
        }else{
        $all_result = 0 ;
        }
      
        
        return $all_result;



        // ehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
        
        // if($id){
         
              
        //         $hotel_id =  (hid);
       
                
        //         $this->db->select('hotel.image,booking.status,booking.hotel_id,booking.full_name,booking.mobile,booking.current_address,booking.food_id,booking.destination_id,booking.room_id,booking.total_amount'); 
        //         $this->db->from('hotel');
        //         $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
        //         $this->db->where('booking.hotel_id', $hotel_id);
        //         $this->db->where('booking.customer_id', $user_id);
        //         $this->db->where('booking.status', $status);
        
        
        
        
          
        //         $query = $this->db->get(); 
              
        //         $result = $query->result_array(); 
        //         return $result;



       
          

        // }else{
        //     $result = '0';
        //     return $result;
        // }
      
    }
    public function booking_hotels($id,$status,$user_id){

        if($id){
            $hotel_id =  $id;
       
                //return the booking details with hotel image
                $this->db->select('hotel.image,booking.status,booking.hotel_id,booking.full_name,booking.mobile,booking.current_address,booking.food_id,booking.destination_id,booking.room_id,booking.total_amount'); 
                $this->db->from('hotel');
                $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
                $this->db->where('booking.hotel_id', $hotel_id);
                $this->db->where('booking.customer_id', $user_id);
                $this->db->where('booking.status', $status);
        
        
        
        
          
                $query = $this->db->get(); 
              
                $result = $query->result_array(); 
                if($result){
            
                    return $result;
                }
                
                
        
                }else{
        
                   return 0;
        
                }


        //     $hotel_id =  $id;
        // $this->db->select('*'); 
        // $this->db->from('hotel');
        // $this->db->where('hotel_id', $hotel_id);

        // $query = $this->db->get(); 
        // $result = $query->result_array(); 
        // if($result){
            
        //     return $result;
        // }
        
        

        // }else{

        //    return 0;

        // }


    }
    public function loyalty_point(){
        $user_id = $this->session->userdata('userId') ;
        
        $today_date = date("Y-m-d");
       $status = 1;
        
        //Select the hotel_id///
        $this->db->select('hotel_id'); 
        $this->db->from($this->table); 
        $this->db->where('customer_id', $user_id);
        $this->db->where('status', $status);
        
            $query = $this->db->get()->result_array(); 
            $result =$query;
            if($result){
            $all_hotel = [];
            foreach($result as $hotel){
                array_push($all_hotel , $hotel['hotel_id']);
                
            }
            $number_of_hotel = count($all_hotel);
            $total_royalty_point = 20*$number_of_hotel;
            return $total_royalty_point;

            }else{
                return 0;
            }

            // $all_hotel_id = array_unique($all_hotel_id);


        // $this->db->where('booking_date <=', $today_date);
    
        // $id = $this->db->get()->result_array(); 
      
        
        //     return $result * 20;
     
        
        // if($id){
        //     $hotel_id =  ($id[0]['hotel_id']);
       
        //     $this->db->select('hotel.image,booking.hotel_id,booking.full_name,booking.mobile,booking.current_address,booking.food_id,booking.destination_id,booking.room_id,booking.total_amount'); 
        //     $this->db->from('hotel');
        //     $this->db->join('booking', 'booking.hotel_id = hotel.hotel_id');
        //     $this->db->where('booking.hotel_id', $hotel_id);
        //     $this->db->where('booking.customer_id', $user_id);
        //     $this->db->where('booking.status', $status);
    
    
    
    
      
        //     $query = $this->db->get(); 
        //     $result =$query->num_rows();
        //     return $result * 20;

        // }else{
        //     return 0;
        // }
      
      
      
       
    }
    public function get_food($food_id)
    {   
     
        $this->db->select('name');
        $this->db->from('food');
        $this->db->where('food_id', $food_id);

         $query = $this->db->get();
         $result = $query->result_array(); 
         if($result){
            return $result;
             
         }else{
            return 'food';
         }
      
    }
    public function get_room($room_id)
    {   
        $this->db->select('name');
        $this->db->from('room');
        $this->db->where('room_id', $room_id);

         $query = $this->db->get();
         $result = $query->result_array(); 
         if($result){
            return $result;
             
         }else{
            return 'room';
         }

    }
    public function get_destination($destination_id)
    {   
        $this->db->select('name');
        $this->db->from('destination');
        $this->db->where('destination_id', $destination_id);

         $query = $this->db->get();
         $result = $query->result_array(); 
         if($result){
            return $result;
             
         }else{
            return 'destination';
         }

    }



}