  <style>
    .navbar-white {
    background-color: #343a40;
    
}
.navbar-light .navbar-nav .nav-link {
    color: #d4dfea;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #f8f9fa;
}
.navactive{
  background:white;
  color:#343a40;
  border-radius: 5px;
}
  </style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
  
        
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="myInput" onkeyup="search()" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <!-- <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                </button> -->
              </div>
            </div>
          </form>
        </div>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
     
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item" style="margin-left: 10px; margin-top:-5px">
      <a href="#" class="nav-link"><?php echo $user['user_type']; ?></a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link ">Dashboard</a>
      </li>

      <!-- <li class="nav-item">
        
        
     
      </li> -->

      
    
      <li class="nav-item" style="margin-left: 10px; margin-top:-10px">
        <a class="nav-link" href="<?php echo base_url('users/logout'); ?>" role="button">
        <i class="fas fa-sign-out-alt fa-2x" style="height: 20px;" ></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>