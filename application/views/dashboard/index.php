
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
          
        
          <section class="content active" id="dashoard-overview">
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
                  <div class="content-wrapper post-advertisement-modal " id="post-advertisement">
                
                <div class="container-fluid" >
              <div class="col-md-9" >    
                      <div class="card card-primary" >
                        <div class="card-header">
                          <h3 class="card-title">Post Advertisement</h3>
                        </div>        
                        <form method="post" name="post-ad-form" id="post-ad-form" enctype="multipart/form-data">
                          <div class="card-body">  
                          <div class="alert alert-success alert-dismissible" id="advertisement-success" style="display:none;">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    </div>             
                            <div class="form-group">
                              <label for="exampleInputFile">Upload post</label>
                              <div class="input-group">
                                <div class="custom-file">
                                
                                  <input type="file" class="custom-file-input"  name="upload_advertisement_image" id="upload_advertisement_image" accept="image/*" />
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                

                                </div>       
                              </div>
                            </div>   
                          </div>
                          <div class="card-footer">
                            <button type="submit-advertisement" class="btn btn-primary">Add Post</button>
                          </div>
                        </form>
                      </div>
                        </form>
                      </div>
                    </div>
                </div>
          </section>

          <section class="content" id="add-hotel-profile">
          <div class=" content-wrapper " id="add-hotel-profile">
        
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
                        <button type="button" id="submit-hotel" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
            </section>

            <section class="content" id="view-all-hotels">
            <div class="container-fluid" >
              <div class="row" style="padding:5px;">
                  <div class="row text-center text-lg-left">
                    <?php foreach($hotels as $hotel){ ?>
                      <div class="col-lg-3 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top" style="height: 200px;"  alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"
                              data-holder-rendered="true">
                              <div class="card-body">

                                <h5 class="card-title"><?php echo $hotel['name']; ?></h5></br>
                                <p class="card-text"><a href=""><?php echo $hotel['email']; ?></a></p>
                                <p class="card-text"><?php echo $hotel['address']; ?></p>
                                <div class="review-number">
                                  <div class="d-inline p-1 bg-success text-white">  <i class="fas fa-hotel"></i> <?php echo $hotel['rate']; ?> Start Hotel</div>
                                  <div class="d-inline p-1 bg-dark text-white">  <i class="fas fa-mobile"></i> <?php echo $hotel['phone']; ?></div>    
                                </div>
                    
                              <br>
                    
                                <a href="#" class="btn btn-primary">View Profile</a>
                              </div>
                            </div>
                      </div>
                    <?php }            
                    ?>  
                  </div>
              </div>

          </div>
                
      </section>

      <section class="content" id="view-membership">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Members</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
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
             
              <table class="table table-head-fixed text-nowrap">
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
                  <?php foreach($hotels as $hotel){ ?>
                    <tr id="<?php echo $hotel['hotel_id']; ?>">
                      <td><?php echo $hotel['hotel_id']; ?></td>
                      <td><?php echo $hotel['name']; ?></td>
                      <td><?php echo $hotel['email']; ?></td>
                      <td><span class="tag tag-success"><?php echo $hotel['address']; ?></span></td>
                      <td><button type="button"  class="btn btn-primary edit-manage-hotel ">Edit</button>
                      <button type="button" onclick="delete_hotel($hotel_id = <?php echo $hotel['hotel_id']; ?>)"  class="btn btn-danger delete-manage-hotel">Delete</button></td>
                    </tr>              
                  <?php }?>
                  </tbody>
                </table>
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </section>

      <section class="content" id="all-completed-bookings">
      <div class="container-fluid" >
              <div class="row" style="padding:5px;">
                  <div class="row text-center text-lg-left">

                  <?php foreach($bookings as $booking){ ?>
                      <div class="col-lg-4 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="https://images.unsplash.com/photo-1615775862217-70bc84f43b6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs. <?php echo $booking['total_amount']; ?></div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['full_name']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['hotel_id']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['current_address']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['booking_date']; ?></div>
                                <div class="card-text"><i class="fas fa-hotel"></i> <?php echo $booking['time']; ?></div>
                                <div class="review-number">
                                  <div class="d-inline p-1  "><i class="fas fa-hotel"></i> <?php echo $booking['food_id']; ?></div>
                                  <div class="d-inline p-1  "><i class="fas fa-mobile"></i> <?php echo $booking['room_id']; ?> </div>  
                                  <div class="d-inline p-1  "><i class="fas fa-mobile"></i> <?php echo $booking['destination_id']; ?></div>    
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

<script type="text/javascript">
        function delete_hotel($hotel_id){
          $(document).ready(function(){
                                let hotelId = $hotel_id;
                                console.log(hotelId);
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
                                                          <button onclick="status_pending($booking_id = ${userId})" name="did" class="btn btn-danger"  data-cid="0">De-Active</button>
                                                          </div>`;
                                              
                                              console.log(result);
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
                                                          <button onclick="status_pending($booking_id = ${userId})" name="aid" class="btn btn-success"  data-cid="0">Active</button>
                                                          </div>`;
                                              
                                              console.log(result);
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
                                              
                                              console.log(result);
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

              // $('#uploaded_image').html(data);
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
                alert('Image added');
                $('#advertisement-success').html("<label class='text-success'>Image Uploaded</label>");

              // $('#uploaded_image').html(data);
              }
            });
            }
 });


       
          
         
      //       $('#upload_image').change(function(){
      //             var file_data = $('#upload_image').prop('files')[0];   
      //             var form_data = new FormData();                  
      //             form_data.append('file', file_data);
      //             $.ajax({
      //                 url: "<?php echo base_url(); ?>hotel/do_upload",
      //                 type: "POST",
      //                 data: form_data,
      //                 contentType: false,
      //                 cache: false,
      //                 processData:false,
      //                 success: function(data){
      //                     console.log(data);
      //                 }
      //     });
      // });
         

            
      
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
              // console.log(name);
              // console.log(email);
              // console.log(address);
              // console.log(rate);
              // console.log(number);
              // console.log(image);

              // alert(image);
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
