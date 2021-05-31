
<style>
  .content{
    display: none;
  }
  .active{
    display: block;
  }
 .card-text .fas{
   color:#0ec7e4;
 }
 .d-flex .fas{
  color:#0ec7e4;

 }
 .d-inline .fas,.fa{
  color:#0ec7e4;

 }
 .error{
   color: red;
 }
 .rating{
   display: flex;
   margin: auto;
   left: 0;

   /* width: 640px;  */
    height: auto;
    margin: 0 auto;
    position: relative;
    margin-left:-63px;
    margin-top:-30px;

 }
 .rating li {
   list-style-type: none;
 }
 .rating-item{
   border:1px solid #ffff;
    /* cursor: pointer; */
    font-size: 2em;
    color: #ffc107;
 }
 .rating-item::before{
   content: "\2605";
 }
 .rating-item.active ~ .rating-item::before {
   content: "\2606";
 }


  </style>
  <!-- -------------------------------superuper admin ----------------------------------- --> 
<div class="wrapper" id="whole-div" style="position: relative;">

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
          
        
          <section class="content active" id="dashboard-overview">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-6">            
                  <div class="small-box bg-info">
                    <div class="inner">              
                      <h3><?php echo $no_profile; ?></h3>
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
                      <h3><?php echo $no_seller; ?></h3>
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
                    <?php if($pending_status > '0'): ?>
                       <h3><?php echo $pending_status; ?></h3>  
                       <?php else:?>     
                        <h3>0</h3>
                      <?php endif; ?>

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
                      <h3><?php echo $no_booking; ?></h3>

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

          <section class="content" id="post-advertisement">
                  <div class=" post-advertisement-modal " id="post-advertisement">
                
                <div class="container-fluid" >
              <div class="col-md-12" >    
                      <div class="card card-primary" >
                        <div class="card-header">
                          <h3 class="card-title">Post Advertisement</h3>
                        </div>        
                        <form method="post" name="post-ad-form" id="post-ad-form" enctype="multipart/form-data">
                          <div class="card-body">  
                          <div class="alert alert-success alert-dismissible" id="advertisement-success" style="display:none;">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    </div>             
                                    <div id="post-success"></div>  
                            <div class="form-group">
                                <label for="upload_advertisement_image">Upload Advertisement</label>
                                <div class="input-group">
                                <div class="custom-file">

                                <label class="form-label" for="customFile"></label>
                                <input type="file" class="form-control" name="upload_advertisement_image" id="upload_advertisement_image" value="" accept="image/*" required/>
                                <span id="upload_advertisement_image"></span>
                                </div>
                                

                                </div>
                                </div>
                          </div>
                         
                           
                          <div class="card-footer">
                            <button type="button" id="add-advertisement-post" class="btn btn-primary"> Post Advertisement</button>
                          </div>
                        </form>
                      </div>
                        </form>
                      </div>
                    </div>
                </div>
          </section>

          <section class="content" id="add-hotel-profile"> 

                  <div class="  " id="add-hotel-profile">
                
                    <div class="col-md-12">
                    <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Hotel Information Details</h3>
                            </div>
                            
                          
                            <form method="post" name="hotel-info-form" id="hotel-info-form" enctype="multipart/form-data">
                            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            </div>
                              <div class="card-body">

                              <div class="form-group" style="background-color: #f4f6f999;">
                          <div style="margin:10px;">
                          <label name="select_user"><h5><strong> Choose Hotel</strong> </h5></label>
                                <select id="select_user" class="form-control" required>
                                <?php foreach($all_sellers as $user){ ?>
                                <option value="<?php echo $user['id']?>" > <?php echo $user['first_name']?> <?php echo $user['last_name']?></option>
                                <?php }?>
                                </select>

                          </div>
                             
                              </div>

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
                                  <label for="hotel_description">Hotel Description</label>
                                  <input type="text" class="form-control  form-control-border"   id="hotel_description" name="hotel_description" placeholder="Enter Hotel Description">
                                </div>
                                <div class="form-group">
                                      <label name="hotel_star">Hotel Star Rate</label>
                                      <select id="hotel_star_rate" name="hotel_star_rate" class="form-control">
                                        <option > 1</option>
                                        <option> 2</option>
                                        <option> 3</option>
                                        <option> 4</option>
                                        <option> 5</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="transporation">Add Transporation</label><br>
                                      <label for="car">Car :</label><input type="number" class="form-control  " id="car_price" name="car"   placeholder="Add Car Fare Price ">
                                      <label for="bus">Bus :</label><input type="number" class="form-control  " id="bus_price" name="bus"   placeholder="Add Bus Fare Price ">

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
                              
                              </div>
                            
                          
                              <div class="card-footer">
                                <button type="button" id="submit-hotel" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                    </div>
                    </div>
            </section>

            <section class="content" id="view-all-hotels">
            <div class="modal fade  " id="modal-xl">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Hotel Info</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                     <div class="modal-body review-modal">
                      <div class=" text-left text-lg-left">
                          <div class="col-lg-12 col-md-12 col-12" id="">   
                              <div>
                              <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators"></ol>
                        <div class="carousel-inner"></div>
                        </div>

                              </div>                    
                              <div class="" id="">
                                  <div><h4>Hotel Name</h4></div>
                                  <div class="card-body">                            
                                            <div class="card-text center star-rating">
                                            <ul class="rating">
                                            <li class="rating-item" data-rate="1"></li>
                                            <li class="rating-item active" data-rate="2"></li>
                                            <li class="rating-item" data-rate="3"></li>
                                            <li class="rating-item" data-rate="4"></li>
                                            <li class="rating-item" data-rate="5"></li>
                                            </ul>                                 
                                            </div>
                                    
                                    
                                    
                                    </div>
                                <div class=" email"><?php echo $hotel['email']; ?></div>
                                <div class=" address"><?php echo $hotel['address']; ?></div>
                                <br>
                                
                                <div class="d-flex">
                                    
                                <div class=" p-2  text-black">  <i class="fas fa-hotel"></i> <?php echo $hotel['rate']; ?> Start Hotel</div>
                                    <div class="ml-auto p-2  text-black">  <i class="fas fa-mobile"></i> <?php echo $hotel['phone']; ?></div>    
                            
                                      
                                </div>
                                        <div class="">

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nesciunt quam 
                                        recusandae iure omnis tempora eos magni similique temporibus necessitatibus 
                                        laboriosam doloribus tenetur reiciendis ipsa, at perferendis ut blanditiis placeat?

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat adipisci, repellat 
                                        consectetur quasi ullam nam vel aliquam reprehenderit temporibus sit quo voluptatum,
                                        magni repudiandae veritatis eum fugiat praesentium illo. Expedita.

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nesciunt quam 
                                        recusandae iure omnis tempora eos magni similique temporibus necessitatibus 
                                        laboriosam doloribus tenetur reiciendis ipsa, at perferendis ut blanditiis placeat?

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat adipisci, repellat 
                                        consectetur quasi ullam nam vel aliquam reprehenderit temporibus sit quo voluptatum,
                                        magni repudiandae veritatis eum fugiat praesentium illo. Expedita.
                                        </p>
                                        </div>
                                </div>
                                
                        </div>
                        
                      
                      
                      
                        </div>     
                    </div>
                    
                  </div>
                </div>
           </div>
           
                <div class="container-fluid" >
                  <div class="" style="padding:5px;">
                      <div class="row text-center text-lg-left">
                        <?php foreach($hotels as $hotel){ ?>
                          <div class="col-lg-3 col-md-4 col-6 all-hotel">
                          <div class="card" >
                          <img class="card-img-top" style="height: 200px;"  alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"
                                  data-holder-rendered="true">
                                  <div class="card-body">
                                  <div class="card-title"><strong><?php echo $hotel['name']; ?></strong></div>
                                  <div class="card-text hotel-email"><?php echo $hotel['email']; ?></div>
                                  <div class="card-text hotel-address"><?php echo $hotel['address']; ?></div>
                                  <br>
                                  <div class="card-text" style=" "><?php echo $hotel['description']; ?></div>
                                  <br>
                                  <!-- <div class="review-number">
                                      <div class="d-inline p-3  ">  </div>
                                      <div class="d-inline p-3  ">  </div>  
                                    </div>  -->
                                    
                                    <div class="d-flex">
                                        <div class=" p-2  text-black"><i class="fas fa-hotel hotel-rate "></i> <?php echo $hotel['rate']; ?> Star Hotel</div>
                                        <div class="ml-auto p-2  text-black"> <i class="fas fa-phone hotel-mobile"></i>  <?php echo $hotel['phone']; ?></div>      
                                    </div>

                                    <!-- <h5 class="card-title"><?php echo $hotel['name']; ?></h5></br>
                                    <p class="card-text hotel-email"><?php echo $hotel['email']; ?></p>
                                    <p class="card-text hotel-address"><?php echo $hotel['address']; ?></p> -->
                                    <!-- <div class="review-number">
                                      <div class="d-inline p-1 hotel-rate ">  <i class="fas fa-hotel"></i> <?php echo $hotel['rate']; ?> Start Hotel</div>
                                      <div class="d-inline p-1 hotel-mobile ">  <i class="fas fa-mobile"></i> <?php echo $hotel['phone']; ?></div>    
                                    </div> -->
                                  <br>
                                  
                                  <!-- <div class="ml-auto p-2  text-black"> 
                                  <button class="btn btn-primary modal-btn book-now-btn" id="book-now-btn" data-bid="<?php echo $hotel['hotel_id']; ?>" data-toggle="modal" data-target="#modal-xl" >  
                                  View Profile
                                  </button></div>       -->

                                  </div>
                                </div>
                          </div>
                        <?php }            
                        ?>  
                      </div>
                  </div>
              </div> 

                
                             
      </section>

      <section class="content" id="hotel-permit">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Members</h3>

                <div class="card-tools">
                  <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap view-member-ship">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Created Date</th>
                      <th>Contact Number</th>
                      <th>Status</th>
                      <!-- <th>Address</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($users as $u){ ?>
                    <tr>
                      <td><?php echo $u['id']; ?></td>
                      <td><?php echo $u['first_name']; ?> <?php echo $u['last_name']; ?></td>
                      <td><?php echo $u['email']; ?></td>
                      <td><?php echo $u['created']; ?></td>
                      <td><?php echo $u['phone']; ?></td>

                      
                      <td>
                          <?php if($u['status'] == '1'): ?>
                          <div id="<?php echo $u['id']; ?>">
                          <button onclick="status_active($user_id = <?php echo $u['id']; ?>)" name="aid" class="btn btn-success"  data-cid="1">Active</button>
                          </div>
    
                          <?php else:?>
                            <div id="<?php echo $u['id']; ?>">                
                            <button onclick="status_deactive($user_id = <?php echo $u['id']; ?>)" name="did" class="btn btn-danger"  data-cid="0">De-Active</button>
                            </div>
                                  
                    <?php endif; ?>
                          
                          </td>
                          
                    </tr>
                    <?php } ?>
                        
                   


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>      
      
  
      </section>

      <section class="content" id="manage-hotels">
      
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Hotel Details</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header --> 
              <div id ="manage-hotel-content"  class="card-body table-responsive p-0" style="height: 300px;">
             
              <table class="table table-head-fixed text-nowrap manage-hotel-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Hotel Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="all-hotel-details-table">
                
                  </tbody>
                </table>
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --> 
          </div>
        </div>
        <div class="modal fade  " id="modal-xl-xl">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit hotels</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body edit-hotel-modal">
                       
                    <div class=" " id="edit-hotel-profile">
                              
                              <div class="col-md-12">
                              <div class="card card-primary">
                                      <div class="card-header">
                                        <h3 class="card-title">Hotel Information Details</h3>
                                      </div>
                                      
                                    
                                      <form method="post" name="edit_hotel-info-form" id="edit_hotel-info-form" enctype="multipart/form-data">

                                        <div class="card-body">
                                          <div class="form-group">
                                            <label for="edit_hotel_name">Hotel Name</label>
                                            <input type="text" class="form-control  form-control-border" value="Gokarne" id="edit_hotel_name" name="edit_hotel_name" placeholder="Enter Hotel Name">
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_email_address">Email Address</label>
                                            <input type="text" class="form-control  form-control-border" value="adladladl@gmail.com"  id="edit_email_address" name="edit_email_address" placeholder="Enter Email Address">
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_hotel_address">Hotel Address</label>
                                            <input type="text" class="form-control  form-control-border" value="HOtel HImalaya" id="edit_hotel_address" name="edit_hotel_address" placeholder="Enter Hotel Address">
                                          </div>
                                          <div class="form-group">
                                                <label name="edit_hotel_star_rate">Hotel Star Rate</label>
                                                <select id="edit_hotel_star_rate" class="form-control">
                                                  <option > 1</option>
                                                  <option> 2</option>
                                                  <option> 3</option>
                                                  <option> 4</option>
                                                  <option> 5</option>
                                                </select>
                                              </div>
                                        <div class="form-group">
                                              <label for="transporation">Add Transporation</label><br>
                                              <label for="car">Car :</label><input type="number" class="form-control  " value="100" id="edit_car_price" name="car"   placeholder="Add Car Fare Price ">
                                              <label for="bus">Bus :</label><input type="number" class="form-control  " value="200" id="edit_bus_price" name="bus"   placeholder="Add Bus Fare Price ">

                                          </div>

                                          
                                          <div class="form-group">
                                            <label for="edit_phone_number">Mobile Number</label>
                                            <input type="tel" class="form-control  " id="edit_phone_number" value="9841253625" name="edit_phone_number"   placeholder="Phone Number">
                                          </div>

                                          <div class="form-group">
                                            <label for="upload_image">Upload Image</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                              
                                                <label class="form-label" for="customFile"></label>
                                                  <input type="file" class="form-control" name="edit_upload_image" value="abc.jpg" id="edit_upload_image" value="" accept="image/*" />
                                                  <span id="edit_uploaded_image"></span><span id="uploaded_image"></span>
                                                </div>
                                              <div class="input-group-append">
                                            
                                      
                                              </div>
                                              
                                            </div>
                                          </div>
                                         
                                        </div>
                                        <div class="alert alert-success alert-dismissible" id="edit_success" style="display:none;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                      </div>
                                    
                                        <div class="card-footer">
                                          <button type="button" id="edit_submit-hotel" class="btn btn-primary">Submit</button>
                                        </div>
                                      </form>
                                    </div>
                              </div>
                              </div>    
                    </div>
                  
                  </div>
                </div>
           </div>
            </section>

            <section class="content" id="all-hotel-bookings"> 
      <?php if($bookings != '0'): ?>   
      <div class="container-fluid" >
              <div class="" style="padding:5px;">
                  <div class="row text-center text-lg-left" >
                  <?php foreach($bookings as $booking){ ?>
                      <div class="col-lg-3 col-md-3 col-6 completed-booking">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $booking['image']; ?>"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold booking-total">NRs. <?php echo $booking['total_amount']; ?></div>
                              </div>
                                
                                <div class="card-text booking-name"><i class="fas fa-user "></i>&nbsp;&nbsp;&nbsp; <?php echo $booking['full_name']; ?></div>
                                <!-- <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['hotel_id']; ?></div> -->
                                <div class="card-text booking-address"><i class="fas fa-address-card "></i>&nbsp;&nbsp; <?php echo $booking['current_address']; ?></div>
                                <div class="card-text booking-date"><i class="fas fa-calendar-alt "></i>&nbsp;&nbsp;&nbsp; <?php echo $booking['booking_date']; ?></div>
                                <div class="card-text booking-time"><i class="fas fa-clock"></i> &nbsp;&nbsp;<?php echo $booking['time']; ?></div>
                                <br>
                                <div class="review-number">
                                  <div class="d-inline p-3 booking-food "><i class="fas fa-apple-alt"></i> <?php echo $booking['food_id']; ?></div>
                                  <div class="d-inline p-3  booking-room "><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $booking['room_id']; ?> </div>  
                                  <div class="d-inline p-3  booking-destination"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $booking['destination_id']; ?></div>    
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
          <?php else :?>
                <div class="container-fluid" >
              <div class="" style="padding:5px;">
                  <div class="row text-center text-lg-center">
                    
                  </div>
              </div>
            </div>

              <?php endif; ?>
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
 


       



      

          ///////////////////////End of  //Manage hotel Edit///////////////////////

    const search = () =>{
        let filter = document.getElementById('myInput').value.toUpperCase();
        console.log(filter);
        ///////////////////////view-all-hotels search///////////////////////
        let viewAllHotel = document.getElementById('view-all-hotels');
        
        let hotelCard = document.querySelectorAll('.all-hotel');
        let cardTitle = viewAllHotel.querySelectorAll('.card-title');
        let lenghtOfArray = cardTitle.length;
        let cardHotelEmail = viewAllHotel.querySelectorAll('.hotel-email');
        let cardHotelAddress = viewAllHotel.querySelectorAll('.hotel-address');
        let cardHotelRate = viewAllHotel.querySelectorAll('.hotel-rate');
        let cardHotelMobile = viewAllHotel.querySelectorAll('.hotel-mobile');

        
      
       
        console.log(lenghtOfArray);
        for(let i=0; i<lenghtOfArray; i++){
          cardHotelEmailText =  (cardHotelEmail[i]); 
          cardHotelAddressText =  (cardHotelAddress[i]);  
          cardHotelRateText =  (cardHotelRate[i]);  
          cardHotelMobileText =  (cardHotelMobile[i]);  
 
          hotelCardName = hotelCard[i];
          hotelName = cardTitle[i];
          if(hotelName){
           let  textValue = cardHotelMobileText.textContent|| cardHotelRateText.textContent|| hotelName.textContent || hotelName.innerHTML || cardHotelEmailText.textContent || cardHotelAddressText.textContent || cardHotelAddressText.textContent;
          
            if(textValue.toUpperCase().indexOf(filter) > -1){
              hotelCard[i].style.display = "";
            }else{
              hotelCard[i].style.display = "none";
            }

          }
          
        }

        /////////////////////End of view-all-hotels///////////////////////
        /////////////////////////view-membership Search/////////////////////////////////////////
        let membershipTable = document.querySelector('.view-member-ship');
        let membershipTr = membershipTable.getElementsByTagName('tr')

        for(let i=0 ; i<membershipTr.length; i++ ){
          let tableDataId = membershipTr[i].getElementsByTagName('td')[0];
            let tableDataName = membershipTr[i].getElementsByTagName('td')[1];
              let tableDataEmail = membershipTr[i].getElementsByTagName('td')[2];
                let tableDataDate = membershipTr[i].getElementsByTagName('td')[3];
                 let tableDataMobile = membershipTr[i].getElementsByTagName('td')[4];
      

              if( tableDataEmail || tableDataName || tableDataId || tableDataDate || tableDataMobile){
               

                let nameValue = tableDataName.textContent || tableDataName.innerHTML;
                let emailValue =  tableDataEmail.textContent || tableDataEmail.innerHTML;
                let dateValue =  tableDataDate.textContent || tableDataDate.innerHTML ;
                let idValue = tableDataId.textContent || tableDataId.innerHTML ;
                let mobileValue =  tableDataMobile.textContent || tableDataMobile.innerHTML
                if(mobileValue.toUpperCase().indexOf(filter) > -1 || nameValue.toUpperCase().indexOf(filter) > -1 || emailValue.toUpperCase().indexOf(filter) > -1 || idValue.toUpperCase().indexOf(filter) > -1 || dateValue.toUpperCase().indexOf(filter) > -1){
                  membershipTr[i].style.display = "";
                }else{
                  membershipTr[i].style.display = "none";
                }
              }
          }
        
        ////////////////////////////End of view-membership///////////////////////////////////////
         /////////////////////////Search manage-hotels /////////////////////////////////////////
               let manageTable = document.querySelector('.manage-hotel-table');
                 let manageTr = manageTable.getElementsByTagName('tr')
                
                 for(let i=0 ; i<manageTr.length; i++ ){
                  let manageDataId = manageTr[i].getElementsByTagName('td')[0];
                  let manageDataName = manageTr[i].getElementsByTagName('td')[1];
                  let manageDataEmail = manageTr[i].getElementsByTagName('td')[2];
                  let manageDataAddress = manageTr[i].getElementsByTagName('td')[3];

                  

                  if(manageDataId || manageDataEmail || manageDataName || manageDataAddress){
                    let manageIdValue = manageDataId.textContent || manageDataId.innerHTML;
                      let manageNameValue = manageDataName.textContent || manageDataName.innerHTML;
                        let manageEmailValue = manageDataEmail.textContent || manageDataEmail.innerHTML;
                          let manageAddressValue = manageDataAddress.textContent || manageDataAddress.innerHTML;

                     
                                    if(manageAddressValue.toUpperCase().indexOf(filter) > -1 || manageIdValue.toUpperCase().indexOf(filter) > -1 || manageNameValue.toUpperCase().indexOf(filter) > -1 || manageEmailValue.toUpperCase().indexOf(filter) > -1){
                                      manageTr[i].style.display = "";
                                    }else{
                                      manageTr[i].style.display = "none";
                                    }

                      }

                 }

        ///////////////////////////End of manage-hotels ////////////////////////////////////////
         ////////////////////////////Search all-hotel-bookings //////////////////////////////////////
         let viewAllCompletedBooking = document.getElementById('all-hotel-bookings');
           let completedBookingCard = document.querySelectorAll('.completed-booking');

           let completedcardTotal = viewAllCompletedBooking.querySelectorAll('.booking-total');
           let completedcardName = viewAllCompletedBooking.querySelectorAll('.booking-name');
           let completedcardAddress = viewAllCompletedBooking.querySelectorAll('.booking-address');
           let completedcardDate = viewAllCompletedBooking.querySelectorAll('.booking-date');
           let completedcardTime = viewAllCompletedBooking.querySelectorAll('.booking-time');
           console.log(completedcardDate);
           let completedcardFood = viewAllCompletedBooking.querySelectorAll('.booking-food');
           let completedcardRoom = viewAllCompletedBooking.querySelectorAll('.booking-room');
           let completedcardDestination = viewAllCompletedBooking.querySelectorAll('.booking-destination');

            for(let i=0; i<completedBookingCard.length; i++){
                  completedBookingCardName = completedBookingCard[i];

                  completedBookingTotal = completedcardTotal[i];
                  completedBookingName = completedcardName[i];
                  completedBookingAddress = completedcardAddress[i];
                  completedBookingDate = completedcardDate[i];
                  completedBookingTime = completedcardTime[i];
                  
                  completedBookingFood = completedcardFood[i];
                  completedBookingRoom = completedcardRoom[i];
                  completedBookingDestination = completedcardDestination[i];
                  
                    if(completedBookingName){

                      let totalText = completedBookingTotal.textContent || completedBookingTotal.innerHTML;
                      let nameText = completedBookingName.textContent || completedBookingName.innerHTML;
                      let addressText = completedBookingAddress.textContent || completedBookingAddress.innerHTML;
                      let dateText = completedBookingDate.textContent || completedBookingDate.innerHTML;
                      let timeText = completedBookingTime.textContent || completedBookingTime.innerHTML;
                      let foodText = completedBookingFood.textContent || completedBookingFood.innerHTML;
                      let roomText = completedBookingRoom.textContent || completedBookingRoom.innerHTML;
                      let destinationText = completedBookingDestination.textContent || completedBookingDestination.innerHTML;


                      if(totalText.toUpperCase().indexOf(filter) > -1 || nameText.toUpperCase().indexOf(filter) > -1 || addressText.toUpperCase().indexOf(filter) > -1 ||
                      dateText.toUpperCase().indexOf(filter) > -1|| timeText.toUpperCase().indexOf(filter) > -1 || foodText.toUpperCase().indexOf(filter) > -1 ||
                      roomText.toUpperCase().indexOf(filter) > -1|| destinationText.toUpperCase().indexOf(filter) > -1){

                        completedBookingCard[i].style.display = "";
                      }else{
                        completedBookingCard[i].style.display = "none";

                      }
                    }
                 }


                 



          //  let viewAllCompletedBooking = document.getElementById('all-hotel-bookings');
          //  let completedBookingCard = document.querySelectorAll('.completed-booking');
          //  let completedcardTitle = viewAllCompletedBooking.querySelectorAll('.card-text');
          //   for(let i=0; i<completedBookingCard.length; i++){
          //         completedBookingCardName = completedBookingCard[i];
          //         completedBookingName = completedcardTitle[i];
          //           if(completedBookingName){
          //             let completedText = completedBookingName.textContent || completedBookingName.innerHTML;

          //             if(completedText.toUpperCase().indexOf(filter) > -1){
          //               completedBookingCard[i].style.display = "";
          //             }else{
          //               completedBookingCard[i].style.display = "none";

          //             }
          //           }
          //        }
        // let viewAllHotel = document.getElementById('view-all-hotels');
        // let hotelCard = document.querySelectorAll('.all-hotel');
        // let cardTitle = viewAllHotel.querySelectorAll('.card-title');        
        // let lenghtOfArray = cardTitle.length;

        // for(let i=0; i<lenghtOfArray; i++){
        //   hotelCardName = hotelCard[i];
        //   hotelName = cardTitle[i];
        //   if(hotelName){
        //    let  textValue = hotelName.textContent || hotelName.innerHTML;
          
        //     if(textValue.toUpperCase().indexOf(filter) > -1){
        //       hotelCard[i].style.display = "";
        //     }else{
        //       hotelCard[i].style.display = "none";
        //     }

        //   }
          
        // }



        ////////////////////////////End of all-hotel-bookings ///////////////////////////////////////
      

    }

</script>

<script type="text/javascript">
        function delete_hotel($hotel_id){
          $(document).ready(function(){
                                let hotelId = $hotel_id;
                                $.ajax({
                                    url: "<?php echo base_url(); ?>hotel/delete_hotel",    
                                    type: "POST",
                                    data: {
                                      hotelId:hotelId,
                                    },
                                    cache: false,
                            success: function(result){
                              
                          let targetRow = document.getElementById("all-hotel-details-table").rows.namedItem(hotelId);
                              targetRow.remove();
                              alert( "Hotel Deleted Successfully !");

                              
                              
                              }
                          }); 
                          });
          
        }

              function status_active($user_id){
                $(document).ready(function(){
                                              let userId = $user_id;
                                              let aidClicked = '0';   
                                            
                                              $.ajax({
                                                  url: "<?php echo base_url(); ?>users/status",    
                                                  type: "POST",
                                                  data: {
                                                  aId:aidClicked,
                                                  userId:userId,
                                                  },
                                                  cache: false,
                                          success: function(result){
                                              const pendingBtn = document.getElementById(userId);
                                              pendingBtn.innerHTML = `<div id="${userId}">                
                                                          <button onclick="status_deactive($user_id = ${userId})" name="did" class="btn btn-danger"  data-cid="0">De-Active</button>
                                                          </div>`;
                                              
                                              
                                                                  }
                                        }); 
                          });

                

              }
              function status_deactive($user_id){

                $(document).ready(function(){
                                              let userId = $user_id;
                                              let didClicked = '1';   
                                            
                                              $.ajax({
                                                  url: "<?php echo base_url(); ?>users/status",    
                                                  type: "POST",
                                                  data: {
                                                  dId:didClicked,
                                                  userId:userId,
                                                  },
                                                  cache: false,
                                          success: function(result){
                                              const pendingBtn = document.getElementById(userId);
                                              pendingBtn.innerHTML = `<div id="${userId}">                
                                                          <button onclick="status_active($user_id = ${userId} )" name="aid" class="btn btn-success"  data-cid="0">Active</button>
                                                          </div>`;
                                              
                                              
                                                                  }
                                        }); 
                          });

              }

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
                                              
                                              
                                                                  }
                                        }); 
                          });
          }



// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $(document).ready(function(){

      
      $(document).on('change', '#upload_image', function(){
            let name = document.getElementById("upload_image").files[0].name;
            let form_data = new FormData();
            let ext = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
            {
            alert("Invalid Image File");
            }
            let oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("upload_image").files[0]);
            let f = document.getElementById("upload_image").files[0];
            let fsize = f.size||f.fileSize;
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
                setTimeout( "$('#uploaded_image').hide();", 2000);


              // $('#uploaded_image').html(data);
              }
            });
            }
 });  
 //Post Advertisement

        $("#post-ad-form").validate({
                            rules:{
                              upload_advertisement_image:{
                                    required:true,
                                    
                                },
                            
                            }, 
                            messages:{
                              upload_advertisement_image:{
                                    required:"Please select an image",
                                },
                            },

                            
                        
                        
                        });
         

        $(document).on('click', '#add-advertisement-post', function(){
         

                if($("#post-ad-form").valid()){
                        let adImage = $('#upload_advertisement_image').val();
                    adImage = adImage.substring(adImage.lastIndexOf("\\") + 1, adImage.length);

                $.ajax({
                        url:"<?php echo base_url('hotel/post_advertisement'); ?>",
                        type:"POST",
                        data:{
                          type:1,
                          adImage:adImage
                        },
                        cache:false,
                        success: function(data){
                        
                          let dataResult = JSON.parse(data);
                          if(dataResult.statusCode==200){
                            $('#submit-staff').removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#post-success").show();
                            $('#post-success').html("<label class='text-success'style='margin-left:10px;' > Advertisement added successfully !</label>"); 
                            setTimeout( "$('#post-success').hide();", 2000);

                            
                          }
                          else if(dataResult.statusCode==201){
                  alert("Error occured !");
                            }
                        }
                        
                      });
               
                }

                
       


        });

 $(document).on('change', '#upload_advertisement_image', function(){
            let name = document.getElementById("upload_advertisement_image").files[0].name;
            let form_data = new FormData();
            let ext = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
            {
            alert("Invalid Image File");
            }
            let oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("upload_advertisement_image").files[0]);
            let f = document.getElementById("upload_advertisement_image").files[0];
            let fsize = f.size||f.fileSize;
            if(fsize > 2000000)
            {
            alert("Image File Size is very big");
            }
            else
            {
            form_data.append("file", document.getElementById('upload_advertisement_image').files[0]);
            $.ajax({
              url:"<?php echo base_url(); ?>/hotel/image_upload",
              method:"POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend:function(){
              $('#advertisement-success').html("<label class='text-success'>Image Uploading...</label>");
              },   
              success:function(data)
              {
                $('#advertisement-success').html("<label class='text-success'>Image Uploaded</label>");
                setTimeout( "$('#advertisement-success').hide();", 2000);


              // $('#uploaded_image').html(data);
              }
            });
            }
 });


       
          
         
  

 $("#hotel-info-form").validate({
                    rules:{
                      hotel_name:{
                            required:true,
                            minlength:3,
                            
                        },
                        email_address:{
                            required:true,
                            email:true,
                            
                        },
                        hotel_address:{
                            required:true,
                            
                        },
                        hotel_description:{
                            required:true,
                            minlength:20,
                            maxlength:300,
                            
                        },
                        hotel_star_rate:{
                            required:true,
                            
                        },
                        phone_number:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            number:true,
                            
                        },
                        upload_image:{
                            required:true,
                            
                        },
                     
                    }, 
                    messages:{
                      hotel_name:{
                            required:"Please Enter the hotel Name",
                            minlength:"Hotel name should me more than 3 digits"
                            
                        },
                        email_address:{
                            required:"Please Enter your Email address",
                            email:"Please Enter your valid email"
                            
                        },
                        hotel_address:{
                            required:"Please Enter your hotel address",
                            
                            
                        },
                        hotel_description:{
                            required:"Please describe something about your hotel",
                            minlength:"Text must be more than 20 charecter",
                            maxlength:"Text must not  be more than 300 charecter",
                            
                        },
                        hotel_star_rate:{
                            required:"Please select one",
                            
                        },
                        phone_number:{
                            required:"Please enter valid number",
                            minlength:"Number must not be less than 10",
                            maxlength:"Number must not be more than 10",
                            
                            
                        },
                        upload_image:{
                            required:"Please select an image",
                        },
                    },
                   
                    
                
                
                });
      
        $('#submit-hotel').on('click', function(){
        

                if($("#hotel-info-form").valid()){
                  let targetAllHotelRows = document.getElementById("all-hotel-details-table").rows;
              let user_id = $('#select_user').val();
              let name = $('#hotel_name').val();
              let email = $('#email_address').val();
              let address = $('#hotel_address').val();
              let rate = $('#hotel_star_rate').val();
              let carPrice = $('#car_price').val();
              let busPrice = $('#bus_price').val();
              let number = $('#phone_number').val();
              let description = $('#hotel_description').val();

            
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
                    userId:user_id,
                    name:name,
                    email:email,
                    address:address,
                    rate:rate,
                    car:carPrice,
                    bus:busPrice,
                    number:number,
                    image:image,
                    description:description,

                  },
                  cache:false,
                  success: function(data){
                   
                    let dataResult = JSON.parse(data);
                    if(dataResult.statusCode==200){
                      view_all_hotel_div();
                      $('#submit-hotel').removeAttr("disabled");
                      $('#fupForm').find('input:text').val('');
                      $("#success").show();
                      $('#success').html(' Your Hotel Profile has been created !'); 
                      setTimeout( "$('#success').hide();", 2000);

                      // console.log(targetAllHotelRows);
                      targetAllHotelRows.forEach((hotelRow) =>{
                        hotelRow.style.display = "none";
                      });

                      // targetAllHotelRow.remove();
                              // targetRow.remove();
                      
                    }
                    else if(dataResult.statusCode==201){
					   alert("Error occured !");
					            }
                  }
                  
                });

              }
                }

         
              
        });
    });
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
         
        headerText = id.split('-').join(' ')
       if(headerText == 'HOTEL PERMIT'){
        headerText = 'VIEW HOTEL PERMISSION'
       }
       capital = capitalizeTheFirstLetterOfEachWord(headerText)
        contentHeader.innerHTML = ` <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">${capital}</h1>
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
         nav.classList.remove("active");
       });
        e.target.classList.add("active");
        

        //removes the active div
        contents.forEach( (content)=>{
          content.classList.remove("active");
        });
        const element = document.getElementById(id);
        
      
        element.classList.add("active");

       }

      }); 
      function capitalizeTheFirstLetterOfEachWord(words) {
   var separateWord = words.toLowerCase().split(' ');
   for (var i = 0; i < separateWord.length; i++) {
      separateWord[i] = separateWord[i].charAt(0).toUpperCase() +
      separateWord[i].substring(1);
   }
   return separateWord.join(' ');
}
</script>




<script>
  //////////////////////////////////////Manage Hotel-rows///////////////////////////////////
document.getElementById("whole-div").onload =  view_all_hotel_div(); 


function view_all_hotel_div(){
  $(document).ready(function(){
    const targetAllHotelRows = document.getElementById("all-hotel-details-table");
    // console.log(targetAllHotelRows);
        $.ajax({
          url: "<?php echo base_url(); ?>/hotel/get_all_hotel",    
                      type: "POST",
                      data: {
                      type:1
                      },
                      cache: false,
                      success: function(result){
                        
                      

                        let dataResult = JSON.parse(result);
                        hotels = dataResult.data;
                     
                        // noOfStaff.innerHTML = `
                        // <h3>${staffs.length}</h3>
                        //   <p>Staffs</p> `;


                        hotels.forEach((hotel)=>{
                          // console.log(hotel);
                          //   console.log(hotel['hotel_id']);
                            targetAllHotelRows.innerHTML += ` 
                    <tr id="${hotel['hotel_id']}">
                      <td>${hotel['hotel_id']}</td>
                      <td>${hotel['name']}</td>
                      <td>${hotel['email']}</td>
                      <td><span class="tag tag-success">${hotel['address']}</span></td>
                      <td><button type="button"  class="btn btn-primary edit-manage-hotel " onclick=get_hotel(${hotel['hotel_id']}); data-id =${hotel['hotel_id']} data-toggle="modal" data-target="#modal-xl-xl" >Edit</button>
                      <button type="button" onclick="confirm_delete(${hotel['hotel_id']})"  class="btn btn-danger delete-manage-hotel">Delete</button></td>
                    </tr>


                        
                  
                        
                    `;
                        });
                       }

        });
        const editHotelBtns = document.querySelectorAll('.edit-manage-hotel');
          console.log(editHotelBtns);
    });
}


                                    

