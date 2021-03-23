
<style>
  .content{
    display: none;
  }
  .active{
    display: block;
  }



  </style>
  <!-- -------------------------------superuper admin ----------------------------------- -->
<div class="wrapper" style="position: relative;">

      <div class="content-wrapper dashboard active">
            <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
            </div>
          
        
          <section class="content active" id="Seller-Dashboard">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-6">            
                  <div class="small-box bg-info">
                    <div class="inner">              
                      <h3>13</h3>
                      <p>Profiles</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user"></i>
                    </div>            
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>27<sup style="font-size: 20px">%</sup></h3>
                      <p>Seller</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-users"></i>
                                  </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>2</h3>
                      <p>Notification</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bell"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>31</h3>

                      <p>Bookings</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bookmark"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
          
                <section class="col-lg-7 connectedSortable">
                </section>
              </div>
            </div>
          </section>

          <section class="content" id="add-new-hotel">
          <div class=" content-wrapper " id="add-hotel-category">
            
            <div class="col-md-9">
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Hotel Information Details</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                  
                    <form method="post" name="hotel-info-form" id="hotel-info-form" enctype="multipart/form-data">
                    <!-- <form method="post" id="upload_form"  enctype="multipart/form-data">   -->

                      <div class="card-body">
                        <div class="form-group">
                          <label for="hotel_name">Hotel Name</label>
                          <input type="text" class="form-control  form-control-border" id="hotel_name" name="hotel_name" placeholder="Enter Hotel Name">
                        </div>
                        <div class="form-group">
                          <label for="email_address">Email Address</label>
                          <input type="text" class="form-control  form-control-border" id="email_address" name="email_address" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                          <label for="hotel_address">Hotel Address</label>
                          <input type="text" class="form-control  form-control-border" id="hotel_address" name="hotel_address" placeholder="Enter Hotel Address">
                        </div>
                        <div class="form-group">
                              <label name="hotel_star">Hotel Star Rate</label>
                              <select id="hotel_star_rate" class="form-control">
                                <option > 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                              </select>
                            </div>

                        
                        <div class="form-group">
                          <label for="phone_number">Mobile Number</label>
                          <input type="tel" class="form-control  " id="phone_number" name="phone_number"   placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                          <label for="upload_image">Upload Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                            
                              <label class="form-label" for="customFile"></label>
                                <input type="file" class="form-control" name="upload_image" id="upload_image" value="" accept="image/*" />
                                <span id="uploaded_image"></span><span id="uploaded_image"></span>
                              </div>
                            <div class="input-group-append">
                          
                    
                            </div>
                            
                          </div>
                        </div>
                        <!-- <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                      </div>
                  

                      <div class="card-footer">
                        <button type="button" id="submit-hotel" class="btn btn-success">Save Details</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
          </section>

          <section class="content" id="hotel-category">

          <div class=" content-wrapper " id="add-hotel-category">

          

            <div class="col-md-9">
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Hotel Information Details</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="category-success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                  
                    <form method="post" name="hotel-info-form" id="hotel-info-form" enctype="multipart/form-data">

                      <div class="card-body">
                        <div class="form-group">
                          <label for="hotel_name">Hotel Category</label>
                          <input type="text" class="form-control  form-control-border" id="add-hotel_category" name="hotel_category" placeholder="Enter Hotel Category">
                        </div>
  
                      </div>
                  

                      <div class="card-footer">
                        <button type="button" id="submit-category" class="btn btn-success">Add Category</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
  
      </section>

      
      <section class="content" id="add-new-staff">
      <div class=" content-wrapper " id="add-hotel-category">
            
            <div class="col-md-9">
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Staff Information Details</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                  
                    <form method="post" name="hotel-info-form" id="hotel-info-form" enctype="multipart/form-data">
                    <!-- <form method="post" id="upload_form"  enctype="multipart/form-data">   -->

                      <div class="card-body">
                        <div class="form-group">
                          <label for="hotel_name">Staff Full Name</label>
                          <input type="text" class="form-control  form-control-border" id="staff_full_name" name="staff_full_name" placeholder="Enter Staff Name">
                        </div>
                        <div class="form-group">
                          <label for="hotel_address">Temporary Address</label>
                          <input type="text" class="form-control  form-control-border" id="temporary_address" name="temporary_address" placeholder="Enter Temporary Address">
                        </div>
                        <div class="form-group">
                          <label for="email_address">Email Address</label>
                          <input type="text" class="form-control  form-control-border" id="email_address" name="email_address" placeholder="Enter Email Address">
                        </div>
                        
                        <div class="form-group">
                          <label for="phone_number">Job Position</label>
                          <input type="tel" class="form-control  " id="job_position" name="job_position"   placeholder="Job Position">
                        </div>

                        
                        <div class="form-group">
                          <label for="phone_number">Mobile Number</label>
                          <input type="tel" class="form-control  " id="mobile_number" name="mobile_number"   placeholder="Enter Mobile Number">
                        </div>
                        <div class="form-group">
                              <label name="gender">Gender</label>
                              <select id="gender" class="form-control">
                                <option > Male</option>
                                <option> Female</option>
                             
                              </select>
                            </div>


                        <div class="form-group">
                          <label for="upload_staff_image">Upload Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                            
                              <label class="form-label" for="customFile"></label>
                                <input type="file" class="form-control" name="upload_staff_image" id="upload_staff_image" value="" accept="image/*" />
                                <span id="uploaded_image"></span><span id="uploaded_staff_image"></span>
                              </div>
                            <div class="input-group-append">
                          
                    
                            </div>
                            
                          </div>
                        </div>
                        <!-- <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                      </div>
                  

                      <div class="card-footer">
                        <button type="button" id="submit-hotel" class="btn btn-success">Save Details</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
      </section>

      <section class="content" id="view-all-staffs">

      <div class="container-fluid"  >
              <div class="row" style="padding:5px;">
                  <div class="row text-center text-lg-center">
                      <div class="col-lg-4 col-md-4 col-6" >
                      <div class="card" style="position: relative;" >
                        <div style="margin:20px">
                        <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="https://images.unsplash.com/photo-1605462863863-10d9e47e15ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                                <div class="card-text"><h5 class="card-text">Kushal Pradhan</h5></div>
                                <div class="card-text"><a href="">kushal@gmail.com</a></div>
                                <div class="card-text">Kathmandu</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Male</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Accountant</div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> 9841254154</div>    
                                </div>                 
                              </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6" >
                      <div class="card" style="position: relative;" >
                        <div style="margin:20px">
                        <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="https://images.unsplash.com/photo-1605462863863-10d9e47e15ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                                <div class="card-text"><h5 class="card-text">Kushal Pradhan</h5></div>
                                <div class="card-text"><a href="">kushal@gmail.com</a></div>
                                <div class="card-text">Kathmandu</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Male</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Accountant</div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> 9841254154</div>    
                                </div>                 
                              </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6" >
                      <div class="card" style="position: relative;" >
                        <div style="margin:20px">
                        <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="https://images.unsplash.com/photo-1605462863863-10d9e47e15ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                                <div class="card-text"><h5 class="card-text">Kushal Pradhan</h5></div>
                                <div class="card-text"><a href="">kushal@gmail.com</a></div>
                                <div class="card-text">Kathmandu</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Male</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Accountant</div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> 9841254154</div>    
                                </div>                 
                              </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6" >
                      <div class="card" style="position: relative;" >
                        <div style="margin:20px">
                        <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="https://images.unsplash.com/photo-1605462863863-10d9e47e15ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                                <div class="card-text"><h5 class="card-text">Kushal Pradhan</h5></div>
                                <div class="card-text"><a href="">kushal@gmail.com</a></div>
                                <div class="card-text">Kathmandu</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Male</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Accountant</div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> 9841254154</div>    
                                </div>                 
                              </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6" >
                      <div class="card" style="position: relative;" >
                        <div style="margin:20px">
                        <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="https://images.unsplash.com/photo-1605462863863-10d9e47e15ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                                <div class="card-text"><h5 class="card-text">Kushal Pradhan</h5></div>
                                <div class="card-text"><a href="">kushal@gmail.com</a></div>
                                <div class="card-text">Kathmandu</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Male</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Accountant</div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> 9841254154</div>    
                                </div>                 
                              </div>
                              </div>
                            </div>
                      </div>
                      
                    
                   
                     
                  </div>
              </div>

          </div>
  
      </section>

      <section class="content" id="view-review">
        <h1>View Review</h1>
      </section>

      <section class="content" id="hotels-notification">
      <div class="container-fluid" >
              <div class="row" style="padding:5px;">
                  <div class="row text-center text-lg-left">
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="https://images.unsplash.com/photo-1615775862217-70bc84f43b6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. 15000</div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> Rabin Pradhan</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 984154816548</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> New Road , Kathmandu</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 03-02-2020</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 2:00 PM</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Combo1</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Room 1 </div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Destination 1</div>    
                                </div> 
                                 <a href="#" class="btn btn-danger">Notification Pending</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="https://images.unsplash.com/photo-1615775862217-70bc84f43b6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. 15000</div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> Rabin Pradhan</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 984154816548</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> New Road , Kathmandu</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 03-02-2020</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 2:00 PM</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Combo1</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Room 1 </div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Destination 1</div>    
                                </div> 
                                 <a href="#" class="btn btn-danger">Notification Pending</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="https://images.unsplash.com/photo-1615775862217-70bc84f43b6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. 15000</div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> Rabin Pradhan</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 984154816548</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> New Road , Kathmandu</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 03-02-2020</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 2:00 PM</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Combo1</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Room 1 </div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Destination 1</div>    
                                </div> 
                                 <a href="#" class="btn btn-danger">Notification Pending</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="https://images.unsplash.com/photo-1615775862217-70bc84f43b6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. 15000</div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> Rabin Pradhan</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 984154816548</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> New Road , Kathmandu</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 03-02-2020</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> 2:00 PM</div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> Combo1</div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Room 1 </div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i> Destination 1</div>    
                                </div> 
                                 <a href="#" class="btn btn-danger">Notification Pending</a>
                              </div>
                            </div>
                      </div>
                    
                    
                     
                  </div>
              </div>

          </div>
      </section> 
      <section class="content" id="all-hotel-bookings"> 
      <div class="container-fluid" >
              <div class="row" style="padding:5px;">
                  <div class="row text-center text-lg-left" >
                  <?php foreach($bookings as $booking){ ?>
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $booking['image']; ?>"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. <?php echo $booking['total_amount']; ?></div>
                              </div>
                                   <input type="hidden" id="bookingID" name="bookingID" value="<?php echo $booking['booking_id']; ?>">

                                <div class="card-text"><i class="fas fa-hotel"></i><?php echo $booking['full_name']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i><?php echo $booking['hotel_id']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i><?php echo $booking['current_address']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['booking_date']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['time']; ?></div>
                                <div class="review-number">
                                  <div class="d-inline p-1  ">  <i class="fas fa-hotel"></i> <?php echo $booking['food_id']; ?></div>
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i>  <?php echo $booking['room_id']; ?> </div>  
                                  <div class="d-inline p-1  ">  <i class="fas fa-mobile"></i>  <?php echo $booking['destination_id']; ?></div>    
                                </div> 
                                <br>
                                <?php if($booking['status'] == '1'): ?>
                                    <div id="<?php echo $booking['booking_id']; ?>">
                                    <button onclick="status_completed($booking = <?php echo $booking['booking_id']; ?>)" name="cid" class="btn btn-success"  data-cid="1">Booking Completed</button>
                                    </div>
    
                                  <?php else:?>
                                    <div id="<?php echo $booking['booking_id']; ?>">                
                                    <button onclick="status_pending($booking_id = <?php echo $booking['booking_id']; ?>)" name="pid" class="btn btn-danger"  data-cid="0">Booking Pending</button>
                                    </div>
                                  
                                <?php endif; ?>
                              </tr>

                              </div>
                            </div>
                      </div>
                      <?php }?>

                  
                    
                   
                     
                  </div>
              </div>

          </div>
      </section>

  </div>


  </div>


  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 
        .</strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
 <script>
                   
                    </script>


