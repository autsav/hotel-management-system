<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'users'; 
    } 
     
    /* 
     * Fetch user data from the database  
     * @param array filter data based on the passed parameters 
     */ 
    function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 
    function get_all($table)
    {
		if($table != '' && $this->db->table_exists($table))
		{
			$query = $this->db->get($table);
			if($query){
				return $query->result_array();
			}else{
				return false;
			}
		}
		else{
			return false;
		}
   }
   
     
    /* 
     * Insert user data into the database 
     * @param $data data to be inserted  
     */ 
    public function insert($data = array()) { 

        // print_r($data);
        // exit();
        
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Insert member data in db
            $insert = $this->db->insert($this->table, $data); 
            // print_r($this->db->insert_id());
            // exit();
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 

    public function get_all_users()
    {

        $this->db->select('*'); 
        $this->db->from($this->table); 
        $query = $this->db->get(); 
        $result = $query->result_array(); 
        return $result;
        
        // $this->db->select("*");
        // $this->db->from($this->table);
        // $query = $this->db->get();        
        // return $query->result();
    }
    public function get_all_sellers()
    {

        $this->db->select('*'); 
        $this->db->from($this->table); 
        $this->db->where('role_id', 2); 

        $query = $this->db->get(); 
        $result = $query->result_array(); 
        return $result;
        
        // $this->db->select("*");
        // $this->db->from($this->table);
        // $query = $this->db->get();        
        // return $query->result();
    }
    public function get_user_num()
    {
        $val = '3';
        $this->db->select('*'); 
        $this->db->from($this->table); 
        $this->db->where('role_id', $val); 
        $query = $this->db->get(); 
        $result = $query->result_array(); 

        return count($result);
        // print_r(count($result));
        // exit();

        // return $result;

    }

    public function get_seller_num()
    {      $val = '2';
        $this->db->select('*'); 
        $this->db->from($this->table); 
        $this->db->where('role_id', $val); 
        $query = $this->db->get(); 
        $result = $query->result_array(); 

        return count($result);

        // print_r(count($result));
        // exit();

    }

    public function get_user_status()
    {
        $this->db->where('status =', 0);
        $query = $this->db->get($this->table);
     $result =$query->num_rows();
     return $result;


    }

    public function updateStatus($id,$user_id){
        
        $this->db->set('status', $id);
        $this->db->where('id', $user_id);
        $this->db->update($this->table);

        // if ($this->db->affected_rows() > 0)
        //         {
        //         return TRUE;
        //         }
        //         else
        //         {
        //         return FALSE;
        //         }

    }
    public function get_advertisement(){
        // $this->db->select('*'); 
        // $this->db->from('advertisement'); 
        // $query = $this->db->get(); 
        // $result = $query->result_array(); 
        // print_r($result);
        // exit();
        // return count($result);

        $this->db->from('advertisement'); 
        $this->db->order_by('id',"desc");
        $this->db->limit(1);
        $query = $this->db->get(); 
        $result = $query->result_array(); 
     
        return $result[0];

    }
}