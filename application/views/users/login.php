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


    </style>
  
	
    <!-- Login form -->
    <body>
    <div class="container" >
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 loginpanel" >
            <div class="login-panel panel panel-success">
            <div class="panel-heading">
                    <h4 class="panel-title">Please Login Or Register</h4>
                </div>
    <div class="regisFrm panel-body">
      <!-- Status message -->
      <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
        <form action="" method="post">
        <fieldset>
            <div class="form-group input-group">

            <!-- <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Enter Your Password">
                        <?php echo form_error('password','<p class="help-block">','</p>'); ?>

					</div> -->


            <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required="">
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group input-group">
             <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required="">
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="send-button">
                <input class="btn btn-lg   login_btn" type="submit" name="loginSubmit" value="LOGIN">
            </div>
            </fieldset>
        </form>
        <p>Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a></p>
    </div>
</div>
        
        </div></div></div>
    </body>