<?php
class Food_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'food'; 
    } 

    public function save_food($file_name,$hotel_id,$type, $price,$description,$name){
      

       
        $query="INSERT INTO `food`( `name`, `image`,`hotel_id`,`price`,`description`) 
		VALUES ('$name','$file_name','$hotel_id','$price','$description')";
    
		$this->db->query($query);   


    }


}