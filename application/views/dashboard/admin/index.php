
<style>
  .content{
    display: none;
  }
  .active{
    display: block;
  }

  .rating{
   display: flex;
   margin: auto;
   left: 0;

   /* width: 640px;  */
    height: auto;
    margin: 0 auto;
    padding-left:70px ;
    position: relative;
    margin-left: -80px;

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
 /* .rating:hover .rating-item::before {
   content: "\2605";
 } */
 /* .rating-item:hover ~ .rating-item::before{
   content:"\2606";
 } */
.review-number .fas{
  color:#0ec7e4;

}
.review-number .fa{
  color:#0ec7e4;

}
.card-text .fas{
  color:#0ec7e4;

}
.card-text .fa{
  color:#0ec7e4;

}
.error{
  color: red;
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
          
        
          <section class="content active" id="Seller-Dashboard">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-6">            
                  <div class="small-box bg-info  ">
                    <div class="inner no-of-staff">              
                      <h3>13</h3>
                      <p>Staffs</p> 
                    </div>
                    <div class="icon">
                      <i class="fas fa-user"></i>
                    </div>            
                  </div>
                </div>
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                    <?php if($pending_status > '0'): ?>
                              <h3><?php echo $pending_status; ?></h3>
                            <?php endif; ?>
                      
                      <p>Seller</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-users"></i>
                                  </div>
                  </div>
                </div> -->
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning"> 
                    <div class="inner">
                    <?php if($pending_status > '0'): ?>
                              <h3><?php echo $pending_status; ?></h3>
                              <?php else: ?>
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
                    <div class="inner" id="dashboard-review">
                      
                      <h3>31</h3>

                      <p>Reviews</p>
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
          <div class="  " id="add-hotel-category">
            <!-- <div style="background-color: ;" class="col-12">
              Hello
            </div> -->
            
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1 " style="">
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
                          <label for="phone_number">Mobile Number</label>
                          <input type="tel" class="form-control  " id="phone_number" name="phone_number"   placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                          <label for="upload_image">Upload Hotel Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                            
                              <label class="form-label" for="customFile"></label>
                                <input type="file" value="null" class="form-control" name="upload_image" id="upload_image" value="" accept="image/*" />
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

          <div class=" " id="add-hotel-category">

          

            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1 " >
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Foods Destinations and Rooms</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="category-success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                  
                    
                  
                      <div class="card-body" style="background-color: ;">
                     
                          <div class="form-group" style="background-color: #f4f6f999;">
                          <div style="margin:10px;">
                          <label name="select_hotel"><h5><strong> Choose Hotel</strong> </h5></label>
                                <select id="select_hotel" class="form-control" required>
                                <?php foreach($hotels as $hotel){ ?>
                                <option value="<?php echo $hotel['hotel_id']?>" > <?php echo $hotel['name']?></option>
                                <?php }?>
                                </select>

                          </div>
                             
                              </div>
                            
                        <!-- <div class="form-group">
                          <label for="hotel_name">Hotel Category</label>
                          <input type="text" class="form-control  form-control-border" id="add-hotel_category" name="hotel_category" placeholder="Enter Hotel Category">
                        </div> -->
                        <form method="post" name="add-hotel-image-form" id="add-hotel-image-form" enctype="multipart/form-data">
                        <div class="form-group" style="background-color: #f4f6f999;">
                        <div style="margin:10px;">
                        <label for="upload_hotels_image" ><h5><strong> Add Hotel Images</strong> </h5></label>
                              <div class="form-group">
                                  <div class="custom-file">
                                    <label class="form-label" for="customFile"></label>
                                    <input type="file" class="form-control" name="upload_hotels_image" id="upload_hotels_image" value="" accept="image/*" required />
                                    <span id="uploaded_hotels_image"></span><span id="uploaded_hotels_image"></span>
                                  </div>
                              </div>

                                <!-- <div class="input-group">
                                  <button type="button" id="add-hotel_image" class="btn btn-success">Add Hotel Image</button>
                                </div>     -->
                                <br>                      
                              <div class="form-group row " id="hotel_gallery">                           
                              </div>
                        </div>
                         

                          </div>
                        </form>

                        <form method="post" name="add-food-category-form" id="add-food-category-form" enctype="multipart/form-data">
                        <div class="form-group" style="background-color: #f4f6f999;">
                        <div style="margin:10px;">
                        <label for="upload_foods_image" ><h5><strong> Add Foods</strong> </h5></label>


                              <div class="form-group">
                                  <label name="food_name">Food Name</label>
                                  <input type="text" class="food_name" id="food_name" name="food_name" required>
                              </div>
                              <div class="form-group">
                                  <label name="food_price">Food Price :</label>
                                  <input type="number" class="food_price" id="food_price" name="food_price" required>
                              </div>
                              <div class="form-group">
                                  <label name="food_description">Food description :</label>
                                  <input type="text" class="food_description" id="food_description" name="food_description" required>
                              </div>

                              <div class="form-group">
                                  <div class="custom-file">
                                    <label class="form-label" for="customFile"></label>
                                    <input type="file" class="form-control" name="upload_foods_image" id="upload_foods_image" value="" accept="image/*" required />
                                    <span id="uploaded_foods_image"></span><span id="uploaded_foods_image"></span>
                                  </div>
                              </div>

                                <div class="input-group">
                                  <button type="button" id="add-food" class="btn btn-success">Add Food</button>
                                </div>    
                                <br>                      
                              <div class="form-group " id="food_gallery">                           
                              </div>
                        </div>
                         

                          </div>
                        </form>
                      <hr>

                      <form method="post" name="add-room-category-form" id="add-room-category-form" enctype="multipart/form-data">

                        <div class="form-group" style="background-color: #f4f6f999;">
                        <div style="margin:10px;">
                        <label for="upload_rooms_image" ><h5><strong> Add Rooms</strong> </h5></label>

                              <div class="form-group">
                                  <label name="room_name">Room Name</label>
                                  <input type="text" class="room_name" id="room_name" name="room_name" required>
                                </div>
                              <div class="form-group">
                                  <label name="room_price">Room Price :</label>
                                  <input type="number" class="room_price" id="room_price" name="room_price" required>
                              </div>
                              <div class="form-group">
                                  <label name="room_description">Room description :</label>
                                  <input type="text" class="room_description" id="room_description" name="room_description" required>
                              </div>

                              <div class="form-group">
                              <div class="custom-file">
                              <label class="form-label" for="customFile"></label>
                                <input type="file" class="form-control" name="upload_rooms_image" id="upload_rooms_image" value="" accept="image/*" required />
                                <span id="uploaded_rooms_image"></span><span id="uploaded_rooms_image"></span>
                              </div>

                              </div>

                              <div class="input-group">
                                  <button type="button" id="add-room" class="btn btn-success">Add Room</button>
                              </div>  

                        </div>
                      </div>
                      </form>
                        <hr> 
                        <div class="form-group " id="room_gallery">
                        
                        </div>
                        
                        <form method="post" name="add-destination-category-form" id="add-destination-category-form" enctype="multipart/form-data">
            
                        <div class="form-group" style="background-color: #f4f6f999;">
                          <div style="margin:10px;">
                          <label for="upload_destinations_image" ><h5><strong> Add Destination</strong> </h5></label>


                              <div class="form-group">
                                    <label name="destination_name">Destination Name</label>
                                    <input type="text" class="destination_name" id="destination_name" name="destination_name" required>
                                  </div>
                              <div class="form-group">
                                    <label name="destination_price">Destination Price :</label>
                                    <input type="number" class="destination_price" id="destination_price" name="destination_price" required>
                                  </div>
                              <div class="form-group">
                                  <label name="destination_description">Destination description :</label>
                                  <input type="text" class="destination_description" id="destination_description" name="destination_description" required>
                              </div>

                              <div class="form-group">
                              <div class="custom-file">                  
                                <label class="form-label" for="customFile"></label>
                                  <input type="file" class="form-control" name="upload_destinations_image" id="upload_destinations_image" value="" accept="image/*" />
                                  <span id="uploaded_destinations_image"></span><span id="uploaded_destinations_image"></span>
                                </div>
                              <div class="input-group-append">
                              </div>                        
                              </div>
                              <div class="input-group">
                              <button type="button" id="add-destination" class="btn btn-success">Add Destination</button>
                              </div>
                              <br>
                              <div class="form-group " id="destination_gallery">

                              </div>
                          </div>
                        
                        </div>
                        </form>
  
                      </div>
                   
                  

                    
                    
                  </div>
            </div>
            </div>
  
      </section>

      
      <section class="content" id="add-new-staff">
            <div class="  " id="add-new-staff">

            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Staff Information Details</h3>
                </div>
              <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              </div>

            <form method="post" name="hotel-staff-form" id="hotel-staff-form" enctype="multipart/form-data">
            <!-- <form method="post" id="upload_form"  enctype="multipart/form-data">   -->

              <div class="card-body">
                <div class="form-group">
                  <label for="staff_full_name">Staff Full Name</label>
                    <input type="text" class="form-control  form-control-border" id="staff_full_name" name="staff_full_name" placeholder="Enter Staff Name" required/>
                </div>
            <div class="form-group">
            <label for="temporary_address">Temporary Address</label>
            <input type="text" class="form-control  form-control-border" id="temporary_address" name="temporary_address" placeholder="Enter Temporary Address">
            </div>
            <div class="form-group">
            <label for="staff_email_address">Email Address</label>
            <input type="email" class="form-control  form-control-border" id="staff_email_address" name="staff_email_address" placeholder="Enter Email Address">
            </div>

            <div class="form-group">
            <label for="job_position">Job Position</label>
            <input type="text" class="form-control  " id="job_position" name="job_position"   placeholder="Job Position">
            </div>


            <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
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
            <span id="uploaded_staff_image"></span>
            </div>
            

            </div>
            </div>

            </div>
            <div class="form-group " id="staff-success">
                        
            </div>                  

            <div class="card-footer form-group">
            <button type="button" id="submit-staff" class="btn btn-success">Save Staff</button>
            </div>
            </form>
            </div>
            </div>
            </div>
            </section>

      <section class="content" id="view-all-staffs">

      <div class="container-fluid"  >
              <div class="" style="padding:5px; ">
                  <div class="row text-center text-lg-center" id="view-all-staff-body">
                      <!-- <div class="col-lg-4 col-md-4 col-6" >
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
                      </div> -->
                      
                  </div>
              </div>

          </div>
  
      </section>

      <section class="content" id="view-review">
    
      <!-- Default box -->
      <div class="card">
       
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            
              <div class="row">
                <div class="col-12">
                  <h4>Hotel Reviews</h4>
                    <div id="view-review-body">
                                  
                      <!-- <div class="post" >
                        <div class="review">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="" alt="i">
                          <span class="username">
                            <a href="#">  john wick</a>
                          </span>
                          <span class="description">Shared publicly - 7:45 PM today</span>
                        </div>
                        
                        <p>
                        this is my comment
                        </p>

                     
                        </div>
                      </div> -->
                      
                    </div>
                 
                    

                

          
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    
      </section>

      <!-- <section class="content" id="hotels-notification">
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
      </section>  -->
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
                   
                    </script>


<script type="text/javascript">
    const search = () =>{

      let filter = document.getElementById('myInput').value.toUpperCase();
        ///////////////////////view-all-staffs ///////////////////////
        let viewAllStaff = document.getElementById('view-all-staffs');
        let staffCard = document.querySelectorAll('.all-staff');

        let staffCardName = viewAllStaff.querySelectorAll('.staff-name');
        let staffCardEmail = viewAllStaff.querySelectorAll('.staff-email');
        let staffCardAddress = viewAllStaff.querySelectorAll('.staff-temporaryAddress');
        let staffCardGender = viewAllStaff.querySelectorAll('.staff-gender');
        let staffCardJobPosition = viewAllStaff.querySelectorAll('.staff-jobPosition');
        let staffCardMobile = viewAllStaff.querySelectorAll('.staff-mobile');
        for(let i=0; i<staffCard.length; i++){
         
          staffName = staffCardName[i];
          staffEmail = staffCardEmail[i];
          staffAddress = staffCardAddress[i];
          staffGender = staffCardGender[i];
          staffPosition = staffCardJobPosition[i];
          staffMobile = staffCardMobile[i];

          if(staffName || staffEmail || staffAddress || staffGender ||staffPosition || staffMobile){
           let  nameValue = staffName.textContent || staffName.innerHTML;
           let  emailValue = staffEmail.textContent || staffEmail.innerHTML;
           let  addressValue = staffAddress.textContent || staffAddress.innerHTML;
           let  genderValue = staffGender.textContent || staffGender.innerHTML;
           let  positionValue = staffPosition.textContent || staffPosition.innerHTML;
           let  mobileValue = staffMobile.textContent || staffMobile.innerHTML;

           if(nameValue.toUpperCase().indexOf(filter) > -1 || emailValue.toUpperCase().indexOf(filter) > -1 || addressValue.toUpperCase().indexOf(filter) > -1 ||
                genderValue.toUpperCase().indexOf(filter) > -1 || positionValue.toUpperCase().indexOf(filter) > -1 || mobileValue.toUpperCase().indexOf(filter) > -1)
                {
                  staffCard[i].style.display = "";
                }else{
                staffCard[i].style.display = "none";
               }
          }        
        }
        /////////////////////// End of view-all-staffs ///////////////////////
        ////////////////////////////Search all-completed-bookings //////////////////////////////////////
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
        /////////////////////// End of Search all-completed-bookings ///////////////////////



    }

//View  Review//./ 
$(document).ready(function(){
      const allReviewBody = document.getElementById('view-review-body');
      const dashboardReview = document.getElementById('dashboard-review');

      
          
            $.ajax({
                  url: "<?php echo base_url(); ?>/hotel/view_all_customer_review",    
                  type: "POST",
                  data: {
                  type:1
                  },
                  cache: false,
                  success: function(result){
                   

                    let dataResult = JSON.parse(result);
                    reviews = dataResult.data;
                    dashboardReview.innerHTML = `<h3>${reviews.length}</h3>

                                                <p>Reviews</p>`;
                    console.log(reviews.length);
                    reviews.forEach((review)=>{
                      // console.log('down');
                      // console.log(review['rating']);

                      if(review['rating'] =='1'){
                       var rate = ` <ul class="rating">
                                      <li class="rating-item active" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul> `; 
                       
                      }else if (review['rating'] =='2'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item " data-rate="1"></li>
                                      <li class="rating-item active" data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (review['rating'] =='3'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item active" data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (review['rating'] =='4'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item active" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (review['rating'] =='5'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item active" data-rate="5"></li>
                                      </ul>`; 
                      }
                      
                      // console.log(rate);
                        allReviewBody.innerHTML += `
                        <div class="post" >
                        <div class="review">
                        <div class="user-block">
                           <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>/images/profile.jpg" alt="i">
                          <span class="username">
                            <a href="#">  ${review['first_name']}   ${review['last_name']}</a>
                          </span>
                          <span class="description   star-rating" >
                                     ${rate}
                                     
                              </span>
                                    
                                     
                           
                        </div>
                        
                        <p >
                         ${review['comment']}
                        </p>

                     
                        </div>
                      </div>
                      `;
                    });
                   
            
                    
                   

                    
                  }
                });

                
      
        
             
              });



//View All staff Body////
document.getElementById("whole-div").onload =  view_all_staff_div(); ;



function view_all_staff_div(){

      $(document).ready(function(){
    const allHotelStaffBody = document.getElementById('view-all-staff-body');
          const noOfStaff = document.querySelector('.no-of-staff')


          $.ajax({
                      url: "<?php echo base_url(); ?>/employee/view_all_staff_body",    
                      type: "POST",
                      data: {
                      type:1
                      },
                      cache: false,
                      success: function(result){
                      
                      

                        let dataResult = JSON.parse(result);
                        staffs = dataResult.data;
                      
                        noOfStaff.innerHTML = `
                        <h3>${staffs.length}</h3>
                          <p>Staffs</p> `;


                        staffs.forEach((staff)=>{
                            // console.log(staff['employee_id']);
                          allHotelStaffBody.innerHTML += ` 
                        
                        <div class="col-lg-4 col-md-4 col-6 all-staff " id="staff-${staff['employee_id']}" >
                        <div class="card" style="position: relative;" >
                        <div class="d-flex flex-row-reverse">
                        <div class="p-2"">
                          <button type="button" onclick="delete_staff(${staff['employee_id']})" class="close" aria-label="Close">
                          <i class="fa fa-times fa-sm" aria-hidden="true" style="color:red;" ></i>
                          </button>                      
                        </div>
                        </div>
                        
                          <div style="margin:20px">
                        

                          <img class=" rounded-circle center" style="height: 175px; width:175px;"  alt="100x100" src="/hm/images/${staff['staffImage']}"
                                data-holder-rendered="true">
                                <div class="card-body">
                                  <div class="card-text"><h5 class="card-text staff-name">${staff['staffName']}</h5></div>
                                  <div class="card-text staff-email ">${staff['email']}</div>
                                  <div class="card-text staff-temporaryAddress ">${staff['temporaryAddress']}</div>
                                  <div class="card-text staff-gender ">${staff['gender']}</div>

                                  <hr>
                                  <div class="review-number">
                                    <div class="d-inline p-1 staff-jobPosition ">  <i class="fas fa-briefcase"></i> ${staff['jobPosition']}</div>  
                                    <div class="d-inline p-1 staff-mobile ">  <i class="fas fa-mobile"></i> ${staff['mobile']}</div>    
                                  </div>                 
                                </div>
                                </div>
                              </div>
                        </div>
                        
                    `;
                        });
                       }
                    });




    });

}
   
        
        
              
               
                
                
             

              function delete_staff(employee_id){
                let staff_id = 'staff-'+employee_id;
                let staffBody = document.getElementById(staff_id);
              
                console.log(staffBody);

                               $.ajax({
                                    url: "<?php echo base_url(); ?>hotel/delete_employee",    
                                    type: "POST",
                                    data: {
                                      employee_id:employee_id,
                                    },
                                    cache: false,
                            success: function(result){
                              let dataResult = JSON.parse(result);
                            result = dataResult.data;
                            if(result){
                              // staffBody.remove();
                              staffBody.style.display = "none";

                              alert("!!Employee deleted!!")

                              // staffBody.style.display = "block";
                            
                            console.log(staffBody);
                            }
                    
                          // let targetRow = document.getElementById("all-hotel-details-table").rows.namedItem(hotelId);
                          //     targetRow.remove();
                           

                              
                              
                              }
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
                        // const pendingStatus = document.getElementById("pending-status-value").value;
                        // pendingStatus = pendingStatus - true;

                        // pendingStatusDiv.innerHTML = `           
                        // <i class="fas fa-book"></i>
                        //   All Hotel Bookings   
                        //       <span class="right badge badge-danger">${pendingStatus}</span>`;

                        
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

              $(document).ready(function(){
                $("#add-food-category-form").validate({ 
                  rules:{
                                food_name:{
                                      required:true,
                                      minlength:2,
                                      
                                  },
                                  food_price:{
                                      required:true,
                                      number:true,
                                      
                                  },
                                  food_description:{
                                    required:true,
                                      minlength:10,
                                      maxlength:200,
                                      
                                  },
                                  upload_foods_image:{
                                    required:true,
                                      
                                  },
                              
                              
                              }, 
                              messages:{
                                food_name:{
                                      required:"Please Enter the hotel Name",
                                      minlength:"Hotel name should me more than 2 digits"
                                      
                                  },
                                  food_price:{
                                      required:"Please Enter the food price",
                                      
                                  },
                                  food_description:{
                                    required:"Please Enter food description",

                                      minlength:"Description must be min of 10 character",
                                      maxlength:"Description must be max of 200 character",
                                  },
                                  upload_foods_image:{
                                      required:"Please describe something about your hotel",
                                    },
                                
                              },
                             });

                          });

                          $(document).ready(function(){
                $("#add-room-category-form").validate({ 
                  rules:{
                                room_name:{
                                      required:true,
                                      minlength:2,
                                      
                                  },
                                  room_price:{
                                      required:true,
                                      number:true,
                                      
                                  },
                                  room_description:{
                                    required:true,
                                      minlength:10,
                                      maxlength:200,
                                      
                                  },
                                  upload_rooms_image:{
                                    required:true,
                                      
                                  },
                              
                              
                              }, 
                              messages:{
                                room_name:{
                                      required:"Please Enter the room Name",
                                      minlength:"Room name should me more than 2 digits"
                                      
                                  },
                                  room_price:{
                                      required:"Please Enter the room price",
                                      
                                  },
                                  room_description:{
                                    required:"Please Enter room description",

                                      minlength:"Description must be min of 10 character",
                                      maxlength:"Description must be max of 200 character",
                                  },
                                  upload_rooms_image:{
                                      required:"Please describe something about your room",
                                    },
                                
                              },
                             });

                          });


                          $(document).ready(function(){
                $("#add-destination-category-form").validate({ 
                  rules:{
                             destination_name:{
                                      required:true,
                                      minlength:2,
                                      
                                  },
                                  destination_price:{
                                      required:true,
                                      number:true,
                                      
                                  },
                                  destination_description:{
                                    required:true,
                                      minlength:10,
                                      maxlength:200,
                                      
                                  },
                                  upload_destinations_image:{
                                    required:true,
                                      
                                  },
                              
                              
                              }, 
                              messages:{
                                food_name:{
                                      required:"Please Enter the destination Name",
                                      minlength:"Destination name should me more than 2 digits"
                                      
                                  },
                                  food_price:{
                                      required:"Please Enter the destination price",
                                      
                                  },
                                  food_description:{
                                    required:"Please Enter destination description",

                                      minlength:"Description must be min of 10 character",
                                      maxlength:"Description must be max of 200 character",
                                  },
                                  upload_foods_image:{
                                      required:"Please describe something about your destination",
                                    },
                                
                              },
                             });

                          });



   



            $(document).on('change', '#upload_image', function(){
              
          upload_image(this,'hotel/image_upload', '#uploaded_image',);
        

            });
            $(document).on('change', '#upload_hotels_image', function(){
              
                
              upload_image(this,'hotel/image_upload', '#uploaded_hotels_image',);

              image_preview(this,'#hotel_gallery','hotel/new_image_upload','hotels','NULL','NULL','NULL');
              
                document.getElementById("add-hotel-category-form").reset();
             
                // image_preview(this,'#room_gallery','hotel/new_image_upload','rooms',roomPrice,roomDescription,roomName);
                // document.getElementById("add-room-category-form").reset();

              
            
    
                });
                
            $(document).on('click', '#add-room', function(){
              const roomImage = document.getElementById('upload_rooms_image');
              
              let roomName = $('#room_name').val();
              let roomPrice = $('#room_price').val();
              let roomDescription = $('#room_description').val();
            

              
                upload_image(roomImage,'hotel/image_upload', '#uploaded_rooms_image',);
                // image_preview(this,'#room_gallery','hotel/new_image_upload','rooms');
                if($("#add-room-category-form").valid()){
                image_preview(roomImage,'#room_gallery','hotel/new_image_upload','rooms',roomPrice,roomDescription,roomName);
                document.getElementById("add-room-category-form").reset();

                }

            });
            $(document).on('click', '#add-destination', function(){

              const destinationImage = document.getElementById('upload_destinations_image');

              let destinationName = $('#destination_name').val();
              let destinationPrice = $('#destination_price').val();
              let destinationDescription = $('#destination_description').val();

                upload_image(destinationImage,'hotel/image_upload', '#uploaded_destinations_image',);
                // image_preview(this,'#destination_gallery','hotel/new_image_upload','destinations');
                if($("#add-destination-category-form").valid()){
                image_preview(destinationImage,'#destination_gallery','hotel/new_image_upload','destinations',destinationPrice,destinationDescription,destinationName);
                document.getElementById("add-destination-category-form").reset();

                }

            });
            $(document).on('click', '#add-food', function(){
              const foodImage = document.getElementById('upload_foods_image');
                
                
               
                let foodName = $('#food_name').val();
                let foodPrice = $('#food_price').val();
                let foodDescription = $('#food_description').val();

                  upload_image(foodImage,'hotel/image_upload', '#uploaded_foods_image',);
                  if($("#add-food-category-form").valid()){
                  image_preview(foodImage,'#food_gallery','hotel/new_image_upload','foods',foodPrice,foodDescription,foodName);
                  document.getElementById("add-food-category-form").reset();
                  
                }
              });
            $(document).on('change', '#upload_staff_image', function(){
                upload_image(this,'hotel/image_upload', '#uploaded_staff_image',);

            });


    // });

     

     function image_preview(did,placeToInsertImagePreview,url,type,price,description,name){
                              
                    let hotelId = $('#select_hotel').val();
                   
                    
                   
                    // console.log(type);

                    let id = did.id;
                    // let name = did.name;
                   

                    let imageData = new FormData() ;
                    imageData.append('name',name);
                    imageData.append('price',price);
                    imageData.append('description',description);
                    imageData.append('hotelId',hotelId);
                    imageData.append('type',type);

                    // let infoData = [hotelId,type]
                    // if(type =='foods'){
                    //   let infoData = [hotelId,type]
                    // }else if(type == 'rooms'){

                    // }else{

                    // }
                 

                    //Read Selected  files
                    let totalfiles = document.getElementById(id).files.length;       
                    for (let index = 0; index < totalfiles; index++) {
                      imageData.append("files[]", document.getElementById(id).files[index]);
                      
                      
                  }
                  // let form = document.getElementsByName('add-food-category-form')[0];
                

                    $.ajax({
                          url: "<?php echo base_url(); ?>"+url, 
                          type: 'post',
                          data:imageData, 
                          dataType: 'json',
                          contentType: false,
                          processData: false,
                          success: function (response) {
                              var foodImage = [];
                            for(let index = 0; index < response.length; index++) {
                              let src = response[index];
                              let filename = src.substring(src.lastIndexOf('/')+1);
                              foodImage.push(filename)    
                              if(type == 'foods'){
                                $(placeToInsertImagePreview).append('<div class="d-flex flex-row"><div class="p-2"><h5 style="color:green;">Food Uploaded</h5><img src="<?php echo base_url() ?>'+src+'" width="200px;" height="200px"><div></div>');
                              }else if(type == 'rooms'){
                                $(placeToInsertImagePreview).append('<div class="d-flex flex-row"><div class="p-2"><h5 style="color:green;">Room Uploaded</h5><img src="<?php echo base_url() ?>'+src+'" width="200px;" height="200px"><div></div>');

                              }else if(type == 'hotels'){
                                $(placeToInsertImagePreview).append('<div class="d-flex flex-row"><div class="p-2"><h5 style="color:green;">Hotel Uploaded</h5><img src="<?php echo base_url() ?>'+src+'" width="200px;" height="200px"><div></div>');

                              }
                              else{
                                $(placeToInsertImagePreview).append('<div class="d-flex flex-row"><div class="p-2"><h5 style="color:green;">Destination Uploaded</h5><img src="<?php echo base_url() ?>'+src+'" width="200px;" height="200px"><div></div>');

                              }
                            }
                            
                            // saveImage(foodImage);
                          }
                        });

             
                        
    
    }
  

    function upload_image(id,url,message){
      
      
      id= id.id;
      let name = document.getElementById(id).files[0].name;
            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
            {
            alert("Invalid Image File");
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById(id).files[0]);
            var f = document.getElementById(id).files[0];
            var fsize = f.size||f.fileSize;
            if(fsize > 2000000)
            {
            alert("Image File Size is very big");
            }
            else
            {
            form_data.append("file", document.getElementById(id).files[0]);
            // console.log('formdata');
            // console.log(form_data);
            $.ajax({
              url:"<?php echo base_url(); ?>"+url,
              method:"POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
                
              beforeSend:function(){
                
              $(message).html("<label class='text-success'>Image Uploading...</label>");

              },   
              success:function(data)
              {
                
                $(message).html("<label class='text-success'>Image Uploaded</label>");
              },
            
            });

            }

    }

    $(document).ready(function(){
    $("#hotel-staff-form").validate({
                    rules:{
                      staff_full_name:{
                            required:true,
                            minlength:3,
                            
                        },
                        temporary_address:{
                            required:true,
                  
                        },
                        staff_email_address:{
                            required:true,
                            email:true,
                            
                        },
                        job_position:{
                            required:true,
                           
                            
                        },
                       
                        mobile_number:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            number:true,
                            
                        },
                        upload_staff_image:{
                            required:true,
                            
                        },
                     
                    }, 
                    messages:{
                      staff_full_name:{
                            required:"Please Enter the hotel Name",
                            minlength:"Staff name should me more than 3 digits"
                            
                        },
                        temporary_address:{
                            required:"Please enter your temporary address",
                            
                        },
                        staff_email_address:{
                            required:"Please enter your Email address",
                            email:"Email you entered is not valid"

                            
                        },
                        job_position:{
                            required:"Please provide your job position",
                          
                            
                        },
                       
                        mobile_number:{
                            required:"Please enter valid number",
                            minlength:"Number must not be less than 10",
                            maxlength:"Number must not be more than 10",
                            
                            
                        },
                        upload_staff_image:{
                            required:"Please select an image of your staff",
                        },
                    },
                   
                    
                
                
                });
              });

 

        $('#submit-staff').on('click', function(){
              if($("#hotel-staff-form").valid()){
                const allStaffDivs = document.querySelectorAll('.all-staff');

                          let staffName = $('#staff_full_name').val();
                          let temporaryAddress = $('#temporary_address').val();
                          let email = $('#staff_email_address').val();
                          let jobPosition = $('#job_position').val();
                          let mobileNumber = $('#mobile_number').val();

                          let gender = $('#gender').val();
                          let staffImage = $('#upload_staff_image').val();
                          staffImage = staffImage.substring(staffImage.lastIndexOf("\\") + 1, staffImage.length);

                          let form = document.getElementsByName('hotel-staff-form')[0];
                          document.getElementById("hotel-staff-form").reset();

                          if(staffName!="" && temporaryAddress!="" && email!="" && jobPosition!="" && mobileNumber!="" && gender!="" && staffImage!=""){
                            $('#submit-staff').attr("disabled", "disabled");
                            $.ajax({
                              url:"<?php echo base_url('employee/savedata'); ?>",
                              type:"POST",
                              data:{
                                type:1,
                                staffName:staffName,
                                temporaryAddress:temporaryAddress,
                                email:email,
                                jobPosition:jobPosition,
                                mobileNumber:mobileNumber,
                                gender:gender,
                                staffImage:staffImage,

                              },
                              cache:false,
                              success: function(data){
                                allStaffDivs.forEach((staff) =>{
                                  staff.style.display = "none";

                                });

                                
                                let dataResult = JSON.parse(data);
                                if(dataResult.statusCode==200){
                                  $('#submit-staff').removeAttr("disabled");
                                  $('#fupForm').find('input:text').val('');
                                  $("#staff-success").show();
                                  $('#staff-success').html("<label class='text-success'> Staff added successfully !</label>"); 
                                  setTimeout( "$('#staff-success').hide();", 2000);
                                  view_all_staff_div();
                                  alert('staff Added Succesfully');

                              
                                  
                                          }
                                            else if(dataResult.statusCode==201){
                                    alert("Error occured !");
                                              }
                                        }
                              
                            });

                          }
              }

          
             
        }); 
        $(document).ready(function(){
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


        }),

            
      
        $('#submit-hotel').on('click', function(){
          if($("#hotel-info-form").valid()){

              let name = $('#hotel_name').val();
              let email = $('#email_address').val();
              let address = $('#hotel_address').val();
              let rate = $('#hotel_star_rate').val();
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
                    name:name,
                    email:email,
                    address:address,
                    rate:rate,
                    number:number,
                    image:image,
                    description:description,

                  },
                  cache:false,
                  success: function(data){
                   
                    let dataResult = JSON.parse(data);
                    if(dataResult.statusCode==200){
                      $('#submit-hotel').removeAttr("disabled");
                      $('#fupForm').find('input:text').val('');
                      $("#success").show();
                      $('#success').html('Your Hotel Profile has been created !'); 
                      setTimeout( "$('#success').hide();", 2000);

                      
                    }
                    else if(dataResult.statusCode==201){
					   alert("Error occured !");
					            }
                  }
                  
                });

              }
            }
             
        });
 


        
       

   
    function hide_alert(id){
      $(id).fadeTo(2000, 500).slideUp(500, function(){
            $(id).slideUp(500);
        });
    }

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
           headerText = id.split('-').join(' ');       
       capital = capitalizeTheFirstLetterOfEachWord(headerText);
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