<script type="text/javascript">

  function status_pending($booking_id){

    $(document).ready(function(){
                        

                        let bookingId = $booking_id;
                        let pidClicked = '1';   
                        $.ajax({
                            url: "<?php echo base_url(); ?>/booking/status",    
                            type: "POST",
                            data: {
                            pId:pidClicked,
                            bookId:bookingId,
                            },
                            cache: false,
                    success: function(result){
                      
                        const pendingStatusDiv = document.getElementById('hotel-bookings');
                        const pendingBtn = document.getElementById(bookingId);
                        // console.log(pendingStatusDiv);
                        // const pendingStatus = document.getElementById("pending-status-value").value;
                        // console.log(pendingStatus);
                        // pendingStatus = pendingStatus - true;

                        // pendingStatusDiv.innerHTML = `           
                        // <i class="fas fa-book"></i>
                        //   All Hotel Bookings   
                        //       <span class="right badge badge-danger">${pendingStatus}</span>`;

                        // console.log(pendingStatus);
                        
                        pendingBtn.innerHTML = `<button onclick="status_completed($booking = ${bookingId})"
                                                 name="cid" class="btn btn-success" id=" ${bookingId}" 
                                                 data-cid="1">Booking Completed</button>`;
                       
                       
                      
                                             },
                      


                  }); 
    });
}
    

