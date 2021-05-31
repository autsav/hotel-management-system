    <style>

/* @import url("https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,700&display=swap"); */

/*
=============== 
Variables
===============
*/
/* Created By utsab Adhikari */
 
:root {
  --clr-grey-1: hsl(209, 61%, 16%);
  --clr-grey-2: hsl(211, 39%, 23%);
  --clr-grey-3: hsl(209, 34%, 30%);
  --clr-grey-4: hsl(209, 28%, 39%);
  /* grey used for paragraphs */
  --clr-grey-5: hsl(210, 22%, 49%);
  --clr-grey-6: hsl(209, 23%, 60%);
  --clr-grey-7: hsl(211, 27%, 70%);
  --clr-grey-8: hsl(210, 31%, 80%);
  --clr-grey-9: hsl(212, 33%, 89%);
  --clr-grey-10: hsl(210, 36%, 96%);
  --clr-white: #fff;
  --clr-red-dark: hsl(360, 67%, 44%);
  --clr-red-light: hsl(360, 71%, 66%);
  --clr-green-dark: hsl(125, 67%, 44%);
  --clr-green-light: hsl(125, 71%, 66%);
  --clr-black: #222;
  --ff-primary: "Roboto", sans-serif;
  --ff-secondary: "Open Sans", sans-serif;
  --transition: all 0.40s linear;
  --spacing: 0.25rem;
  --radius: 0.5rem;
  --light-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  --dark-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  --max-width: 1170px;
  --fixed-width: 620px;
}

@media screen and (min-width: 800px) {
  .modal-container h4{
    font-size: 1.15rem;
  }

}
@media screen and (min-width: 992px) {

}

/*
=============== 
Modal
===============
*/

.modal-overlay {
  position: absolute;
  top: 0.2rem;
  right: 0.2rem;
  width: 0vw;
  height: 0vh;
  background: rgba(73, 166, 233, 0.5);
  display: grid;
  /* place-items: center; */
  transition: width .35s ease-in-out;
  visibility: hidden;
  z-index: -10;
}
/* OPEN/CLOSE MODAL */
.open-modal {
  visibility: visible;
  z-index: 10;
}
.modal-container {
  font-family: var(--ff-secondary);
  color: var(--clr-white);
  box-shadow: 5px 10px 8px #888888;
  position: absolute;
  top: 0.2rem;
  right: 0.2rem;
  background: var(--clr-white);
  border-radius: var(--radius);
  transition: width .35s ease-in-out;
  width: 25vw;
  height: 13vh;
  max-width: var(--fixed-width);
  text-align: left;
  display: grid;
  place-items: left;
}
.modal-container h4{
  margin-left:1rem ;
 
  margin-top: 1rem;
  font-size: 1rem;
}
.modal-container p{
  font-size: 0.85rem;
  margin-left:1rem ;
  margin-top: -1.5rem;
}
.modal-container-error{
  /* color: #685f13; */
  background: #ffcc00;
}
.modal-container-info{
  /* color: #164a5a; */
  background: #2581d6;
}
.modal-container-success{
  /* color: #165c26; */
  background: #4BB543 ;

}
.modal-container-warning{
  /* color: #6b1a22; */
  background: #cc3300;

}
/* .modal-container h5{} */
.close-btn {
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 1rem;
  background: transparent;
  border-color: transparent;
  color: var(--clr-red-dark);
  cursor: pointer;
  /* transition: var(--transition); */
  border: 0;
}
.close-btn:hover {
  color: var(--clr-red-light);
  transform: scale(1.3);
  border: 0;
}




        .content{
    display: none;
  }
  .active{
    display: block;
  }
  .col-md-3{
    padding-bottom: 5px;
  }
  .all-body{
    margin: 2% 7% 5% 7%;
    background: #ebf0f73d;
    border-radius: 6px;
  }
  .allnext{
color: black;
background-color: #01d4ef;
width: 100px;
}
.allnext:hover{
color: black;
background-color: white;
}
.content-wrapper {
  background-color: #f4f6f900;
}
.btn-primary {
 
    border-color: #01d4ef;
}
.list-group-item {
 
    border: 1px solid rgb(255 255 255 / 13%);
}
.error{
  color:red;
}
.box{
   border: 1px solid #afb3b93d;
   padding:5px;
}
.float-right{
  padding-left: 10px;
}
 

    </style>

