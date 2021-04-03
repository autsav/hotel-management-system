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
          <a href="#" class="d-block"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></a>
        </div>
      </div>

    <?php if($role == '1'): ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebar-superadmin">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
      
          <li class="nav-item "  >
            <a  class="nav-link active" data-id="dashboard-overview">
            <i class="nav-icon fas fa-tachometer-alt"></i>             
            <p data-id="dashboard-overview">
             Dashboard Overview
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>

          <li class="nav-item "  >
            <a  class="nav-link" data-id="post-advertisement">
            <i class="fas fa-ad"></i>              
            <p data-id="post-advertisement">
            &nbsp; Post Advertisement
                <!-- <i class="right fas fa-angle-left"></i> --> 
              </p>
            </a>
         
          </li>
          <li class="nav-item" >
            <a  class="nav-link">
            <i class="fas fa-info-circle"></i>         
            <p >
            &nbsp;  Hotel Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a  class="nav-link" data-id="add-hotel-profile">
                <i class="fas fa-plus"></i>
                  <p data-id="add-hotel-profile"> &nbsp; Add Hotel Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a  class="nav-link" data-id="view-all-hotels">
                <i class="fas fa-eye"></i> 
                  <p data-id="view-all-hotels"> &nbsp; View All Hotels</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="hotel-permit">
            <i class="fas fa-eye"></i>             
             <p data-id="hotel-permit">
             &nbsp;  Hotel Permit  
                 <?php if($users_status > '0'): ?>
                  <span class="right badge badge-danger" value ="<?php echo $users_status; ?>" id="completed-booking-value"><?php echo $users_status; ?></span>        
              <?php endif; ?>
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a  class="nav-link" data-id="manage-hotels">
            <i class="fas fa-hotel"></i>
            &nbsp;   Manage Hotels
                <!-- <i class="right fas fa-angle-left"></i> -->
            </a>
          </li>


          <li class="nav-item" >
            <a  class="nav-link" data-id="all-hotel-bookings">
                 <p data-id="all-hotel-bookings" id="completed-bookings" value="">      
            <i class="fas fa-book"></i>
            &nbsp; All Hotel Bookings
               <?php if($pending_status > '0'): ?>
                  <span class="right badge badge-danger" value ="<?php echo $pending_status; ?>" id="completed-booking-value"><?php echo $pending_status; ?></span>        
              <?php endif; ?>
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          
        </ul>
      </nav>

      <?php elseif($role == '2'):?>
        <nav class="mt-2" id="sidebar-superadmin">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          
              <li class="nav-item "  >
                <a  class="nav-link active" data-id="Seller-Dashboard">
                <i class="nav-icon fas fa-tachometer-alt"></i>             
                <p data-id="Seller-Dashboard">
                Dashboard Overview
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>
            
              </li>
<!-- 
            
              <li class="nav-item" >
                <a  class="nav-link" data-id="add-new-hotel">
                <i class="fas fa-plus"></i>        
                <p  data-id="add-new-hotel">
                    Add New Hotel
                  </p>
                </a>  
              </li>
              <li class="nav-item" >
                <a  class="nav-link" data-id="hotel-category">
                <i class="fas fa-plus"></i>        
                <p  data-id="hotel-category">
                    Add Hotel Category
                  </p>
                </a>  
              </li> -->
              <li class="nav-item" >
                <a  class="nav-link">
                <i class="fas fa-info-circle"></i>         
                <p >
                &nbsp;  Manage Hotels
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" >
                    <a  class="nav-link" data-id="add-new-hotel">
                      <i class="fas fa-plus"></i>        
                        <p  data-id="add-new-hotel">
                        &nbsp;  Add New Hotel
                            <!-- <i class="right fas fa-angle-left"></i> -->
                          </p>
                    </a>  
                </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item" >
                    <a  class="nav-link" data-id="hotel-category">
                      <i class="fas fa-plus"></i>        
                        <p  data-id="hotel-category">
                        &nbsp;  Add Hotel Category
                            <!-- <i class="right fas fa-angle-left"></i> -->
                          </p>
                    </a>  
                </li>
                </ul>
              </li>
              

          
              <li class="nav-item" >
                <a  class="nav-link">
                <i class="fas fa-info-circle"></i>         
                <p >
                &nbsp;  Manage Staffs
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" >
                    <a  class="nav-link" data-id="add-new-staff">
                    <i class="fas fa-plus"></i>
                      <p data-id="add-new-staff"> &nbsp; Add New Staff</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item" >
                    <a  class="nav-link" data-id="view-all-staffs">
                    <i class="fas fa-eye"></i> 
                      <p data-id="view-all-staffs"> &nbsp; View All Staffs</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item" >
                <a  class="nav-link" data-id="view-review">
                <i class="fas fa-eye"></i>             
                <p data-id="view-review">
                &nbsp;  View Review
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item" >
                <a  class="nav-link" data-id="hotels-notification">
                        
                <i class="fas fa-bell"></i>
                <p data-id="hotels-notification">
                    Hotels Notification
                  </p>
                </a>
              </li> -->
              
              
              <li class="nav-item hotel-booking" >
                <a  class="nav-link" data-id="all-hotel-bookings">
                    <p data-id="all-hotel-bookings" id="hotel-bookings" value="">           
                        <i class="fas fa-book"></i>
                        &nbsp; All Hotel Bookings 
                          <?php if($pending_status > '0'): ?>
                              <span class="right badge badge-danger" value ="<?php echo $pending_status; ?>" id="pending-status-value"><?php echo $pending_status; ?></span>
                          
                            <?php endif; ?>
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>
              </li>
              
              
            </ul>
      </nav>
        <?php else:?>

          
      
          <?php endif; ?>
    </div>
  </aside>