function status_completed($booking_id){
    
    $(document).ready(function(){
                        let bookingId = $booking_id;
                        let cidClicked = '0';   
                      
                        $.ajax({
                            url: "<?php echo base_url(); ?>/booking/status",    
                            type: "POST",
                            data: {
                            cId:cidClicked,
                            bookId:bookingId,
                            },
                            cache: false,
                    success: function(result){
                        const pendingBtn = document.getElementById(bookingId);
                        pendingBtn.innerHTML = `<div id="${bookingId}">                
                                    <button onclick="status_pending($booking_id = ${bookingId})" name="pid" class="btn btn-danger"  data-cid="0">Booking Pending</button>
                                    </div>`;
                        
                        console.log(result);
                                             }
                  }); 
    });
}

    $(document).ready(function(){

          
       
                //     $("#bk-completed-clicker").click(function(e){
                //         let bookingId = $("#bookingID").val();
                //         let cidClicked = e.target.dataset.cid; 
                         
                //         cidClicked = 1 - cidClicked;
                       
                //         $.ajax({
                //             url: "<?php echo base_url(); ?>/booking/status",    
                //             type: "POST",
                //             data: {
                //             cId:cidClicked,
                //             bookId:bookingId,
                //             },
                //             cache: false,
                //     success: function(result){
                        
                //         console.log(result);
                //                              }
                //   });

                //     });



                //     $("#bk-pending-clicker").click(function(e){
                //         let bookingId = $("#bookingID").val();
                //         let pidClicked = e.target.dataset.pid; 
                          
                //         pidClicked = 1 - pidClicked;
                        
                //         $.ajax({
                //             url: "<?php echo base_url(); ?>/booking/status",    
                //             type: "POST",
                //             data: {
                //             pId:pidClicked,
                //             bookId:bookingId,
                //             },
                //             cache: false,
                //     success: function(result){
                        
                //         console.log(result);
                //                              }
                //   });

                //     });
        


      $(document).on('change', '#upload_image', function(){
            var name = document.getElementById("upload_image").files[0].name;
            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
            {
            alert("Invalid Image File");
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("upload_image").files[0]);
            var f = document.getElementById("upload_image").files[0];
            var fsize = f.size||f.fileSize;
            if(fsize > 2000000)
            {
            alert("Image File Size is very big");
            }
            else
            {
            form_data.append("file", document.getElementById('upload_image').files[0]);
            $.ajax({
              url:"<?php echo base_url(); ?>/hotel/image_upload",
              method:"POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend:function(){
              $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
              },   
              success:function(data)
              {
                $('#uploaded_image').html("<label class='text-success'>Image Uploaded</label>");

              // $('#uploaded_image').html(data);
              }
            });
            }
 });

         

            
      
        $('#submit-hotel').on('click', function(){
              let name = $('#hotel_name').val();
              let email = $('#email_address').val();
              let address = $('#hotel_address').val();
              let rate = $('#hotel_star_rate').val();
              let number = $('#phone_number').val();
            
              let image = $('#upload_image').val();
              image = image.substring(image.lastIndexOf("\\") + 1, image.length);
        
              let form = document.getElementsByName('hotel-info-form')[0];
              document.getElementById("hotel-info-form").reset();
              if(name!="" && email!="" && address!="" && rate!="" && number!="" && image!=""){
                $('#submit-hotel').attr("disabled", "disabled");
                $.ajax({
                  url:"<?php echo base_url('hotel/savedata'); ?>",
                  type:"POST",
                  data:{
                    type:1,
                    name:name,
                    email:email,
                    address:address,
                    rate:rate,
                    number:number,
                    image:image,

                  },
                  cache:false,
                  success: function(data){
                   
                    let dataResult = JSON.parse(data);
                    if(dataResult.statusCode==200){
                      $('#submit-hotel').removeAttr("disabled");
                      $('#fupForm').find('input:text').val('');
                      $("#success").show();
                      $('#success').html('Data added successfully !'); 
                      
                    }
                    else if(dataResult.statusCode==201){
					   alert("Error occured !");
					            }
                  }
                  
                });

              }
             
        });
 


        // Add Hotel Category
        $('#submit-category').on('click', function(){
              let addHotelCategory = $('#add-hotel_category').val();
          
             
              if(addHotelCategory !=""){
                $('#submit-category').attr("disabled", "disabled");
                $.ajax({
                  url:"<?php echo base_url('hotel/savecategory'); ?>",
                  type:"POST",
                  data:{
                    type:1,
                    categoryName:addHotelCategory,
                
                  },
                  cache:false,
                  success: function(data){
                   
                    let dataResult = JSON.parse(data);
                    if(dataResult.statusCode==200){
                      document.getElementById('add-hotel_category').value = '';
                      $( ".hello" ).remove();
                      $('#submit-category').removeAttr("disabled");
                      $('#fupForm').find('input:text').val('');
                      $("#category-success").show();
                      $('#category-success').html('Category added successfully !'); 
                      
                      hide_alert(id='#category-success');
                    }
                    else if(dataResult.statusCode==201){
					            alert("Error occured !");
					            }
                  }
                  
                });

              }
             
        });

    });

    function hide_alert(id){
      $(id).fadeTo(2000, 500).slideUp(500, function(){
    $(id).slideUp(500);
});
    }
//     function submitForm() {
  
//   let form = document.getElementsByName('hotel-info-form')[0];
//   form.submit(); // Submit the form
//   form.reset();  // Reset all form data
// return false; // Prevent page refresh
// }
</script>


<script type="text/javascript">
  const navItems = document.getElementById('sidebar-superadmin');
  const navs = document.getElementById('sidebar-superadmin').querySelectorAll(".nav-link");
  const body = document.querySelector(".body");
  const contents = document.querySelectorAll(".content");
  const contentHeader = document.querySelector(".content-header");

  


  
      navItems.addEventListener("click",(e)=>{
       const id = e.target.dataset.id;
       if(id){
        contentHeader.innerHTML = ` <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">${id}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
      </div>`;

       navs.forEach((nav)=>{
        //  console.log(nav);
         nav.classList.remove("active");
       });
        e.target.classList.add("active");
        

        // console.log(id);
        //removes the active div
        contents.forEach( (content)=>{
          content.classList.remove("active");
        });
        const element = document.getElementById(id);
        
      
        element.classList.add("active");

       }

      }); 
</script>
