<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->database();
		$this->load->model('Hotel_model');
        $this->load->model('Booking_model');

         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
        
       
        
    } 
     
    public function index(){ 

        // print_r($url);
        // exit();
      
        if($this->isUserLoggedIn){ 
            redirect('users/dashboard'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
    public function dashboard()
    {   
       
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
           

            // $data['user'] = $this->user->get_all("users");
            $data['user'] = $this->user->getRows($con);
            
            $data['role'] = $data['user']['role_id'];
            $role= $data['role'] ;
            //For customer
            if($role === '3'){
            $data['hotels'] = $this->Hotel_model->get_all_details($con);     
            $this->load->view('elements/header', $data);  
            $this->load->view('customer/dashboard/navbar', $data); 
            $this->load->view('customer/dashboard/sidebar', $data); 
            $this->load->view('elements/footer'); 
            $this->load->view('customer/dashboard/index', $data);     
            
               
            }
            //For Seller
            if($role === '2'){
                $data['bookings'] = $this->Booking_model->get_all_booking($con);
                $data['hotels'] = $this->Hotel_model->get_hotel_details($con);
                $data['pending_status'] = $this->Booking_model->get_hotel_status($con);
                // print_r($data['pending_status']);
                // exit();
                $this->load->view('elements/header', $data); 
                 $this->load->view('dashboard/navbar', $data);
                $this->load->view('dashboard/sidebar', $data);
                $this->load->view('elements/footer'); 
                $this->load->view('dashboard/admin/index', $data); 
            }
            //For Super Admin
            if($role === '1'){
            $data['hotels'] = $this->Hotel_model->get_hotel_details($con);
            $data['users'] = $this->user->get_all_users();
            $data['users_status'] = $this->user->get_user_status($con);
            $data['bookings'] = $this->Booking_model->get_all_booking($con);
            $data['pending_status'] = $this->Booking_model->get_hotel_status($con);

            $data['no_profile'] = $this->user->get_user_num();
            $data['no_seller'] = $this->user->get_seller_num();
            $data['no_booking'] = count($data['bookings']);
              
            $this->load->view('elements/header', $data); 
             $this->load->view('dashboard/navbar', $data);
            $this->load->view('dashboard/sidebar', $data);
            $this->load->view('elements/footer'); 
            $this->load->view('dashboard/index', $data); 
            
            }
           
          
        }else{ 
            redirect('users/login'); 
        } 

      
    }
    public function customer_home(){ 

        if($this->isUserLoggedIn){ 

            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 

            $data['user'] = $this->user->getRows($con);    
            $data['hotels'] = $this->Hotel_model->get_all_details($con);
           
            $this->load->view('elements/header', $data); 

            // $this->load->view('layout/navbar', $data);
            // $this->load->view('layout/sidebar', $data);
            $this->load->view('customer/home/navbar', $data); 
            $this->load->view('customer/home/index', $data); 
            
            
            $this->load->view('elements/footer'); 
                // exit();
         
          
         
           
          
        }


    }
 
    public function account(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->user->getRows($con); 
             
            // Pass the user data and load view 
            $this->load->view('elements/header', $data); 
            $this->load->view('users/account', $data); 
            $this->load->view('elements/footer'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    public function login(){ 
        
        
        $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('email'), 
                        'password' => md5($this->input->post('password')), 
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']);

                    $con = array( 
                        'id' => $this->session->userdata('userId') 
                    ); 
                   
        
                    // $data['user'] = $this->user->get_all("users");
                    
                    $user = $this->user->getRows($con);
                    $roleId = $user['role_id'];
                    if($roleId == '3'){
                        redirect('users/customer_home/'); 
                        
                    }
                   
                    // $data['role'] = $data['user']['role_id'];
                    // $role= $data['role'] ;
                    
                     
                    redirect('users/dashboard/'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
           
        // Load view 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/login', $data); 
        $this->load->view('elements/footer'); 
    } 
 
    public function registration(){ 
        
        $data = $userData = array(); 
        
                   
        // If registration request is submitted 
        if($this->input->post('signup')){ 
           
              
            $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
            
          
           if($this->input->post('user_type') == 'Seller'){
               $role = 2;
               $status = 0;
           }else{
               $role = 3;
               $status =1;
           }
           
            $userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), //strip_tags function tries to return a string with all NULL bytes,
                'last_name' => strip_tags($this->input->post('last_name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')), 
                'user_type' => $this->input->post('user_type'),
                'role_id' => $role,
                'status' => $status

            
            ); 
            if($status == '0'){

                
                if($this->form_validation->run() == true){ 
                    $insert = $this->user->insert($userData); 
                    if($insert){ 
                        $this->session->set_userdata('success_msg', '<p style="color:red;">!!!Your account is being reviewing.</p>
                                                                     <p style="color:red;"> Account approval mail will be sent to your email.</p>
                                                                     <p style="color:red;"> Please Stay tuned!!!                            </p>'); 
                        redirect('users/approve'); 
                    }else{ 
                        $data['error_msg'] = 'Some problems occured, please try again.'; 
                    } 
                }else{ 
                    $data['error_msg'] = 'Please fill all the mandatory fields.'; 
                } 
            }else{
                if($this->form_validation->run() == true){ 
                    $insert = $this->user->insert($userData); 
                    if($insert){ 
                        $this->session->set_userdata('success_msg', '<p >Your account registration has been successful. Please login to your account.<p>'); 
                        redirect('users/login'); 
                    }else{ 
                        $data['error_msg'] = 'Some problems occured, please try again.'; 
                    } 
                }else{ 
                    $data['error_msg'] = 'Please fill all the mandatory fields.'; 
                }

            }
           
          
 
            
          
        } 
         
        // Posted data 
        
        // Load view 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/registration', $data); 
        $this->load->view('elements/footer'); 
    } 
    public function approve(){
        $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/approve', $data); 
        $this->load->view('elements/footer'); 

    }
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('users/login/'); 
    } 
     
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 

    public function status(){
        
        $user_id = $this->input->post('userId'); 
        if($this->input->post('aId') == '0'){
            $id = $this->input->post('aId'); 
            $this->user->updateStatus($id,$user_id);
            return '1';
        }else{
            $id = $this->input->post('dId'); 
            $this->user->updateStatus($id,$user_id);
            return '0';
        }

           
       
       
    }
}