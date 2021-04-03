<style>
  /* .navbar{
    background: #01afd1;
  }
  .navbar-nav li {
    color: white;
  } */
  .main-header-1 {
    border-bottom: 1px solid #dee2e6;
    z-index: 1034;
}
</style>
<nav class="navbar main-header-1 navbar-expand navbar-white navbar-light">

<!-- Left navbar links -->
<div class="navbar-nav" style=" height:50px">
    <!-- <img src="<?php echo base_url('images/fav.png'); ?>" alt=""> -->
    <div class="">
      <a href="<?php echo base_url('users/customer_home/') ?>" class="nav-link">
      <span  class="brand-text font-weight-dark" style="font-size: 20px; color:black">Hotel Management System</span>

      </a>
    </div>
  
            
          <ul class="navbar-nav" style="margin-top: 10px; padding-left:10px">
              <li class="nav-item">
                
                <div class="navbar-search-block">
                  <form class="form-inline">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
        </ul>
</div>
<!-- <ul class="navbar-nav" style="margin-left: 5px;">
 
 
  
</ul> -->

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Navbar Search -->
  <!-- <li class="nav-item" style="margin-left: 10px; margin-top:-5px">
  <a href="#" class="nav-link"><?php echo $user['user_type']; ?></a>
  </li> -->

  <li class="nav-item d-none d-sm-inline-block"  >
    <a href="<?php echo base_url('users/customer_home/') ?>" class="nav-link">Home</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="<?php echo base_url('users/dashboard/') ?>" class="nav-link">Dashboard</a>
  </li>

  

  <li class="nav-item" style="margin-left: 10px; margin-top:-10px">
    <a class="nav-link" href="<?php echo base_url('users/logout'); ?>" role="button">
    <i class="fas fa-sign-out-alt fa-2x" style="height: 20px;" ></i>
    </a>
  </li>
</ul>
</nav>