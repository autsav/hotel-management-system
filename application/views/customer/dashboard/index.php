
<style>
  .content{
    display: none;
  }
  .active{
    display: block;
  }

 

  </style>
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
          
        
          <section class="content active" id="dashoard-overview-user">
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

          <section class="content" id="review-profile">
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

          <section class="content" id="view-all-bookings">
          <div class=" content-wrapper " id="view-all-bookings">
        
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

            <section class="content" id="hotels-notification">
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

      <section class="content" id="all-hotel-bookings">

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

<!-- <script type="text/javascript">

    $(document).ready(function(){

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
    });

</script> -->