<div class="all-body" style="position: relative;">
   <div class=" dashboard active">  
     <section class="content active" id="hotel-info-form">    
     <form method="post" name="rfd-form" id="rfd-form" enctype="multipart/form-data">

       <div id="select-success">
                  </div>
              <div style="background-color: white; border-radius:10px;">
              <div class="select-transportation"style="padding: 14px;" >


                      <div class="wrapper col-lg-12 d-flex p-2 transportation" id="transportation">
                      <h5>Select Transportation</h5>
                      <?php foreach($hotel_info as $hotel){?>
                        <div class="form-check" style="margin-right:10px; margin-left:10px;">
                            <input class="form-check-input" type="radio" value="0" name="flexRadioDefault" id="flexRadioDefault3" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                            None
                            </label>
                          </div>
                        
                          <?php if($hotel['car']): ?>
                        <div class="form-check" style="margin-right:10px; margin-left:10px;">

                            <input class="form-check-input" type="radio" value="<?php print_r($hotel['car']); ?>" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">

                            <i class="fas fa-car"></i> Car (<?php print_r($hotel['car']); ?>)

                            </label>
                          </div>
                          <?php endif; ?>
                          <?php if($hotel['bus']): ?>

                          <div class="form-check" style="margin-right:10px; margin-left:10px;">
                            <input class="form-check-input" type="radio" value="<?php print_r($hotel['bus']); ?>" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">

                            <i class="fas fa-bus"></i> Bus (<?php print_r($hotel['bus']); ?>)
                            </label>
                          </div>
                          <?php endif;  ?>
                           <?php }?>
                             </div>

                      </div>

              <div class="select-rooms" style="padding: 14px;" >
                      <h5>Select Rooms</h5>
                          <div class="wrapper d-flex p-2" >
                            <div class=" dashboard active " >
                                <div class="row">
                                <?php foreach($rooms as $room){ ?>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input get_room" data-name="<?php echo $room['name']; ?>" data-id="<?php echo $room['room_id']; ?>" name="check_room[]" value="<?php echo $room['price']; ?>" id="room-sr<?php echo $room['room_id']; ?>a">
                                              
                                                <label class="custom-control-label" for="room-sr<?php echo $room['room_id']; ?>a">
                                                    <img src="<?php echo base_url(); ?>/images/<?php echo $room['image']; ?>" alt="#" class="img-fluid">
                                                </label>
                                                <div class="box">
                                                <label class="text-primary" for="room<?php echo $room['room_id']; ?>" style="word-break: break-word" ><?php echo $room['name']; ?></label> <br>
                                                <label for="room<?php echo $room['room_id']; ?>">Price: <?php echo $room['price']; ?></label> <br>
                                                <label for="room<?php echo $room['room_id']; ?>" style="word-break: break-word">Description: <?php echo $room['description']; ?></label> 

                                                </div>
                                               

                                            </div>
                                        </div>
                                  <?php }   ?>
                                </div>
                            </div>
                        </div>
                  </div>  
                                  <hr width="90%">
                <div class="select-foods"style="padding: 14px;" >
                 <h5>Select Foods</h5>
                    <div class="wrapper d-flex p-2" >
                        <div class=" dashboard active " >
                          <div class="row">
                                <?php foreach($foods as $food){ ?>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input get_food" data-name="<?php echo $food['name']; ?>" data-id="<?php echo $food['food_id']; ?>" name="check_food[]" value="<?php echo $food['price']; ?>" id="food-sr<?php echo $food['food_id']; ?>a">                                             
                                                <label class="custom-control-label" for="food-sr<?php echo $food['food_id']; ?>a">
                                                    <img src="<?php echo base_url(); ?>/images/<?php echo $food['image']; ?>" alt="#" class="img-fluid">
                                                </label>
                                                <div class="box">
                                                <label class="text-primary" for="food<?php echo $food['food_id']; ?>" style="word-break: break-word" ><?php echo $food['name']; ?></label> <br>
                                                <label for="food<?php echo $food['food_id']; ?>">Price: <?php echo $food['price']; ?></label> <br>
                                                <label for="food<?php echo $food['food_id']; ?>" style="word-break: break-word">Description: <?php echo $food['description']; ?></label> 

                                                </div>
                                               
                                            </div>
                                        </div>
                                  <?php }   ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr width="90%">
              <div class="select-destinations"style="padding: 14px;" >
                <h5>Select Destinations</h5>
                    <div class="wrapper col-lg-12 d-flex p-2" >

                              <div class=" dashboard active " >

                                  <div class="row">
                                      <?php foreach($destinations as $destination){ ?>
                                              <div class="col-lg-3">
                                                  <div class="custom-control custom-checkbox image-checkbox">
                                                      <input type="checkbox" class="custom-control-input get_destination" data-name="<?php echo $destination['name']; ?>"  data-id="<?php echo $destination['destination_id']; ?>" name="check_destination[]" value="<?php echo $destination['price']; ?>" id="destination-sr<?php echo $destination['destination_id']; ?>a">
                                                    
                                                      <label class="custom-control-label" for="destination-sr<?php echo $destination['destination_id']; ?>a">
                                                          <img src="<?php echo base_url(); ?>/images/<?php echo $destination['image']; ?>" alt="#" class="img-fluid">
                                                      </label>
                                                      <div class="box">
                                                      <label class="text-primary" for="destination<?php echo $destination['destination_id']; ?>" style="word-break: break-word"><?php echo $destination['name']; ?></label> <br>
                                                      <label for="destination<?php echo $destination['destination_id']; ?>">Price: <?php echo $destination['price']; ?></label> <br>
                                                      <label for="destination<?php echo $destination['destination_id']; ?>" style="word-break: break-word">Description: <?php echo $destination['description']; ?></label> 
                                                      </div>
                                                      
                                                  </div>
                                              </div>
                                              <?php }   ?>
                                  </div>
                                </div>
                      </div>
                </div>
               

          


              </div>

           
                
                <div class="" style="padding: 14px;">
                  <button type="button" id="room-food-destination" data-id="hotel-booking-details" class="allnext rmf_btn float-right btn btn-primary">Next &raquo</button>
              </div> 
              <div id="result"></div>


       </form>

                
        </section>
        

    <section class="content" id="hotel-booking-details">
          <div class="  " id="add-hotel-profile">
        
            <div class="col-md-12">
            <div class="card card-primary">
                    <div class="card-header" style="background: #01afd1;">
                      <h3 class="card-title">Order Your Hotel Booking Details</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  </div>
                    <form method="post" name="order-your-hotel-booking" id="order-your-hotel-booking" enctype="multipart/form-data">
                    
                      <div class="card-body">
                        <div class="form-group">
                          <label for="full_name">Full Name</label>
                          
                          <input type="text" class="form-control  form-control-border" value="<?php print_r($user['first_name']); ?> <?php print_r($user['last_name']); ?>" id="full_name" name="full_name" placeholder="Enter Your Full Name" required>
                        </div>
                        
                        <div class="form-group">
                              <label name="gender">Gender</label>
                              <?php if( ($user['gender']) == 'Male'): ?>
                              <select id="gender" class="form-control">
                                <option value="male" selected> Male</option>
                                <option value="female"> Female</option>
                             
                              </select>
                              <?php else: ?>
                                <select id="gender" class="form-control">
                                <option value="male" > Male</option>
                                <option value="female" selected> Female</option>
                             
                              </select>
                              <?php endif; ?>
                            </div>
                            <div class="form-group">
                          <label for="email_address">Email Address</label>
                          <input type="email" class="form-control  form-control-border" id="email_address" value="<?php print_r($user['email']); ?>" name="email_address" placeholder="Enter Email Address" required>
                        </div>
                        
                        <div class="form-group">
                          <label for="current_address">Current Address</label>
                          <input type="text" class="form-control  form-control-border" id="current_address" name="current_address" placeholder="Enter Current Address" required>
                        </div>
                        <!-- <div class="form-group"> -->
                          <!-- <label for="booking_date">Booking Date </label>
                          
                          <input type="text" class="form-control  form-control-border" id="booking_date" name="booking_date" placeholder="Enter Booking Date" required>
                         -->
                         <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input"  data-target="#reservationdate"id="booking_date" value="<?php print_r($user['created']); ?>"  name="booking_date" placeholder="Enter Booking Date" required/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                        <!-- </div> -->
                        <!-- <div class="form-group">
                          <label for="time">Time</label>
                          <input type="number" class="form-control  " id="time" name="time"   placeholder="Select time" required>
                        </div> -->

                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                              <label for="time">Time picker:</label>

                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="time" name="time"  data-target="#timepicker"/>
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                                </div>
                            </div>
                </div>
             
                      
                       <div class="form-group">
                          <label for="mobile_number">Mobile Number</label>
                          <input type="tel" class="form-control  " id="mobile_number" name="mobile_number" value="<?php print_r($user['phone']); ?>"  placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group" id="total_amount">
                          <label >Total Amount : </label>
                          <label >100</label> 
                        </div>
                      </div>
                  <div class="card-footer">
                      <button type="button" id="previous-to-hotel-info" data-id="hotel-info-form" class="allnext btn btn-primary"> Previous</button>

                        <button type="button" data-id="payment-amount-gateway"  id="submit-hotel-booking" class="allnext btn btn-primary ">Next</button>
                      </div>
                    </form>
                  </div>
            </div>
            </div>
      
  
      </section>
    
    <section class="content" id="payment-amount-gateway">
      <div class="container-fluid" id="payment-amount-gateway">
        <div class="row"">
          <div class="col-12" style="background: white; border-radius:5px">
            <div class="invoice paymentAmountNpaymentGateway p-3 mb-3" style="margin:3%" >

            <!-- <div class="row">
                  <div class="col-12">
                    <h4>
                      Select Payment Amount and Payment Gateway
                      <small class="float-right">Date: 2/10/2014</small>
                    </h4>
                  </div>        
              </div>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <div class="information-details">
                        <h3>Your Information Details</h3>
                        <ul class="list-group">
                            <li class="list-group-item">OwnerName: Kristh Shrestha</li>
                            <li class="list-group-item">Gender: Male</li>
                            <li class="list-group-item">Mobile Number: 9876562534</li>
                            <li class="list-group-item">Email: Kristh@gmail.com</li>
                            <li class="list-group-item">Appointment Date:11/09/2020</li>
                        </ul>
                    </div>
                    <div class="payment-amount">
                        <h6> Select Payment Amount</h6>
                        <input class="payment-amount" type="radio" name="payment-amount" id="payment-amount" checked>
                        <label class="payment-amount" for="payment-amount">
                        Nrs. 475
                    </label>
                    </div>

                    <div class="payment-gateway">
                        <h6>Select Payment Gateway</h6>
                        <input class="payment-gateway" type="radio" name="payment-gateway" id="payment-gateway" checked>
                        <label class="payment-gateway" for="payment-gateway">
                        Pay Through Khalti
                    </label>
                    </div>        
                </div>           
              </div> -->
          
              
            </div>
            <div class="row no-print">
                <div class="col-12" style="margin-bottom:16px ;">
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <button type="button" id="previous-to-hotel-booking" data-id="hotel-booking-details" class="allnext float-left btn btn-primary">&laquo; Previous</button>

                  <button type="button"data-id="confirm-payment-selection"  id="payment-amount-next" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
           
                </div>
              </div>        
          </div>
        </div>
      </div>
    </section>          
   

    <section class="content" id="confirm-payment-selection">
      <div class="container-fluid" id="confirm-payment-selection">
      

        <div class="card confirm-payment">
              <!-- <div class="card-header">
              <h5>Confirm Payment Selection</h5>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                  Payment Summary
                  
                  </thead>
                  <tbody>
                    <tr>
                      <td>Owner Fee Charge</td>
                      <td><span class="">NRs. 475</span></td>
                    </tr>
                    <tr>
                      <td>Currency</td>
                      
                      <td><span class="">NPR</span></td>
                    </tr>
                    <tr>
                      <td>Pay Through</td>
                      
                      <td><span class="">Khalti</span></td>
                    </tr>
                    <tr>
                      <td>Charge</td>
                    
                      <td><span class="">Nrs 0</span></td>
                    </tr>
                    <tr>
                      <td>Total</td>
                    
                      <td><span class="">NRs. 475</span></td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
            </div>
            <div class="row no-print">
                <div class="col-12">
                  <form id="terms-and-condition-form" action="
                  ">
                  <div class="form-check">
                    <input type="checkbox" id="terms-and-condition" name="terms_and_condition"  class="form-check-input" >
                    <label class="form-check-label" id="terms-and-condition" name="terms_and_condition" for="exampleCheck1">By clicking this, you are agreeing to the terms and conditions of Multi-Vendor Hotel System</label>
                </div>
              </form>
                
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <button type="button" id="previous-to-payment-amount" data-id="payment-amount-gateway" class="allnext float-left btn btn-primary">&laquo; Previous</button>

                  <button type="button"data-id="invoice-section"  id="proceed-to-pay" class="btn btn-primary float-right"> Proceed to Pay
                  </button>
           
                </div>
              </div>
    </section>


    <section class="content" id="invoice-section">

    <div class="modal-overlay">
      <div class="modal-container">
        <h4>Title</h4>
        <p>This is a body</p>
        <button class="close-btn"><i class="fas fa-times"></i></button>
      </div>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      


            <!-- Main content -->
            <div class="invoice p-3 mb-3 invoice-print" id="invoice-print">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Hotel Management Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <!-- <b>Order ID:</b> 4F3S8J<br> -->
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>SN</th>
                      <th>Room</th>
                      <th>Currency</th>
                      <th>Description</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort testosterone trophy driving gloves handsome</td>
                      <td>$64.50</td>
                    </tr>
                  
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <!-- <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                
                </div> -->
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Service charge:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
             
            </div>
             <div class="row no-print">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"> Print</a> -->
                  <button type="button" id="previous-to-confirm-payment-selection" data-id="confirm-payment-selection" class="allnext float-left btn btn-primary">&laquo; Previous</button>
                 
                  <a href="<?php echo base_url('users/customer_home/') ?>" class="btn btn-danger float-right" role="button" aria-disabled="true">Exit</a>

                 <!-- <button type="button" id="" onclick="" class="btn btn-danger float-right" style="padding-left:5px;"> 
                    
                    </button> -->
                
                 
                  <button type="button" id="print-invoice" class="btn btn-success float-right"> <i class="fas fa-print"></i>Print
                    Payment
                  </button>
                 
                  <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
              
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
    </div>
