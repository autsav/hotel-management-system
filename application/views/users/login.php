<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('<?php echo base_url('images/hotel4.jpg')?>');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
/* .loginpanel{
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;

} */
.panel-heading{
    margin-top:30px;
    color: white;
}
.regisFrm{
    margin-top:30px;
}
.regisFrm p{
    color: white;
}
.regisFrm p{
    color: white;
}
.regisFrm a{
    color: #5FD4FF;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}
.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}
.login_btn:hover{
color: black;
background-color: white;
}
.error{
    color: red;
}
.help-block{
    color: red;
}


    </style>
  
	
    <!-- Login form -->
    <body>
    <div class="container" >
    <div class="row ">
        <div class="col-md-5 col-md-offset-5 loginpanel"  >
        <!-- <div class="panel-heading">
                    <span></span><h5 class="panel-title">HOTEL MANAGEMENT SYSTEM</h5>
                </div> -->
<!-- <div class="d-flex panel-heading">
                    <div class="p-2 font-weight-bold"></div>
                    <div class="ml-auto p-2 font-weight-bold"></div>
</div> -->
                    <div class="panel-heading ">
                                  <div class="d-inline p-1  "> <img src="<?php echo base_url('images/fav1.png'); ?>" alt="" style="height: 25px;width:25px"></div>
                                  <div class="d-inline "style="font-size:1.4rem">  HOTEL MANAGEMENT SYSTEM</div>  
                                </div> 
            <div class="login-panel panel panel-success" style="padding-left:50px; padding-right:50px;">
            
                
    <div class="regisFrm panel-body">
      <!-- Status message -->
      <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
    <br>
        <form action="" method="post" id="loginform"  >
        <fieldset>
                     <div class="form-group input-group">
                        <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required>
                     </div>
                        <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                    <br>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <input class="form-control" type="password" name="password" placeholder="Enter Your Password" >
                     </div>
                     <?php echo form_error('password','<p class="help-block">','</p>'); ?>

                     <br>

          
                
           
            <div class="send-button">
                <input class="btn btn-lg   login_btn" type="submit" name="loginSubmit" value="LOGIN">
            </div>
            </fieldset>
        </form>
        <br>
        <p>Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a></p>
        <br>
    </div>
</div>
        
        </div></div></div>
        <script>
                $(document).ready(function(){

                $("#loginform").validate({
                    rules:{
                        email:{
                            required:true,
                            email:true
                        },
                        password:{
                            required:true,
                            minlength:5
                        },
                    }, 
                    messages:{
                        password:{
                            required:"Please provide a valid password",
                        }
                    }

                    
                
                
                });

            });
            


        </script>
    </body>