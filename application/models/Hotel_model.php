<?php
class Hotel_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'hotel'; 
    } 

	function saverecords($name,$email,$address,$rate,$phone,$image, $user_id, $role_id, $description)
	{
       
		$query="INSERT INTO `hotel`( `name`, `email`,`address`,`rate`, `phone`, `image`,`user_id`,`role_id`,`description`) 
		VALUES ('$name','$email','$address','$rate','$phone','$image' ,'$user_id','$role_id','$description')";
    //   print_r($query);
    //   exit();
		$this->db->query($query);
	}

    function savecategory($category_name)
    {   
        $query="INSERT INTO `hotel_category`( `name`) 
		VALUES ('$category_name')";
   
		$this->db->query($query);
    }
    
    public function get_hotel_details($id){

        $this->db->select('*'); 
        $this->db->from($this->table); 
        $query = $this->db->get(); 
        $result = $query->result_array(); 
        return $result;
 
    }
    public function get_seller_hotel_details($id){
            
        
        $this->db->select('*'); 
        $this->db->from($this->table); 
        $this->db->where('user_id',$id['id']);
        $query = $this->db->get(); 
        $result = $query->result_array(); 
  
        return $result;

    }
    public function get_booked_hotel_details($id){
        

        $user_id = ($id['id']);
    
        $this->db->select('hotel_id'); 
        $this->db->from('booking'); 
        $this->db->where('customer_id', $user_id);

        $h_id = $this->db->get()->result_array(); 
        $all_hotel_id = [];
        foreach($h_id as $i){
            array_push($all_hotel_id , $i['hotel_id']);
            
        }
        $all_hotel_id = array_unique($all_hotel_id);

        $all_result= [];
        foreach($all_hotel_id as $id){
           $result = $this->hotel($id);
            
           array_push($all_result, $result[0]);
        }
        
        return $all_result;
     
       
       
        
    }
    public function hotel($id){
     
       
        if($id){
            $hotel_id =  $id;
        $this->db->select('*'); 
        $this->db->from('hotel');
        $this->db->where('hotel_id', $hotel_id);

        $query = $this->db->get(); 
        $result = $query->result_array(); 
        if($result){
            
            return $result;
        }
        
        

        }else{

           return 0;

        }

    }
    public function get_all_details($id){
        $user_id = ($id['id']);
         $limit =40;
         $offset=0; 
        // $this->db->where('user_id', $user_id);
        $result = $this->db->get($this->table,$limit, $offset)->result_array();
        // $result = $this->db->get_where($this->table, array('user_id' => $user_id), $limit, $offset)->result_array();
        
        return $result;
    }

    public function get_rooms_details($hotel_id = NULL){
        $limit =40;
        $offset=0; 
       $result = $this->db->get_where('room', array('hotel_id' => $hotel_id), $limit, $offset)->result_array();
       
       return $result;
    }
    public function get_foods_details($hotel_id = NULL){
        $limit =40;
        $offset=0; 
        $result = $this->db->get_where('food', array('hotel_id' => $hotel_id), $limit, $offset)->result_array();
        return $result;
    }
    public function get_destinations_details($hotel_id = NULL){
        $limit =40;
        $offset=0; 
        $result = $this->db->get_where('destination', array('hotel_id' => $hotel_id), $limit, $offset)->result_array();
        return $result;
    }
    public function delete($id)
		{   
            // print_r($id);
            // exit();
            $this->db->where('hotel_id', $id);
		    $query =	$this->db->delete($this->table);
            
			return $query;

            // $this->db->where('hotel.hotel_id=booking.hotel_id');
            // $this->db->where('hotel.hotel_id=destination.hotel_id');
            // $this->db->where('hotel.hotel_id=food.hotel_id');
            // $this->db->where('hotel.hotel_id=room.hotel_id');
            // $this->db->where('hotel.hotel_id=rating.hotel_id');
            // $this->db->where('hotel.hotel_id', $id);
            // $this->db->delete(array('booking','destination','food','room','rating','hotel'));

			// return true;
		}
    public function view_hotel($hotel_id, $user_id){
        $this->db->select('image,rate,name,email,address,phone,description'); 
        $this->db->from($this->table); 
        $this->db->where('hotel_id', $hotel_id);
        // $this->db->where('user_id', $user_id);

        $query = $this->db->get(); 
        $result = $query->result_array(); 
       
        return $result;

    }
    public function view_hotel_image($hotel_id){
        $this->db->select('image_name'); 
        $this->db->from('hotel_image'); 
        $this->db->where('hotel_id', $hotel_id);
        // $this->db->where('user_id', $user_id);

        $query = $this->db->get(); 
        $result = $query->result_array(); 
       
        return $result;

    }

    public function save_review($hotel_id, $user_id, $rate , $comment)
    {
        $query="INSERT INTO `rating`( `hotel_id`, `user_id`,`rating`,`comment`) 
		VALUES ('$hotel_id','$user_id','$rate','$comment')";
    //   print_r($query);
    //   exit();
		$this->db->query($query);   

        
    }
    public function all_customer_review()
    {
        $user_id = $this->session->userdata('userId') ;
       
       
        //Select the hotel_id///
        $this->db->select('hotel_id'); 
        $this->db->from('hotel'); 
        $this->db->where('user_id', $user_id);
        // $this->db->where('booking_date <=', $today_date);
    
        $id = $this->db->get()->result_array(); 
      
       
        $hotel_id =  ($id[0]['hotel_id']);
   
       
       
        //return the booking details with hotel image
        $reviewing_customer= $this->reviewing_customer($hotel_id);
     
        

        return $reviewing_customer;

    }
    public function reviewing_customer($hotel_id){
        

        $this->db->select('user_id'); 
        $this->db->from('rating'); 
        $this->db->where('hotel_id', $hotel_id);

        $id = $this->db->get()->result_array(); 
       
        $reviewing_customer_id =  ($id[0]['user_id']);
        
          

        // $this->db->select('users.first_name,users.last_name,rating.comment'); 
        // $this->db->from('users');
        // $this->db->join('rating', 'users.id = rating.user_id');
        // $this->db->where('rating.user_id', $reviewing_customer_id);

        $this->db->select('users.first_name,users.last_name,rating.comment,rating.rating'); 
        $this->db->from('users');
        $this->db->join('rating', 'rating.user_id = users.id');
        // $this->db->where('rating.user_id', $reviewing_customer_id);
        $this->db->where('rating.hotel_id', $hotel_id);

        $query = $this->db->get(); 
        $result = $query->result_array(); 
      
      
      
          return $result;
    }
    public function save_advertisement($image){
        $query="INSERT INTO `advertisement`( `image`) 
		VALUES ('$image')";
    
	$result =	$this->db->query($query);  
    return $result;
  

    }
    public function update_hotel_data($name,$email,$address,$rate,$phone,$image,$hotel_id){
        if($image){
            $data=array(
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'rate' => $rate,
                'phone' => $phone,
                'image' => $image,
                
            );
            $this->db->where('hotel_id',$hotel_id);
                $query=  $this->db->update('hotel',$data);
                return $query;

        }else{
            $data=array(
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'rate' => $rate,
                'phone' => $phone,
                
                
            );
            $this->db->where('hotel_id',$hotel_id);
                $query=  $this->db->update('hotel',$data);
                return $query;
        }

       
    

    }

    public function get_hotel_name($hotel_id){
        $this->db->select('name,email,address,phone'); 
        $this->db->from('hotel'); 
        $this->db->where('hotel_id', $hotel_id);
        $query = $this->db->get(); 
        $result = $query->result_array(); 
       
          return $result;


    }

    public function save_hotel_image($file_name,$hotel_id,$type){
        $query="INSERT INTO `hotel_image`(`hotel_id`,`image_name`) 
		VALUES ('$hotel_id','$file_name')";
    
		$this->db->query($query); 


    }
    public function get_loyalty($id){
        
    }
  
}