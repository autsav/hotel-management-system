
<style>
  .content{
    display: none;
  }
  .active{
    display: block;
  }
  .modal-btn {
  margin-top: 2rem;
  background: var(--clr-primary-5);
  border-color: var(--clr-primary-5);
  color: var(--clr-white);
}
.modal-btn:hover {
  background: transparent;
  color: var(--clr-primary-5);
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

 }
 .rating li {
   list-style-type: none;
 }
 .rating-item{
   border:1px solid #ffff;
    cursor: pointer;
    font-size: 2em;
    color: #ffc107;
 }
 .rating-item::before{
   content: "\2605";
 }
 .rating-item.active ~ .rating-item::before {
   content: "\2606";
 }
 .rating:hover .rating-item::before {
   content: "\2605";
 }
 .rating-item:hover ~ .rating-item::before{
   content:"\2606";
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
                <!-- <div class="col-lg-3 col-6">            
                  <div class="small-box bg-info">
                    <div class="inner">              
                      <h3>13</h3>
                      <p>Profiles</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user"></i>
                    </div>            
                  </div>
                </div> -->
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>27<sup style="font-size: 20px">%</sup></h3>
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
                    <?php if($no_review_profile == '0'): ?>
                      <h3>0</h3>
                      <?php else:?>
                        <h3><?php echo $no_review_profile; ?></h3>
                      <?php endif; ?>
                      
                      <p>Hotel Profiles</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bell"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6" id="dashboard-booking">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>0</h3>

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
            
        
          <?php if($hotels != '0'): ?>   
         
          <div class="container-fluid" >
              <div class="" style="padding:5px;">
                  <div class="row text-center text-lg-center">
                    <?php foreach($hotels as $hotel){ ?>
                      
                      <div class="col-lg-4 col-md-4 col-6" id="<?php print_r($hotel['hotel_id']);  ?>">
                      <div class="card" style="position: relative;" >
                      <div style="margin: 20px;">
                      <img class=" rounded-circle center" style="height: 175px; width:175px;" alt="100x100" src="<?php echo base_url(); ?>/images/<?php print_r($hotel['image']);  ?>"
                              data-holder-rendered="true">

                              <div class="card-body">
                                <div class="card-text"><h4 class="card-text"><?php print_r($hotel['name']);  ?></h4></div>
                                <div class="card-text"><?php print_r($hotel['email']);  ?></div>
                                <div class="card-text"><?php print_r($hotel['address']);  ?></div>
                                <div class="review-number">
                                  <div class="d-inline p-3  ">  <i class="fas fa-hotel"></i> <?php print_r($hotel['rate']);  ?> Start Hotel</div>
                                  <div class="d-inline p-3  ">  <i class="fas fa-mobile"></i>  <?php print_r($hotel['phone']);  ?></div>  
                                </div> 
                                <br>
                                <button class="btn modal-btn review-profile-btn" id="review-profile-btn" style=" width:100%;" data-id="<?php print_r($hotel['hotel_id']);  ?>" data-toggle="modal" data-target="#modal-xl" >
                                  Review Profile
                                                    </button>
                              </div>      
                          </div>              
                      </div>
                      </div>                         
                    <?php }            
                    ?>  
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

              <div class="modal fade  " id="modal-xl">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Review Profile</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body review-modal">
                      <div class=" text-left text-lg-left">
                          <div class="col-lg-8 col-md-8 col-8" id="">
                              <div class="" id="">
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
                                <div class="form-group">
                                  <label for="comment">Comment:</label>
                                  <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4" id="">

                            <div class="" style="position: relative;" >
                              <div class=" text-center text-lg-center" style="margin: 20px;">
                              <img class=" rounded-circle center" style="height: 175px; width:175px; margin-left:80px;" 
                              alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"
                                      data-holder-rendered="true">
                                  
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


                                <div class="card-text"><h5 class="card-text"><?php echo $hotel['name']; ?></h5></div>
                                <div class="card-text"><a href=""><?php echo $hotel['email']; ?></a></div>
                                <div class="card-text"><?php echo $hotel['address']; ?></div>
                              
                               
                              </div> 

                              </div>
                            </div>
                        </div>
                      
                      
                      
                        </div>     
                    </div>
                    <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">Send</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                  </div>
                </div>
           </div>
              
  
          </section>




          <!-- <section class="content" id="view-all-bookings">
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

                      <div class="card-body">
                      <div class="container">
                        <span id="rateMe1"></span>
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
                    
                      </div>
                  

                      <div class="card-footer">
                        <button type="button" id="submit-hotel" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
            </section> -->

            <section class="content" id="hotels-notification">
            <div class="container-fluid" >
              <div class="" style="padding:5px;">
                  <div class=" text-center text-lg-left">
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
              <div class="" style="padding:5px;">
                  <div class=" row text-center text-lg-left" id="all-hotel-bookings-body">

                      <!-- <div class="col-lg-3 col-md-3 col-6">
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
                      </div> -->
                 
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
  reviewProfileBtns = document.querySelectorAll('.review-profile-btn');
 
  reviewProfileBtns.forEach((btn)=>{
      btn.onclick = e =>{
        const id = e.target.dataset.id;
        get_hotel(id);
     
      }
  });
  
    $(document).ready(function(){
      const allHotelBookingsBody = document.getElementById('all-hotel-bookings-body');
      const dashboardBooking = document.getElementById('dashboard-booking');
            // console.log(allHotelBookingsBody);
          
            $.ajax({
                  url: "<?php echo base_url(); ?>/booking/view_all_customer_booking",    
                  type: "POST",
                  data: {
                  type:1
                  },
                  cache: false,
                  success: function(result){
                    let dataResult = JSON.parse(result);
                    bookings = ((dataResult.data));
                    if(bookings == ''){
                      dashboardBooking.innerHTML = `
                    <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>0</h3>

                      <p>Bookings</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bookmark"></i>
                    </div>
                  </div>`;
                    }
                    dashboardBooking.innerHTML = `
                    <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>${bookings.length}</h3>

                      <p>Bookings</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bookmark"></i>
                    </div>
                  </div>`;

                   
                    bookings.forEach((booking)=>{
                      console.log(booking)
                      allHotelBookingsBody.innerHTML += `
                   
                   <div class="col-lg-3 col-md-3 col-6">
                     <div class="card" >
                     <img class="card-img-top"   alt="100x100" src="<?php echo base_url(); ?>/images/${booking['image']}"
                             data-holder-rendered="true">
                             <div class="card-body">
                             <div class="d-flex">
                                   <div class="p-2 font-weight-bold">Booked By</div>
                                   <div class="ml-auto p-2 font-weight-bold">NRs.${booking['total_amount']} </div>
                             </div>
                               
                               <div class="card-text"><i class="fas fa-hotel"></i> &nbsp; ${booking['full_name']}</div>
                               <div class="card-text"><i class="fas fa-mobile"></i>&nbsp;&nbsp;&nbsp;&nbsp;  ${booking['mobile']}</div>
                               <div class="card-text"><i class="fas fa-address-card"></i>&nbsp; ${booking['current_address']}</div>
                              <br>
                               <div class="review-number">
                                 <div class="d-inline p-3  "><i class="fas fa-apple-alt"></i> ${booking['food_id']}</div>
                                 <div class="d-inline p-3  "><i class="fas fa-bed"></i> ${booking['room_id']} </div>  
                                 <div class="d-inline p-3  "><i class="fas fa-archway"></i> ${booking['destination_id']} </div>    
                               </div> 
                               <br>
                            
                           

                                 
                             </tr>

                             </div>
                           </div>
                           </div>
                            `;


                    });
                   }
                });
             
              });
              // <a href="#" class="btn btn-primary">View Profile</a>
          
  function get_hotel(id){ 
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
                    
                    console.log(hotel);
                  reviewModal = document.querySelector('.review-modal');
                          reviewModal.innerHTML = ` 
                                          <form id="review-profile-form" action="" method="post" >
                                          <div class="row text-left text-lg-left">
                                              <div class="col-lg-8 col-md-8 col-8" id="">
                                              <h4 class="modal-title">${hotel['name']}</h4>

                                                  <div class="" id="">
                                                      <div class="">

                                                      <p>${hotel['description']}
                                                      </p>
                                                      </div>
                                                    </div>
                                                    <div id="select-review-success" style="color:green";></div>
                                                    <div id="select-review-fail" style="color:red";>

                                                    </div>
                                                    <div class="form-group">
                                                      <label for="comment">Comment:</label>
                                                      <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-4" id="">

                                                <div class="" style="position: relative;" >
                                                  <div class="row text-center text-lg-center" style="margin: 20px;">
                                                  <img class=" rounded-circle center" style="height: 175px; width:175px; margin-left:80px;" 
                                                  alt="100x100" src="<?php echo base_url(); ?>/images/${hotel['image']}"
                                                          data-holder-rendered="true">
                                                      
                                                      <div class="card-body" id="rate">
                                                      
                                                        <div class="card-text center star-rating">
                                                          <ul class="rating" name="rating" onclick="rate(event)">
                                                          <li class="rating-item" data-rate="1"></li>
                                                          <li class="rating-item active" data-rate="2"></li>
                                                          <li class="rating-item" data-rate="3"></li>
                                                          <li class="rating-item" data-rate="4"></li>
                                                          <li class="rating-item" data-rate="5"></li>
                                                          </ul>
                                                        
                                                        </div>


                                                    <div class="card-text"><h5 class="card-text">${hotel['name']}</h5></div>
                                                    <div class="card-text">${hotel['email']}</div>
                                                    <div class="card-text">${hotel['address']}</div>
                                                    
                                                  
                                                  </div> 

                                                  </div>
                                                </div>
                                            </div>
                                          
                                          
                                          
                                            </div>     
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                        <button type="button" id="send-review" onClick="save_review(${hotelId})" class="btn btn-primary">Send</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </form>
                                          `;

                    
                  }
                });

          }
          





  function rate(e)
                { 
                  const container = document.querySelector('.rating');
                const items = container.querySelectorAll('.rating-item');

                  const elClass = e.target.classList;
                  if(!elClass.contains('active')){
                    items.forEach(
                      item => item.classList.remove('active')
                    );
                    elClass.add('active');
                    window. rateCount=e.target.dataset.rate; 


                }
              }
             

    $("#review-profile-form").validate({
                    rules:{
                      rating:{
                            required:true,
                            minlength:3,
                            
                        },
                        comment:{
                            required:true,
                            minlength:10,
                            maxlength:100,
                            
                            
                        },
                     
                     
                    }, 
                    messages:{
                      rating:{
                            required:"Please provide the rating",
                            
                        },
                        comment:{
                            required:"Please provide your comment.",
                            minlength:"Comment must be more than 10 charecter",
                            maxlength:"Text must not be more than 100 charecter",
                            
                        },
                      
                    },
                   
                    
                
                
                });


         



        function save_review(hotelId){

          if($("#review-profile-form").valid()){
            
                let rate = window. rateCount;
                let comment = $('#comment').val();
               
                if(!comment == '' && !rate == '' ){
                $('#comment').val('') ;
                              $.ajax({
                                  url:"<?php echo base_url(); ?>/hotel/review_data_save",
                                  type:"POST",
                                  data:{
                                    type:1,
                                    hotelId:hotelId,
                                    rate:rate,
                                    comment:comment
  
                                  },
                                  cache:false,
                                  success: function(result){
                                    
                                    let dataResult = JSON.parse(result);
                                    if(dataResult.statusCode==200){
                                      $('#send-review').removeAttr("disabled");
                                      // $('#fupForm').find('input:text').val('');
                                      $("#select-review-success").show();
                                      $('#select-review-success').html('!!! Review added Successfully !!!');

                                      setTimeout( "$('#select-review-success').hide();", 2000);
                                      
                                     
 
                                      
                                    }
                                    else if(dataResult.statusCode==201){
                                        alert("Error occured !");
                                      }
                                  }
                                 });  

                }else{
                                  $('#select-review-fail').html('!!! Please rate and leave comment !!!');
                                  setTimeout( "$('#select-review-fail').hide();", 2000);


                }
               

          }

         
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
      function capitalizeTheFirstLetterOfEachWord(words) {
   var separateWord = words.toLowerCase().split(' ');
   for (var i = 0; i < separateWord.length; i++) {
      separateWord[i] = separateWord[i].charAt(0).toUpperCase() +
      separateWord[i].substring(1);
   }
   return separateWord.join(' ');
}
</script>




