
<style>
    .wrapper{
        background: #FCFCFC;
    }
    .card-text{
        color: white;
    }
</style>


<div class="wrapper d-flex p-2" style="position: relative; ">

    <div class=" dashboard active " >
            <div class="content-header home-advertisement">
                <div class="container-fluid">
                <div class="row mb-2" >
                    <div class="col-sm-12" >
                        <img class="w-100 " style="width:50%; height:125px; border-radius:10px;" src="<?php echo base_url('images/advertise.jpg') ?>" alt="">
                    </div>
                
                </div>
                </div>
            </div>
        
            <section class="content" id="view-all-hotels" >
            <div class="container-fluid d-flex justify-content-center" >
            <div class="row" style=" width:99%">
                <div class="row text-center text-lg-left">
                    <?php foreach($hotels as $hotel){ ?>
                    <div class="col-lg-3 col-md-4 col-6" style="border-radius: 5px;">
                    <div class="card" >
                    <img class="card-img-top img-fluid" style="height: 300px;"  alt="100x100" src="<?php echo base_url(); ?>/images/<?php echo $hotel['image']; ?>"
                            data-holder-rendered="true">
                            <div class="card-body" style="background: #1b3d49;">
                            <!-- <h5 class="card-title"><?php echo $hotel['hotel_id']; ?></h5></br> -->
                                <div class="card-text name"><h3 class="card-title"><strong><?php echo $hotel['name']; ?></strong></h3></div>
                                <div class="card-text email"><a href=""><?php echo $hotel['email']; ?></a></div>
                                <div class="card-text address"><?php echo $hotel['address']; ?></div>
                                <br>
                                <div class="review-number card-text">
                                <div class="d-inline p-1  text-black">  <i class="fas fa-hotel"></i> <?php echo $hotel['rate']; ?> Start Hotel</div>
                                <div class="d-inline p-1  text-black">  <i class="fas fa-mobile"></i> <?php echo $hotel['phone']; ?></div>    
                                </div>
                    
                            <br>
                          

                            <!-- <button type="submit" id="book-now" class="btn btn-primary">Book Now</button> -->
                                <a href="<?php echo base_url('hotel/book_now')?>/<?php echo $hotel['hotel_id']; ?>" class="btn btn-primary" id="book-now">Book Now</a>
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
<script type="text/javascript">
// function myFunction() {
//     document.getElementById("book-now").addEventListener("click", ()=>{
//         alert('here');
//     });
// }
// let submitButton = document.getElementById('book-now');
// submitButton.setAttribute('onclick',  'alert("hello");');
   
</script>
