	
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
.input-group{
    margin-bottom: 30px;

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
    font-size: 16px;
color: #fff;
background-color: #FFC312;
width: auto;
height: auto;
}

.register_btn:hover{
color: black;
background-color: white;
}
.error{
    color: red;
}
.help-block{
    color: red;
}
label {
  /* margin-left: 20px; */
    /* width: 150px; */
    
}

  </style>
	
    <!-- Registration form -->
    <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-8 col-md-offset-8 registerpanel"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="register-panel panel panel-success " style="padding-left:50px; padding-right:50px;">
                  <div class="panel-heading">
                      <h3 class="panel-title">REGISTER AS USER</h3>
                  </div>
                  <br>
                            <div class="regisFrm panel-body">
                            <?php  
                                if(!empty($success_msg)){ 
                                    echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                                }elseif(!empty($error_msg)){ 
                                    echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                                } 
                            ?>
                            
                               <form action="" method="post" id="register-form">

                                        <div class="form-group ">
                                            <label class="registration_type" for="registration_type">Registration types</label>
                                                <select class="registerType " name="user_type" id="registerType">
                                                    <option data-id="User" name="user_type" value="User">User</option>
                                                    <option data-id="Seller" name="user_type" value="Seller">Seller</option>
                                                
                                                </select>
                                            </div>
                                            <br>

                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control" type="text" id="first_name" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required/>
                                            </div>
                                            <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>

                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required/>
                                            </div>
                                            <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>

                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                </div>
                                                <input class="form-control" type="email" name="email" id="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" >

                                            </div>
                                            <?php echo form_error('email','<p class="help-block">','</p>'); ?>

                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input class="form-control" type="password" name="password" id="password" placeholder="PASSWORD" required>
                                            </div>
                                            <?php echo form_error('password','<p class="help-block">','</p>'); ?>

                                            <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input class="form-control" type="password" name="conf_password" id="conf_password" placeholder="CONFIRM PASSWORD" required>
                                            </div>
                                            <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>


                                            
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
                                            </div>
                                            <?php echo form_error('phone','<p class="help-block">','</p>'); ?>

                                            <div class="send-button">
                                                <input class="form-control btn btn-lg register_btn" id="register_btn" type="submit" name="signup" value="CREATE ACCOUNT">

                                            </div>

                                        </form>
                                <p>Already have an account? <a style="color:#03c6e6;" href="<?php echo base_url('users/login'); ?>">Login here</a></p>
                                                <br>
                            </div>
                </div>
            </div>
        </div>
    </div>
       
<script type="text/javascript">
        const panelTitle = document.querySelector(".panel-title") ;
        const registerType = document.querySelector(".registerType") ;
   

        registerType.onchange = function(e){
            var selectedString = registerType.options[registerType.selectedIndex].value;
    
            panelTitle.innerHTML = `Register As ${selectedString}`;
                    };
         
</script>
<script>
                $(document).ready(function(){

                $("#register-form").validate({
                    rules:{
                        first_name:{
                            required:true,
                            minlength:3
                        },
                        last_name:{
                            required:true,
                            minlength:3
                        },
                        email:{
                            required:true,
                            email:true
                        },
                        password:{
                            required:true,
                            minlength:5
                        },
                        conf_password:{
                            required:true,
                            minlength:5
                        },
                        gender:{
                            required:true,
                        },
                        phone:{
                            required:true,
                            maxlength:10,
                            minlength:10
                        }
                    }, 
                    messages:{
                        first_name:{
                            required:"Please enter Your first name",
                            minlength:"Firstname need to be more that 3 letter",
                        },
                        last_name:{
                            required:"Please enter Your last name",
                            minlength:"Last name need to be more that 3 letter",
                        },
                        email:{
                            required:"Please enter your email address",
                            
                        },
                      
                        phone:{
                            required:"Please enter your phone number",
                            maxlength:"Your phone number should not exceed 10 digits",
                            minlength:"Your phone number should be of 10 digits",
                        }
                    }

                    
                
                
                });

            });
            


</script>