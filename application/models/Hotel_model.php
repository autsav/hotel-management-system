<?php
class Hotel_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'hotel'; 
    } 

	function saverecords($name,$email,$address,$rate,$phone,$image, $user_id, $role_id)
	{
       
		$query="INSERT INTO `hotel`( `name`, `email`,`address`,`rate`, `phone`, `image`,`user_id`,`role_id`) 
		VALUES ('$name','$email','$address','$rate','$phone','$image' ,'$user_id','$role_id')";
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
			$this->db->where('hotel_id', $id);
			$this->db->delete($this->table);
			return true;
		}
  
}