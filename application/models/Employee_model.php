<?php
class Employee_model extends CI_Model 
{
    function __construct() { 
        // Set table name 
        $this->table = 'employee'; 
    } 

	function saverecords($staffName,$temporaryAddress,$email,$jobPosition,$mobileNumber,$gender,$staffImage)
	{
    
        $user_id = $this->session->userdata('userId') ;
		$query="INSERT INTO `employee`( `staffName`, `temporaryAddress`,`email`,`jobPosition`,`mobile`,`gender`,`staffImage`,`user_id`) 
		                    VALUES ('$staffName','$temporaryAddress','$email','$jobPosition','$mobileNumber','$gender' ,'$staffImage','$user_id')";
   
		$this->db->query($query);
	}
    function all_staff_body(){

        $user_id = $this->session->userdata('userId') ;
  
        $this->db->select('*'); 
        $this->db->from($this->table);
        $this->db->where('user_id', $user_id);


  
        $query = $this->db->get(); 
        $result = $query->result_array(); 
      

        
        return $result;

    }
    public function delete($employee_id){
             
            $this->db->where('employee_id', $employee_id);
		    $query =	$this->db->delete($this->table);
           
			return $query;
    }

  
}