</div>

        <script type="text/javascript">
  
 


  /////////////////////////////////////////////DATE RANGE PICKER //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements€€
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })


  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         $(document).ready(function(){
            // $('#input_starttime').pickatime({});
            const contents = document.querySelectorAll(".content"); 
            const allNext = document.querySelectorAll(".allnext");
            const getRooms = document.querySelectorAll(".get_room");


          
              const transportCheck = document.getElementsByName("flexRadioDefault");

              for(let i = 0; i < transportCheck.length; i++) {
                      (function(index) {
                        transportCheck[index].addEventListener("click", function() {
                          if (document.getElementById('flexRadioDefault1').checked) {
                                          carFare = $('#flexRadioDefault1').val();
                                    }else{
                                      carFare = 0

                                    }
                                    if (document.getElementById('flexRadioDefault2').checked) {
                                          busFare = $('#flexRadioDefault2').val();

                                    }
                                    else{
                                      busFare = 0;
                                    }
                                    if (document.getElementById('flexRadioDefault3').checked) {
                                          noBusCar = $('#flexRadioDefault3').val();

                                    }
                                    else{
                                      noBusCar =0;
                                    }
                                    sessionStorage.setItem("carFare", carFare);
                                    sessionStorage.setItem("busFare", busFare);
                                    sessionStorage.setItem("noBusCar", noBusCar);

                                    console.log((carFare));
                                    console.log((busFare));
                                    console.log((noBusCar));
                                              })
                      })(i);
                    }

              // transportCheck.addEventListener('click', ()=>{
              //   console.log($('input[name="flexRadioDefault"]:checked').val());
              // });
              console.log(transportCheck);
             


             


 /////////////////////////////////////////////Room Food Destination//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              const  room = [];
              const room_name = [];
            const room_price = [];
            $(".get_room").on('click',(e)=>{      
              const getRoom = document.getElementById(e.target.id);
              if (getRoom.checked == true){
                // console.log(e.target.dataset.id);
                      room_name.push(e.target.dataset.name);
                      room.push(e.target.dataset.id);
                      // console.log(e.target.value);
                      room_price.push(e.target.value);
                    } 
                    else {
                      // console.log(e.target.value);
                      for( let i = 0; i < room.length; i++){ 
    
                              if ( room[i] === e.target.dataset.id ) { 

                                room.splice(i, 1); 
                                room_price.splice(i, 1); 
                              }

                          }


                      // room.pop(e.target.dataset.id);
                      // room_price.pop(e.target.value);

                    }
                   roomTotal = sum(room_price);
                 
                
                   rooms= (room.toString());

                   room_names = (room_name.toString());
                   console.log(room_names);
                   sessionStorage.setItem("room_names", room_names);

                   sessionStorage.setItem("room", rooms);
                   sessionStorage.setItem("roomTotal", roomTotal);
                  //  console.log(room);
                  //  console.log(room_price);

                  //  console.log((roomTotal));
                  
            });
              
            const  food = [];
            const food_price = [];
            const food_name = [];
           
            $(".get_food").on('click',(e)=>{      
              const getFood = document.getElementById(e.target.id);
              if (getFood.checked == true){
                      
                      food_name.push(e.target.dataset.name);
                      food.push(e.target.dataset.id);
                      food_price.push(e.target.value);
                    } 
                    else {
                      // console.log(e.target.dataset.id);

                      for( let i = 0; i < food.length; i++){ 
    
                    if ( food[i] === e.target.dataset.id ) { 

                      food.splice(i, 1); 
                      food_price.splice(i, 1); 
                    }

                }

                      // food.pop(e.target.dataset.id);
                      // food_price.pop(e.target.value);

                    }
                   foodTotal = sum(food_price);
                 
                   foods= (food.toString());

                   food_names = (food_name.toString());
                   sessionStorage.setItem("food_names", food_names);
                   console.log(food_names);

                   sessionStorage.setItem("food", foods);
                   sessionStorage.setItem("foodTotal", foodTotal);

                   console.log((foodTotal));

                  //   console.log(food);
      
            });

            const  destination_name = [];
            const  destination = [];
            const destination_price = [];
            $(".get_destination").on('click',(e)=>{      
              const getDestination = document.getElementById(e.target.id);
              
              if (getDestination.checked == true){

                      destination_name.push(e.target.dataset.name);
                      destination.push(e.target.dataset.id);
                      destination_price.push(e.target.value);
                    } 
                    else {

                      for( let i = 0; i < food.destination; i++){ 
                              
                              if ( destination[i] === e.target.dataset.id ) { 

                                destination.splice(i, 1); 
                                destination_price.splice(i, 1); 
                              }

                          }

                      // destination.pop(e.target.dataset.id);
                      // destination_price.pop(e.target.value);

                    }
                    destinationTotal = sum(destination_price);
                    destinations= (destination.toString());
                    destination_names = (destination_name.toString());
                    console.log(destination_names);
                    
                   sessionStorage.setItem("destination_names", destination_names);           
                   sessionStorage.setItem("destination", destinations);
                   sessionStorage.setItem("destinationTotal", destinationTotal);

             

              
            
                   console.log((sessionStorage.getItem("carFare")));
                     allTotal = [sessionStorage.getItem("roomTotal"),sessionStorage.getItem("foodTotal"),sessionStorage.getItem("destinationTotal"),sessionStorage.getItem("carFare"),sessionStorage.getItem("busFare"),sessionStorage.getItem("noBusCar")]
                            
                     console.log((allTotal));
                     sumTotal = sum(allTotal);
                     sessionStorage.setItem("sumTotal", sumTotal);
                

                   console.log(destinationTotal);
                       console.log(sumTotal);
      
            });

                            
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
      
///////////////////////////////////////////////////////////////////////Room, food, destination selected and clicked next ////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
            
      $("#rfd-form").validate({
                    rules:{
                      'check_room[]':{
                            required:true,
                                                     
                        },
                        'check_food[]':{
                            required:true,                           
                            
                        },
                        'check_destination[]':{
                            required:true,
                            
                        },
                    
                     
                    }, 
                    messages:{
                      'check_room[]':{
                            required:"Please check at least one of the room",
                            
                        },
                        'check_food[]':{
                            required:"Please check at least one of the food",
                            
                        },
                        'check_destination[]':{
                            required:"Please check at least one of the destination",
                            
                            
                        },
                    
                    },
                   
                    
                
                
                });
          

          
        
        $('#room-food-destination').on('click', (e)=>{
          if($("#rfd-form").valid()){
            const tamount = document.getElementById('total_amount');
                     tamount.innerHTML = ` <label for="total_amount">Total Amount : </label>
                          <label >${sessionStorage.getItem("sumTotal")}</label> `;         
                      click_next(e);

          }
           
            
            });

            $("#order-your-hotel-booking").validate({
                    rules:{
                      full_name:{
                            required:true,
                            minlength:5,
                            
                        },
                        gender:{
                            required:true,
                           
                            
                        },
                        email_address:{
                          required:true,
                          email:true,
                        },
                        current_address:{
                            required:true,
                            
                        },
                        booking_date:{
                            required:true,
                            
                            
                        },
                        time:{
                            required:true,
                            
                        },
                        mobile_number:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            number:true,
                            
                        },
                     
                     
                    }, 
                    messages:{
                      full_name:{
                            required:"Please Enter Your Full Name",
                            minlength:"Full name should me more than 5 character"
                            
                        },
                        gender:{
                            required:"Please select your gender",
                            
                            
                        },
                        email_address:{
                          required:"Please enter Email address",
                          email:"Please enter valid email address",
                        },
                        current_address:{
                            required:"Please Enter your current address",
                            
                            
                        },
                        booking_date:{
                            required:"Please select date",
                         
                            
                        },
                        time:{
                            required:"Please select time",
                            
                        },
                        mobile_number:{
                            required:"Please enter valid number",
                            minlength:"Number must not be less than 10",
                            maxlength:"Number must not be more than 10",
                            
                            
                        },
                      
                    },
                   
                    
                
                
                });




            $('#submit-hotel-booking').on('click',(e)=>{ 
              if($("#order-your-hotel-booking").valid()){
                save_booking(e);
                 click_next(e);
              }
            });
           


            function save_booking(e){
                            
                            let hotelId = <?php echo $hotel_id ?>; 
                            
                            let fullName = $('#full_name').val();
                            let gender = $('#gender').val();
                            let email = $('#email_address').val();
                            let currentAddress = $('#current_address').val();
                            let bookingDate = $('#booking_date').val();
                            let time = $('#time').val();
                            
                            let mobileNumber = $('#mobile_number').val(); 
                            if(document.getElementById('flexRadioDefault1').checked){
                              var  transportvalue = 'car';
                            }else if(document.getElementById('flexRadioDefault2').checked){
                              var  transportvalue = 'bus';

                            }else{
                              var  transportvalue = 'none';

                            }
                            // let totalAmount =  $('#total_amount').val(); 
                            // console.log('here');
                            // console.log(typeof(totalAmount));
                            let totalAmount = sessionStorage.getItem("sumTotal");
                            let foods= sessionStorage.getItem("food_names");
                            let rooms = sessionStorage.getItem("room_names");
                            let destinations = sessionStorage.getItem("destination_names");
                           



                            // alert(destinations);
                            // image = image.substring(image.lastIndexOf("\\") + 1, image.length);
                    
                            // let form = document.getElementsByName('hotel-info-form')[0]; 
                            // document.getElementById("hotel-info-form").reset();
                            if(fullName!="" && currentAddress!="" && bookingDate!="" && time!="" && mobileNumber!="" && totalAmount!="" && foods!="" && rooms!="" && destinations!=""){
                              $('#submit-hotel-booking').attr("disabled", "disabled");
                              $.ajax({
                                url:"<?php echo base_url(); ?>/booking/savedata",
                                type:"POST",
                                data:{
                                  type:1,
                                  hotelId:hotelId,
                                  fullName:fullName,
                                  gender:gender,
                                  email:email,
                                  transport:transportvalue,
                                  currentAddress:currentAddress,
                                  bookingDate:bookingDate,
                                  time:time,
                                  mobileNumber:mobileNumber,
                                  totalAmount:totalAmount,
                                  rooms:rooms,
                                  destinations:destinations,
                                  foods:foods

                                },
                                cache:false,
                                success: function(result){
                                  
                                  let dataResult = JSON.parse(result);
                                  if(dataResult.statusCode==200){
                                    $('#submit-hotel-booking').removeAttr("disabled");
                                    // $('#fupForm').find('input:text').val('');
                                    get_booking(e);
                                    $("#select-success").show();
                                    $('#select-success').html('Booking added successfully !'); 
                                    setTimeout( "$('#select-success').hide();", 2000);

                                    
                                  }
                                  else if(dataResult.statusCode==201){
                                      alert("Error occured !");
                                    }
                                }
                                
                              });

                            }        
                          }


                          function get_booking(e){
                              let hotelId = <?php echo $hotel_id ?>;
                            
                                // alert(hotelId);
                                $.ajax({
                                      url: "<?php echo base_url(); ?>/booking/getdata",    
                                      type: "POST",
                                      data: {
                                      hotelId:hotelId
                                      },
                                      cache: false,
                                      success: function(result){
                                        let dataResult = JSON.parse(result);
                                        book = ((dataResult.data)[0]);
                                        // console.log('fromhere')
                                      // console.log(book);
                                        showPaymentDetails(book);//Diplay another section with dynamic form data
                                        confirmPaymentSelection(book);
                                        invoiceSection(book);
                                      }
                                    });

                              }

                              function showPaymentDetails(booking){
                                        let today = new Date();
                                          let dd = String(today.getDate()).padStart(2, '0');
                                          let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                          let yyyy = today.getFullYear();

                                          today = mm + '/' + dd + '/' + yyyy;

                                      
                                        const paymentAmountNpaymentGateway = document.querySelector(".paymentAmountNpaymentGateway");
                                        paymentAmountNpaymentGateway.innerHTML = 
                                                `
                                  <div class="row" >
                                          <div class="col-12">
                                            <h4>
                                              Select Payment Amount and Payment Gateway
                                              <small class="float-right">${today}</small>
                                            </h4>
                                            <br>
                                          </div>        
                                        </div>
                                        <div class="row invoice-info">
                                          <div class="col-sm-4 invoice-col">
                                              <div class="information-details">
                                                  <h3>Your Information Details</h3>
                                                  <ul class="list-group">
                                                      <li class="list-group-item">OwnerName: ${booking['full_name']}</li>
                                                      <li class="list-group-item">Gender: ${booking['gender']}</li>
                                                      <li class="list-group-item">Mobile Number: ${booking['mobile']}</li>
                                                      <li class="list-group-item">Email: ${booking['email']}</li>
                                                      <li class="list-group-item">Appointment Date:${booking['booking_date']}</li>
                                                  </ul>
                                              </div>
                                              <div class="payment-amount">
                                                  <h6> Select Payment Amount</h6>
                                                  <input class="payment-amount" type="radio" name="payment-amount" id="payment-amount" checked>
                                                  <label class="payment-amount" for="payment-amount">
                                                  Nrs. ${booking['total_amount']}
                                              </label>
                                              </div>
                                              <div class="payment-gateway">
                                                  <h6>Select Payment Gateway</h6>
                                                  <input class="payment-gateway" type="radio" name="payment-gateway" id="payment-gateway" checked>
                                                  <label class="payment-gateway" for="payment-gateway">
                                                  Pay Through Khalti
                                              </label>
                                              </div>        
                                          </div>           
                                        </div>
                                    
                                  
                                      `;
                                }

                                function confirmPaymentSelection(booking)
                                    {
                                      let amount = booking['total_amount']
                                      let ownerFee = 10% amount;
                                      let currency = 'NPR';
                                      let payThrough = 'Khalti';
                                      let charge = 100;
                                      let total =  sum([ownerFee,charge,amount])
                                      const confirmPayment = document.querySelector('.confirm-payment');

                                      confirmPayment.innerHTML = `
                                      <div class="card-header" style="background:#01afd1">
                                      <h5>Confirm Payment Selection</h5>
                                      </div>
                                  
                                      <div class="card-body p-0">
                                        <table class="table table-striped">
                                          <thead >
                                        <strong> Payment Summary</strong>
                                          
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Owner Fee Charge</td>
                                              <td><span class="">NRs. ${ownerFee}</span></td>
                                            </tr>
                                            <tr>
                                              <td>Currency</td>
                                              
                                              <td><span class="">NPR</span></td>
                                            </tr>
                                            <tr>
                                              <td>Pay Through</td>
                                              
                                              <td><span class="">Khalti</span></td>
                                            </tr>
                                            <tr>
                                              <td>Charge</td>
                                            
                                              <td><span class="">Nrs ${charge}</span></td>
                                            </tr>
                                            <tr>
                                              <td>Total</td>
                                            
                                              <td><span class="">NRs. ${amount}</span></td>
                                            </tr>
                                            <tr>
                                              <td>Grand Total</td>
                                            
                                              <td><span class="">NRs. ${total}</span></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      `;

                                      

                                    

                                    }


                              function invoiceSection(booking){
                              
                              let today = new Date();
                                let dd = String(today.getDate()).padStart(2, '0');
                                let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                let yyyy = today.getFullYear();

                                today = mm + '/' + dd + '/' + yyyy;
                              <?php foreach($hotel_info as $hotel){?>
                                  let hotelName = "<?php print_r($hotel['name']); ?>";
                                  let hotelEmail = "<?php print_r($hotel['email']); ?>";
                                  let hotelAddress = "<?php print_r($hotel['address']); ?>";
                                  let hotelPhone = "<?php print_r($hotel['phone']); ?>";
                                  let hotelCar = "<?php print_r($hotel['car']); ?>";
                                  let hotelBus = "<?php print_r($hotel['bus']); ?>";

                                
                                <?php }?>
                                // console.log(hotelName);
                              let amount = booking['total_amount']
                              let ownerFee = 10% amount;
                              let currency = 'NPR';
                              let payThrough = 'Khalti';
                              let charge = 100;
                              let total =  sum([ownerFee,charge,amount])
                              const invoicePrint = document.querySelector('.invoice-print');
                         
                              // console.log(invoicePrint);
                              invoicePrint.innerHTML = `
                              
                              <!-- title row -->
                              <div class="row">
                                <div class="col-12">
                                  <h4>
                                    <i class="fas fa-globe"></i> Hotel Management Inc.
                                    <small class="float-right">Date: ${today}</small>
                                  </h4>
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- info row -->
                              <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                  From
                                  <address>
                                    <strong>${hotelName}.</strong><br>
                                    ${hotelAddress}.<br>
                                  
                                    Phone: ${hotelPhone}<br>
                                    Email: ${hotelEmail}
                                  </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                  To
                                  <address>
                                    <strong>${booking['full_name']}</strong><br>
                                    ${booking['current_address']}<br>
                                    
                                    Phone: ${booking['mobile']}<br>
                                    
                                  </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                  <b>Invoice #007${booking['booking_id']}</b><br>
                                  <br>
                                  <!-- <b>Order ID:</b> 4F3${booking['customer_id']}<br> -->
                                  <b>Payment Due:</b> ${today}<br>
                                
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->

                              <!-- Table row -->
                       
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->

                              <div class="row">
                                <!-- accepted payments column -->
                                <!-- <div class="col-6">
                                

                                
                                </div> -->
                                <!-- /.col -->
                                <div class="col-6">
                                  <p class="lead">Amount Due ${today}</p>

                                  <div class="table-responsive">
                                    <table class="table">
                                      <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>Nrs ${amount}</td>
                                      </tr>
                                      <tr>
                                        <th>Tax (10%)</th>
                                        <td>Nrs ${ownerFee}</td>
                                      </tr>
                                      <tr>
                                        <th>Service charge:</th>
                                        <td>Nrs ${charge}</td>
                                      </tr>
                                      <tr>
                                        <th>Total:</th>
                                        <td>Nrs ${total}</td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->

                              <!-- this row will not appear when printing -->
                              `;

                              

                            }
                                   // <div class="row">
                              //   <div class="col-12 table-responsive">
                              //     <table class="table table-striped">
                              //       <thead>
                              //       <tr>
                              //         <th>SN</th>
                              //         <th>Destination</th>
                              //         <th>Room</th>
                              //         <th>Food</th>
                              //         <th>Currency</th>
                              //         <th>Total</th>
                              //       </tr>
                              //       </thead>
                              //       <tbody>
                              //       <tr>
                              //         <td>1</td>
                              //         <td>${booking['destination_id']}</td>
                              //         <td>${booking['room_id']}</td>
                              //         <td>${booking['food_id']}</td>
                              //         <td>NRS</td>
                              //         <td>Nrs ${amount}</td>
                              //       </tr>
                                  
                              //       </tbody>
                              //     </table>
                              //   </div>

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
                         
/////////////////////////////////////Order Your Hotel Booking Details form is filled and clicked next//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

            $('#payment-amount-next').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

              $("#terms-and-condition-form").validate({
                rules:{
                  terms_and_condition:{
                      required:true,
                  },
                  messages:{
                    terms_and_condition:{
                      required:"Please check to accept the terms and condtion",
                  },
                    
                  }
                }

              });
            $('#proceed-to-pay').on('click',(e)=>{
              if($("#terms-and-condition-form").valid()){
            
                click_next(e);
                customAlert();
              }
            });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

            $('#print-invoice').on('click',(e)=>{
              // customAlert();

                 // function printSection(el){
                  let getFullContent = document.body.innerHTML;
                let printsection = document.getElementById('invoice-print').innerHTML;
                document.body.innerHTML = printsection;
                window.print();
                document.body.innerHTML = getFullContent;
                customAlert();
                // window.location.replace("http://localhost/hm/users/customer_home/");
            // }
             
            // click_next(e);
                   });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

/////////////////////////////////////////////////////////////////Function to add array of element/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
  
                                function sum(input){
                                
                                if (toString.call(input) !== "[object Array]")
                                    return false;
                                      
                                  var total =  0;
                                  for(var i=0;i<input.length;i++)
                                    {                  
                                      if(isNaN(input[i])){
                                      continue;
                                        }
                                        total += Number(input[i]);
                                      }
                                    return total;
                                  }

                          
////////////////////////////////////////////// Function to change the section when we click next////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
          ////////////////////////////////All Prev Button/////////////////////////////////////////////////////////
          $('#previous-to-hotel-info').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
            $('#previous-to-payment-amount').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
            $('#previous-to-hotel-booking').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
            $('#previous-to-confirm-payment-selection').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
             
            
          /////////////////////////////////////////////////////////////////////////////////////////////////////////

                    function click_next(e){
                                const id = e.target.dataset.id;
                            // console.log(id);
                            

                      
                            contents.forEach( (content)=>{
                          content.classList.remove("active");
                        });
                        const element = document.getElementById(id);
                            // console.log(element);
                      
                        element.classList.add("active");

                            }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    



 });

 //pop up




        </script>
        <script>
                  
                 
        function  customAlert(){

            const modalOverlay = document.querySelector(".modal-overlay");
            const modalContainer = document.querySelector(".modal-container");
            siliconAlert("success","Hotel Booked SuccessFully",".",100000000000000);

                function siliconAlert(type, body, title, time){
                  //replace the div with its data
                  modalOverlay.innerHTML =`
                                <div class="modal-container">
                                <h4>${title}</h4>
                                <p>${body}</p>
                                <button class="close-btn"><i class="fas fa-times"></i></button>
                              </div>
                                `;
                      popUpBody(type);// pop up div         
                      setTime(time);//Dissaper popup
                      closeButton();// Remove popUp manually
                }
              
                  function popUpBody( type){
                    const modalContainer = document.querySelector(".modal-container");
                    modalOverlay.classList.add("open-modal");
                    modalContainer.classList.add(`modal-container-${type}`);
                  
              }
              function setTime(time){
                setTimeout(function(){
                  // modalOverlay.textContent = "";
                  modalOverlay.classList.remove("open-modal");
              }, time);
              }
              function closeButton(){
                const closeBtn = document.querySelector(".close-btn");
                
                closeBtn.addEventListener("click", function(){
                    modalOverlay.classList.remove("open-modal");
                }); 
              }

                function popUpColor(type){
                  modalContainer.classList.add(`modal-container-${type}`);
                }

                 } 


                 $(document).on('click', '#hotel-booked-success', function(){
                  window.location.replace("http://localhost/hm/users/customer_home/");

                 });

               



  
        


        </script> 