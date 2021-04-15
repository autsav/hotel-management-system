<style>
  .navbar-white {
    background-color: #343a40;
    
}
.navactive{
  background:white;
  color:#343a40;
  border-radius: 5px;

  
}
.navbar-light .navbar-nav .navdeactive {
    color: #f8f9fa;
}
.navdeactive:hover{
  width: 90%;
  border-radius: 5px;
color: black;
background-color: white;
}
.ml-auto li{
  padding-right: 2px;
}
.customerPoint{
  border-radius: 50px;
  background: #ffc107;
  
}
.main-header .navbar-nav .nav-item {
    padding-right: 10px;
    margin: 0;
}
     /* .navbar{
    background: #01afd1;
  } */
</style>
<nav class="navbar main-header navbar-expand navbar-white navbar-light">

<!-- Left navbar links -->
<!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
      
    </ul> -->


<ul class="navbar-nav">
<div class="navbar-search-block">
    <form class="form-inline">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
            <!-- <i class="fas fa-times"></i> -->
            </button>
        </div>
        </div>
    </form>
    </div>



</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
<!-- Navbar Search -->
<!-- <li class="nav-item" style="margin-left: 10px; margin-top:-5px">
<a href="#" class="nav-link"><?php echo $user['user_type']; ?></a>
</li> -->

<li class="nav-item"2>
  <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url('users/customer_home/') ?>" class="nav-link navdeactive">Home</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url('users/dashboard/') ?>" class="nav-link navactive" style=" ">Dashboard</a>
  </li>
 
    
   
</li>
<li class="nav-item d-none d-sm-inline-block"  >
    <a href="<?php echo base_url('users/customer_home/') ?>" class="nav-link customerPoint" ><span style=" color:black; font-weight: bold;">Loyalty Point : </span><span style="color:black;padding:6px ;border-radius:50px;background:white; font-weight: bold;"><?php print_r($get_loyalty)?></span> </a>
  </li>


<li class="nav-item" style="margin-left: 10px; margin-top:-10px">
    <a class="nav-link" href="<?php echo base_url('users/logout'); ?>" role="button">
    <i class="fas fa-sign-out-alt fa-2x" style="height: 20px; color:white;" ></i>
    </a>
</li>
</ul>
</nav>