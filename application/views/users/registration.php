	
    <!-- Status message -->
  <style>
      html,body{
background-image: url('<?php echo base_url('images/hotel4.jpg')?>');

background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
/* .registerpanel{
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
} */
.registerpanel h3,p ,.registration_type ,.gender{
    
    color: white;
}
.panel-heading, p{
    margin-top:30px;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}
.registerType{
    color: white;
    background-color: #FFC312;
  height:30px;
  width:100px;
  border-radius: 5px;

  
}
.register_btn{
color: black;
background-color: #FFC312;
width: auto;
}

.register_btn:hover{
color: black;
background-color: white;
}

  </style>
	
    <!-- Registration form -->
    <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4 registerpanel"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="register-panel panel panel-success ">
                  <div class="panel-heading">
                      <h3 class="panel-title">Register As User</h3>
                  </div>
                            <div class="regisFrm panel-body">
                            <?php  
                                if(!empty($success_msg)){ 
                                    echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                                }elseif(!empty($error_msg)){ 
                                    echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                                } 
                            ?>
                               <form action="" method="post">

                                        <div class="form-group ">
                                            <label class="registration_type" for="registration_type">Registration types</label>
                                                <select class="registerType " name="user_type" id="registerType">
                                                    <option data-id="User" name="user_type" value="User">User</option>
                                                    <option data-id="Seller" name="user_type" value="Seller">Seller</option>
                                                
                                                </select>
                                            </div>

                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control" type="text" id="first_name" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                                                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                                            </div>
                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                                                <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
                                            </div>
                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                </div>
                                                <input class="form-control" type="email" name="email" id="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                                                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                                            </div>
                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input class="form-control" type="password" name="password" id="password" placeholder="PASSWORD" required>
                                                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                                            </div>
                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input class="form-control" type="password" name="conf_password" id="conf_password" placeholder="CONFIRM PASSWORD" required>
                                                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
                                            </div>

                                            
                                            <div class="form-group gender ">
                                                <label>Gender: </label>
                                                <?php 
                                                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                                                    $fcheck = 'checked="checked"'; 
                                                    $mcheck = ''; 
                                                }else{ 
                                                    $mcheck = 'checked="checked"'; 
                                                    $fcheck = ''; 
                                                } 
                                                ?>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" id="gender" value="Male" <?php echo $mcheck; ?>>
                                                        Male
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="gender" id="gender" value="Female" <?php echo $fcheck; ?>>
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                <input class="form-control" type="text" id="phone" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                                                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
                                            </div>
                                            <div class="send-button">
                                                <input class="form-control btn btn-lg register_btn" id="register_btn" type="submit" name="signup" value="CREATE ACCOUNT">

                                            </div>

                                        </form>
                                <p>Already have an account? <a style="color:#03c6e6;" href="<?php echo base_url('users/login'); ?>">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        <script type="text/javascript">
        const panelTitle = document.querySelector(".panel-title") ;
        const registerType = document.querySelector(".registerType") ;
        // const registerBtn = document.querySelector('.register_btn');
        
        // registerBtn.addEventListener('click',()=>{
        //     alert('registerd');
        // });        
        // $('#register_btn').on('click', function(){
        //     alert('hree');
        //       let registerType = $('#registerType').val();
        //       let firstName = $('#first_name').val();
        //       let lastName = $('#last_name').val();
        //       let email = $('#email').val();
        //       let password = $('#password').val();
        //       let confirmPassword = $('#conf_password').val();
        //       let gender = $('#gender').val();
        //       let phone = $('#phone').val();
        //     console.log(gender);
        //     console.log(registerType);

            
    
            //   document.getElementById("hotel-info-form").reset();
            //   if(name!="" && email!="" && address!="" && rate!="" && number!="" && image!=""){
            //     $('#submit-hotel').attr("disabled", "disabled");
            //     $.ajax({
            //       url:"<?php echo base_url('hotel/savedata'); ?>",
            //       type:"POST",
            //       data:{
            //         type:1,
            //         name:name,
            //         email:email,
            //         address:address,
            //         rate:rate,
            //         number:number,
            //         image:image,

            //       },
            //       cache:false,
            //       success: function(data){
                   
            //         let dataResult = JSON.parse(data);
            //         if(dataResult.statusCode==200){
            //           $('#submit-hotel').removeAttr("disabled");
            //           $('#fupForm').find('input:text').val('');
            //           $("#success").show();
            //           $('#success').html('Data added successfully !'); 
                      
            //         }
            //         else if(dataResult.statusCode==201){
			// 		   alert("Error occured !");
			// 		            }
            //       }
                  
            //     });

            //   }
             
        // });


        registerType.onchange = function(e){
            var selectedString = registerType.options[registerType.selectedIndex].value;
    
            panelTitle.innerHTML = `Register As ${selectedString}`;
                    };
         
</script>