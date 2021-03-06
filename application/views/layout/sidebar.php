  <style>
  

.nav-pills li{
  cursor: pointer;
}
:not(.layout-fixed) .main-sidebar {
    height: 100%;
    min-height: 100%;
    position: fixed;
    top: 0;
}


  </style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Hotel Management System</span>
    </a>

    <!-- Sidebar  for Super Admin-->

    
     
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('images/profile.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user['user_type']; ?></a>
        </div>
      </div>

    <?php if($role == '1'): ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebar-superadmin">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
      
          <li class="nav-item "  >
            <a  class="nav-link active" data-id="dashoard-overview">
            <i class="nav-icon fas fa-tachometer-alt"></i>             
            <p data-id="dashoard-overview">
            Dashboard Overview
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>

          <li class="nav-item "  >
            <a  class="nav-link" data-id="post-advertisement">
            <i class="fas fa-ad"></i>              
            <p data-id="post-advertisement">
                Post Advertisement
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>
          <li class="nav-item" >
            <a  class="nav-link">
            <i class="fas fa-info-circle"></i>         
            <p >
                 Hotel Details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a  class="nav-link" data-id="add-hotel-profile">
                <i class="fas fa-plus"></i>
                  <p data-id="add-hotel-profile">Add Hotel Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a  class="nav-link" data-id="view-all-hotels">
                <i class="fas fa-eye"></i> 
                  <p data-id="view-all-hotels">View All Hotels</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="view-membership">
            <i class="fas fa-eye"></i>             
             <p data-id="view-membership">
                View Membership
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="manage-hotels">
                     
            <i class="fas fa-hotel"></i>
                Manage Hotels
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="all-completed-bookings">
                      
            <i class="fas fa-book"></i>
               All Completed bookings
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          
        </ul>
      </nav>

      <?php elseif($role == '2'):?>
        <h1>Role 2</h1>
        <?php else:?>

          
          <nav class="mt-2" id="sidebar-superadmin">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
      
          <li class="nav-item "  >
            <a  class="nav-link active" data-id="dashoard-overview-user">
            <i class="nav-icon fas fa-tachometer-alt"></i>             
            <p data-id="dashoard-overview-user">
            Dashboard Overview
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>

         
          <li class="nav-item" >
            <a  class="nav-link" data-id="review-profile">
            <i class="fas fa-comments"></i>        
            <p  data-id="review-profile">
                 Review Profile
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>  
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="view-all-bookings">
            <i class="fas fa-eye"></i>             
             <p data-id="view-all-bookings">
                View All Bookings
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="hotels-notification">
                     
            <i class="fas fa-bell"></i>
            <p data-id="hotels-notification">
                 Hotels Notification
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="all-hotel-bookings">
                <p data-id="all-hotel-bookings">           
            <i class="fas fa-book"></i>
               All Hotel Bookings
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
          <?php endif; ?>
    </div>
  </aside>