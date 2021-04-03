<?php
class Room_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'room'; 
    } 

    public function save_room($file_name,$hotel_id,$type, $price,$description,$name){
        $query="INSERT INTO `room`( `name`, `image`,`hotel_id`,`price`,`description`) 
		VALUES ('$name','$file_name','$hotel_id','$price','$description')";
    
		$this->db->query($query);  
    }
    // public function save_food($file_name,$hotel_id,$type, $price,$description,$name){
      

       
    //     $query="INSERT INTO `food`( `name`, `image`,`hotel_id`,`price`,`description`) 
	// 	VALUES ('$name','$file_name','$hotel_id','$price','$description')";
    
	// 	$this->db->query($query);   


    // }

}