////////////////////////////////////End of Manage Hotel-rows///////////////////////////////
          ///////////////////////  //Manage hotel Edit///////////////////////
          // edit_hotel_modal(${hotel['hotel_id']}){

          // }
 const editHotelBtns = document.querySelectorAll('.edit-manage-hotel');
          console.log(editHotelBtns);
             editHotelBtns.forEach((btn)=>{
              btn.onclick = e =>{
                const id = e.target.dataset.id;
                // console.log(id);      
                
                get_hotel(id);
            
              }
          }); 
        
          function confirm_delete(hotelId) {
              
                let r = confirm("Are you sure you want to delete the hotel? ");
                if (r == true) {
                  delete_hotel($hotel_id = hotelId);
                } else {
                  
                }
          
              }
           
          function get_hotel(id)
          { 
           
          let hotelId = id;
        
            // alert(hotelId);
            $.ajax({
                  url: "<?php echo base_url(); ?>/hotel/get_hotel",    
                  type: "POST",
                  data: {
                  hotelId:hotelId
                  },
                  cache: false,
                  success: function(result){
                    let dataResult = JSON.parse(result);
                    hotel = ((dataResult.data)[0]);
                    console.log(hotel['car']);
                    // console.log(hotelId);
                    // console.log(hotel['image']);

                    if(hotel['rate'] =='1'){
                       var rate = ` <select id="edit_hotel_star_rate" class="form-control">
                                                  <option value='1' selected="selected" > 1</option>
                                                  <option value='2' > 2</option>
                                                  <option value='3'  > 3</option>
                                                  <option value='4' > 4</option>
                                                  <option value='5' > 5</option>
                                                </select> `; 
                       
                      }else if (hotel['rate'] =='2'){
                        var rate = ` <select id="edit_hotel_star_rate" class="form-control">
                                                  <option value='1' > 1</option>
                                                  <option value='2'selected="selected" > 2</option>
                                                  <option value='3'  > 3</option>
                                                  <option value='4' > 4</option>
                                                  <option value='5' > 5</option>
                                                </select>`; 
                      }
                      else if (hotel['rate'] =='3'){
                        var rate = `  <select id="edit_hotel_star_rate" class="form-control">
                                                  <option value='1' > 1</option>
                                                  <option value='2' > 2</option>
                                                  <option value='3' selected="selected" > 3</option>
                                                  <option value='4' > 4</option>
                                                  <option value='5' > 5</option>
                                                </select>`; 
                      }
                      else if (hotel['rate'] =='4'){
                        var rate = `  <select id="edit_hotel_star_rate" class="form-control">
                                                  <option value='1' > 1</option>
                                                  <option value='2' > 2</option>
                                                  <option value='3'  > 3</option>
                                                  <option value='4'selected="selected" > 4</option>
                                                  <option value='5' > 5</option>
                                                </select>`; 
                      }
                      else if (hotel['rate'] =='5'){
                        var rate = `  <select id="edit_hotel_star_rate" class="form-control">
                                                  <option value='1' > 1</option>
                                                  <option value='2' > 2</option>
                                                  <option value='3'  > 3</option>
                                                  <option value='4' > 4</option>
                                                  <option value='5' selected="selected"> 5</option>
                                                </select>`; 
                      }
                      
                    editHotelModal  = document.querySelector('.edit-hotel-modal');
                    editHotelModal.innerHTML = `
                    
                   
                              
                              <div class="col-md-12">
                              <div class="card card-primary">
                                      <div class="card-header">
                                        <h3 class="card-title">Hotel Information Details</h3>
                                      </div>
                                      
                                    
                                      <form method="post" name="edit_hotel-info-form" id="edit_hotel-info-form" enctype="multipart/form-data" novalidate="novalidate">

                                        <div class="card-body">
                                          <div class="form-group">
                                            <label for="edit_hotel_name">Hotel Name</label>
                                            <input type="text" class="form-control  form-control-border" value="${hotel['name']}" id="edit_hotel_name" name="edit_hotel_name" placeholder="Enter Hotel Name" required />
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_email_address">Email Address</label>
                                            <input type="text" class="form-control  form-control-border" value="${hotel['email']}"  id="edit_email_address" name="edit_email_address" placeholder="Enter Email Address" required />
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_hotel_address">Hotel Address</label>
                                            <input type="text" class="form-control  form-control-border" value="${hotel['address']}" id="edit_hotel_address" name="edit_hotel_address" placeholder="Enter Hotel Address" required />
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_hotel_description">Hotel Description</label>
                                            <input type="text" class="form-control  form-control-border" value="${hotel['description']}" id="edit_hotel_description" name="edit_hotel_description" placeholder="Enter Hotel Description" required />
                                          </div>
                                          <div class="form-group">
                                            <label for="edit_phone_number">Phone Number</label>
                                            <input type="phone" class="form-control  form-control-border" value="${hotel['phone']}"  id="edit_phone_number" name="edit_phone_number" placeholder="Enter Phone Number" required />
                                          </div>
                                          <div class="form-group">
                                                <label name="edit_hotel_star_rate">Hotel Star Rate</label>
                                               ${rate}
                                              </div>
                                          <div class="form-group">
                                              <label for="transporation">Add Transporation</label><br>

                                              <label for="car">Car :</label><input type="number" class="form-control" value="${hotel['car']}" id="edit_car_price" name="car"    placeholder="Add Car Fare Price ">
                                              <label for="bus">Bus :</label><input type="number" class="form-control" value="${hotel['bus']}" id="edit_bus_price" name="bus"    placeholder="Add Bus Fare Price ">

                                          </div>

                                          
                                         

                                          <div class="form-group">
                                            <label for="upload_image">Upload Image</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                              
                                                <label class="form-label" for="customFile"></label>
                                                
                                                <input type="file" name="image" id="edit_upload_image" name="edit_upload_image" value="${hotel['image']}"  />
                                                  
                                                  <span id="edit_uploaded_image"></span><span id="uploaded_image"></span>
                                                </div>
                                                <div class="custom-file form-label">
                                                <img src="/hm/images/${hotel['image']}" style = "height: 131px;width: 209px; margin: 30px;" >
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
                                        <div class="alert alert-success alert-dismissible" id="edit_success" style="display:none;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                      </div>
                                    
                                        <div class="card-footer">
                                          <button type="button" id="edit_submit-hotel" onclick="edit_hotel(${hotelId})" class="btn btn-primary">Submit</button>
                                        </div>
                                      </form>
                                    </div>
                              </div>
                            


                              `;

                  }
                });

          }   


          $(document).ready(function(){
            $("#edit_hotel-info-form").validate({
            
                    rules:{
                      edit_hotel_name:{
                            required:true,
                            minlength:3,
                            
                        },
                        edit_email_address:{
                            required:true,
                            email:true,
                            
                        },
                        edit_hotel_address:{
                            required:true,
                            
                        },
                        edit_hotel_description:{
                            required:true,
                            minlength:20,
                            maxlength:300,
                            
                        },
                        edit_hotel_star_rate:{
                            required:true,
                            
                        },
                        edit_phone_number:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            number:true,
                            
                        },
                        edit_upload_image:{
                            
                            extension: "png|jpeg|jpg",
                            
                        },
                     
                    }, 
                    messages:{
                      edit_hotel_name:{
                            required:"Please Enter the hotel Name",
                            minlength:"Hotel name should me more than 3 digits"
                            
                        },
                        edit_email_address:{
                            required:"Please Enter your Email address",
                            email:"Please Enter your valid email"
                            
                        },
                        edit_hotel_address:{
                            required:"Please Enter your hotel address",
                            
                            
                        },
                        edit_hotel_description:{
                            required:"Please describe something about your hotel",
                            minlength:"Text must be more than 20 charecter",
                            maxlength:"Text must not  be more than 300 charecter",
                            
                        },
                        edit_hotel_star_rate:{
                            required:"Please select one",
                            
                        },
                        edit_phone_number:{
                            required:"Please enter valid number",
                            minlength:"Number must not be less than 10",
                            maxlength:"Number must not be more than 10",
                            
                            
                        },
                        edit_upload_image:{
                            extension: "The image must be in png|jpeg|jpg format",
                        },
                    },
                   
                    
                
                
                });

                
        
 

          }); 
          function edit_hotel(hotelId){    
       
       // $('#edit_submit-hotel').on('click', function(){
         if($("#edit_hotel-info-form").valid()){
           
           let name = $('#edit_hotel_name').val();
           let email = $('#edit_email_address').val();
           let address = $('#edit_hotel_address').val();
           let description = $('#edit_hotel_description').val();
           let rate = $('#edit_hotel_star_rate').val();
           let carPrice = $('#edit_car_price').val();
           let busPrice = $('#edit_bus_price').val();
           let number = $('#edit_phone_number').val();
           let image = $('#edit_upload_image').val();
           image = image.substring(image.lastIndexOf("\\") + 1, image.length);
         
           // let form = document.getElementsByName('edit_hotel-info-form')[0];
           // document.getElementById("edit_hotel-info-form").reset();
           if(name!="" && email!="" && address!="" && rate!="" && number!="" ){
             $('#edit_submit-hotel').attr("disabled", "disabled");
             $.ajax({
               url:"<?php echo base_url('hotel/update_hotel'); ?>",
               type:"POST",
               data:{
                 type:1,
                 hotelId:hotelId,
                 name:name,
                 email:email,
                 address:address,
                 rate:rate,
                 car:carPrice,
                 bus:busPrice,
                 description:description,
                 rate:rate,
                 number:number,
                 image:image,

               },
               cache:false,
               success: function(data){
                
                 let dataResult = JSON.parse(data);
                 if(dataResult.statusCode==200){
                   $('#edit_submit-hotel').removeAttr("disabled");
                   $('#fupForm').find('input:text').val('');
                   $("#edit_success").show();
                   $('#edit_success').html(' Hotel Edited successfully !'); 
                   setTimeout( "$('#edit_success').hide();", 2000);

                   
                 }
                 else if(dataResult.statusCode==201){
                alert("Error occured !");
                   }
               }
               
             });

           }


         }

        
           
     }

</script>