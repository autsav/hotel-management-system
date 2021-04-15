
<style>
    .wrapper{
        background: #f4f6f9;
    }
    .card-text{
        color: white;
    }
    button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    background: #fff0;
    border: none;
}

.d-flex .fa{
    color:#0ec7e4;
}
.d-flex .fas{
    color:#0ec7e4;
}
/* .modal-btn {
  margin-top: 2rem;
  background: var(--clr-primary-5);
  border-color: var(--clr-primary-5);
  color: var(--clr-white);
} */
/* .modal-btn:hover {
  background: transparent;
  color: var(--clr-primary-5);
} */
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
 /* .rating:hover .rating-item::before {
   content: "\2605";
 }
 .rating-item:hover ~ .rating-item::before{
   content:"\2606";
 } */

</style>


<div class="wrapper d-flex p-2" style="position: relative; ">

    <div class=" dashboard active col-sm-12" >
            <div class="content-header home-advertisement">
                <div class="container-fluid">
                <div class="row mb-2" >
                    <div class="col-sm-12" >
                        <img class="w-100 " style="width:100%; height:125px; border-radius:10px;" src="<?php echo base_url() ?>/images/<?php echo $advertisement['image']?>" alt="">
                    </div>
                
                </div>
                </div>
            </div>
        
            <section class="content" id="view-all-hotels" >
            <?php if($hotels != '0'): ?>   
            <div class="container-fluid d-flex justify-content-center" >
            <div class="row" style=" width:99%; ">
                <!-- <div class="row text-center text-lg-left" > -->
                    <?php foreach($hotels as $hotel){ ?>
                    <div class="col-lg-3 col-md-3 col-6" style="border-radius: 10px;">
                    <div class="card" >
                    <img class="card-img-top img-fluid" style="height: 300px; "  alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"data-holder-rendered="true">
                            <div class="card-body" style="background: #1b3d49;">
                            <!-- <h5 class="card-title"><?php echo $hotel['hotel_id']; ?></h5></br> -->
                                <div class="card-text name"><h3 class="card-title"><strong><?php echo $hotel['name']; ?></strong></h3></div>
                                <div class="card-text email"><?php echo $hotel['email']; ?></div>
                                <div class="card-text address"><?php echo $hotel['address']; ?></div>
                                <br>
                                
                                <div class="d-flex">
                                    
                                <div class=" p-2  text-white">  <i class="fas fa-hotel"></i> <?php echo $hotel['rate']; ?> Start Hotel</div>
                                    <div class="ml-auto p-2  text-white">  <i class="fas fa-mobile"></i> <?php echo $hotel['phone']; ?></div>    
                            
                                      
                                </div>
                    
                            <br>
                            <div class="review-number ">
                                </div>
                                <div class="d-flex">
                                     <div class=" p-2  text-white"><a href="<?php echo base_url('hotel/book_now')?>/<?php echo $hotel['hotel_id']; ?>" class="btn btn-primary" id="book-now">Book Now</a></div>
                                    <div class="ml-auto p-2  text-white"> <button class="btn modal-btn book-now-btn" id="book-now-btn" data-bid="<?php echo $hotel['hotel_id']; ?>" data-toggle="modal" data-target="#modal-xl" >  <i class="fas fa-info-circle"data-bid="<?php echo $hotel['hotel_id']; ?>" ></i> </button></div>      
                                </div>
                            </div>
                            </div>
                    </div>
                    <?php }            
                    ?>  
                <!-- </div> -->
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
                      <h4 class="modal-title">Hotel Info</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>



                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators"></ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner"></div>
                        <!-- Controls -->
                            <!-- <a class="carousel-control-prev" href="#demo" role="button" id="carousel-control-prev"  data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                          </a>
                        <a class="carousel-control-next" href="#demo" role="button" id="carousel-control-next"  data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a> -->

                    

                      
                    </div>





                    <div class="modal-body review-modal">
                      <div class=" text-left text-lg-left">
                          <div class="col-lg-12 col-md-12 col-12" id="">   
                              <div>
                              <img class="card-img-top img-fluid" style="height: 400px; "  alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"
                              data-holder-rendered="true">
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
                    <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">Send</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                  </div>
                </div>
           </div>

                
    </section>

    </div>
                    </div>    
<script type="text/javascript">

bookNowBtns = document.querySelectorAll('.book-now-btn');
 
bookNowBtns.forEach((btn)=>{
        console.log(btn);
     btn.onclick = e =>{
        console.log(e);
       const id = e.target.dataset.bid;
       console.log(id);
       get_hotel(id);
    
     }
 });

 function get_hotel(id){ 
          let hotelId = id;
        
            // alert(hotelId);
            $.ajax({
                  url: "<?php echo base_url(); ?>hotel/get_hotel",    
                  type: "POST",
                  data: {
                  hotelId:hotelId
                  },
                  cache: false,
                  success: function(result){
                    let dataResult = JSON.parse(result);
                    hotel = ((dataResult.data)[0]);
                    hotel_image = ((dataResult.hotel_image_data));

                    
                    console.log(hotel);
                    console.log((hotel_image));

                    var result = Object.keys(hotel_image).map((key) => [Number(key), hotel_image[key]]);
                    console.log((typeof(result)));

                                        console.log(typeof(hotel_image));

                    

                    if(hotel['rate'] =='1'){
                       var rate = ` <ul class="rating">
                                      <li class="rating-item active" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul> `; 
                       
                      }else if (hotel['rate'] =='2'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item " data-rate="1"></li>
                                      <li class="rating-item active" data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (hotel['rate'] =='3'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item active" data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (hotel['rate'] =='4'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item active" data-rate="4"></li>
                                      <li class="rating-item" data-rate="5"></li>
                                      </ul>`; 
                      }
                      else if (hotel['rate'] =='5'){
                        var rate = ` <ul class="rating">
                                      <li class="rating-item" data-rate="1"></li>
                                      <li class="rating-item " data-rate="2"></li>
                                      <li class="rating-item " data-rate="3"></li>
                                      <li class="rating-item" data-rate="4"></li>
                                      <li class="rating-item active" data-rate="5"></li>
                                      </ul>`; 
                      }
                      reviewModal = document.querySelector('.review-modal');
                     
                      console.log(hotel_image.length);
                      console.log(hotel_image[0]);

              
                    $(document).ready(function(){
                              for(let j = 0; j <  hotel_image.length; j++) {
                                  $('<div class="carousel-item"><img src="<?php echo base_url(); ?>images/'+hotel_image[j]['image_name']+'" width="100%" "height= 300px"> </div>').appendTo('.carousel-inner');
                                  $('<li data-target="#carousel" data-slide-to="'+j+'">  </li>').appendTo('.carousel-indicators')

                              }

                              $('.carousel-item').first().addClass('active');
                              $('.carousel-indicators > li').first().addClass('active');
                              $('#carousel').carousel();

            //                   $('#carousel-control-next').on('click',(e)=>{ 
            //                     $('.carousel-indicators > li').first().addClass('active');
            //                   $('#carousel').carousel();
            // });

                              

                          });

                          
                  reviewModal = document.querySelector('.review-modal');
                          reviewModal.innerHTML = ` 
                          <div class=" text-left text-lg-left">
                          <div class="col-lg-12 col-md-12 col-12" id="">   
                              <div>
                             
                              
                              </div>
                              </div>                    
                              <div class="" id="">
                                  <div><h4>${hotel['name']}</h4></div>
                                  <div class="card-body">                            
                                            <div class="card-text center star-rating">
                                            ${rate}                                
                                            </div>
                                    
                                    
                                    
                                    </div>
                                <div class=" email">${hotel['email']}</div>
                                <div class=" address">${hotel['address']}</div>
                                <br>
                                
                                <div class="d-flex">
                                    
                                <div class=" p-2  text-black">  <i class="fas fa-hotel"></i> ${hotel['rate']} Start Hotel</div>
                                    <div class="ml-auto p-2  text-black">  <i class="fas fa-mobile"></i> ${hotel['phone']}</div>    
                            
                                      
                                </div>
                                        <div class="">

                                        <p>${hotel['description']}
                                        </p>
                                        </div>
                                </div>
                                
                        </div>
                        
                      
                      
                      
                        </div> 
                                    
                                          `;

                    
                  }
                });

          }
          

// function myFunction() {
//     document.getElementById("book-now").addEventListener("click", ()=>{
//         alert('here');
//     });
// }
// let submitButton = document.getElementById('book-now');
// submitButton.setAttribute('onclick',  'alert("hello");');
   
</script>
