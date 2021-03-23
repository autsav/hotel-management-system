    <style>
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


    </style>

<div class="all-body" style="position: relative;">
   <div class=" dashboard active">  
     <section class="content active" id="hotel-info-form">    

                  <div id="select-success">
                  </div>

                  <div class="select-rooms">
                      <h5>Select Rooms</h5>
                          <div class="wrapper d-flex p-2" >
                            <div class=" dashboard active " >
                                <div class="row">
                                <?php foreach($rooms as $room){ ?>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input get_room" data-id="room-<?php echo $room['room_id']; ?>" name="check[]" value="<?php echo $room['price']; ?>" id="room-sr<?php echo $room['room_id']; ?>a">
                                              
                                                <label class="custom-control-label" for="room-sr<?php echo $room['room_id']; ?>a">
                                                    <img src="<?php echo base_url(); ?>/images/<?php echo $room['image']; ?>" alt="#" class="img-fluid">
                                                </label>
                                                <label for="room<?php echo $room['room_id']; ?>"><?php echo $room['price']; ?></label> 
                                            </div>
                                        </div>
                                  <?php }   ?>
                                </div>
                            </div>
                        </div>
                  </div>  
       
                <div class="select-foods">
                 <h5>Select Foods</h5>
                    <div class="wrapper d-flex p-2" >
                        <div class=" dashboard active " >
                          <div class="row">
                                <?php foreach($foods as $food){ ?>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input get_food" data-id="food-<?php echo $food['food_id']; ?>" name="check[]" value="<?php echo $food['price']; ?>" id="food-sr<?php echo $food['food_id']; ?>a">                                             
                                                <label class="custom-control-label" for="food-sr<?php echo $food['food_id']; ?>a">
                                                    <img src="<?php echo base_url(); ?>/images/<?php echo $food['image']; ?>" alt="#" class="img-fluid">
                                                </label>
                                                <label for="food<?php echo $food['food_id']; ?>"><?php echo $food['price']; ?></label> 
                                            </div>
                                        </div>
                                  <?php }   ?>
                            </div>
                        </div>
                    </div>
                </div>
                
              <div class="select-destinations">
                <h5>Select Destinations</h5>
                    <div class="wrapper d-flex p-2" >

                              <div class=" dashboard active " >

                                  <div class="row">
                                      <?php foreach($destinations as $destination){ ?>
                                              <div class="col-md-3">
                                                  <div class="custom-control custom-checkbox image-checkbox">
                                                      <input type="checkbox" class="custom-control-input get_destination" data-id="destination-<?php echo $destination['destination_id']; ?>" name="check[]" value="<?php echo $destination['price']; ?>" id="destination-sr<?php echo $destination['destination_id']; ?>a">
                                                    
                                                      <label class="custom-control-label" for="destination-sr<?php echo $destination['destination_id']; ?>a">
                                                          <img src="<?php echo base_url(); ?>/images/<?php echo $destination['image']; ?>" alt="#" class="img-fluid">
                                                      </label>
                                                      <label for="food<?php echo $destination['destination_id']; ?>"><?php echo $destination['price']; ?></label> 
                                                  </div>
                                              </div>
                                              <?php }   ?>
                                  </div>
                                </div>
                      </div>
                </div>
                
                <div class="">
                  <button type="button" id="room-food-destination" data-id="hotel-booking-details" class="allnext rmf_btn float-right btn btn-primary">Next &raquo</button>
              </div> 
              <div id="result"></div>
        </section>
        

    <section class="content" id="hotel-booking-details">
          <div class=" content-wrapper " id="add-hotel-profile">
        
            <div class="col-md-9">
            <div class="card card-primary">
                    <div class="card-header" style="background: #01afd1;">
                      <h3 class="card-title">Order Your Hotel Booking Details</h3>
                    </div>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  </div>
                    <form method="post" name="hotel-info-form" id="hotel-info-form" enctype="multipart/form-data">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="full_name">Full Name</label>
                          <input type="text" class="form-control  form-control-border" id="full_name" name="full_name" placeholder="Enter Your Full Name" required>
                        </div>
                        
                        <div class="form-group">
                              <label name="gender">Gender</label>
                              <select id="gender" class="form-control">
                                <option value="male" > Male</option>
                                <option value="female"> Female</option>
                             
                              </select>
                            </div>
                        
                        <div class="form-group">
                          <label for="current_address">Current Address</label>
                          <input type="text" class="form-control  form-control-border" id="current_address" name="current_address" placeholder="Enter Current Address" required>
                        </div>
                        <div class="form-group">
                          <label for="booking_date">Booking Date </label>
                          <input type="text" class="form-control  form-control-border" id="booking_date" name="booking_date" placeholder="Enter Booking Date" required>
                        </div>
                        <div class="form-group">
                          <label for="time">Time</label>
                          <input type="number" class="form-control  " id="time" name="time"   placeholder="Select time" required>
                        </div>
                       <div class="form-group">
                          <label for="mobile_number">Mobile Number</label>
                          <input type="tel" class="form-control  " id="mobile_number" name="mobile_number"   placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group" id="total_amount">
                          <label >Total Amount : </label>
                          <label >100</label> 
                        </div>
                      </div>
                  <div class="card-footer">
                      <!-- <button type="button" id="previous-to-hotel-info" data-id="hotel-info-form" class="allnext btn btn-primary">&laquo; Previous</button> -->

                        <button type="button" data-id="payment-amount-gateway"  id="submit-hotel-booking" class="allnext btn btn-primary">Next</button>
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
                        Pay Through Esewa
                    </label>
                    </div>        
                </div>           
              </div> -->
          
              
            </div>
            <div class="row no-print">
                <div class="col-12" style="margin-bottom:16px ;">
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <!-- <button type="button" id="previous-to-hotel-booking" data-id="hotel-booking-details" class="allnext float-left btn btn-primary">&laquo; Previous</button> -->

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
                      
                      <td><span class="">Esewa</span></td>
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
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreement">
                    <label class="form-check-label" for="exampleCheck1">By clicking this, you are agreeing to the terms and conditions of Multi-Vendor Hotel System</label>
                </div>
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <!-- <button type="button" id="previous-to-payment-amount" data-id="payment-amount-gateway" class="allnext float-left btn btn-primary">&laquo; Previous</button> -->

                  <button type="button"data-id="invoice-section"  id="proceed-to-pay" class="btn btn-primary float-right"> Proceed to Pay
                  </button>
           
                </div>
              </div>
    </section>


    <section class="content" id="invoice-section">
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
         $(document).ready(function(){
            // $('#input_starttime').pickatime({});
            const contents = document.querySelectorAll(".content"); 
            const allNext = document.querySelectorAll(".allnext");
            const getRooms = document.querySelector(".get_room");

 /////////////////////////////////////////////Room Food Destination//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                             const  room = [];
            const room_price = [];
            $(".get_room").on('click',(e)=>{      
              const getRoom = document.getElementById(e.target.id);
              if (getRoom.checked == true){
                      room.push(e.target.dataset.id);
                      room_price.push(e.target.value);
                    } 
                    else {
                      room.pop(e.target.dataset.id);
                      room_price.pop(e.target.value);

                    }
                   roomTotal = sum(room_price);
              
                   rooms= (room.toString());
                   sessionStorage.setItem("room", rooms);
                   sessionStorage.setItem("roomTotal", roomTotal);

                  //  console.log((roomTotal));
                  
            });
              
            const  food = [];
            const food_price = [];
           
            $(".get_food").on('click',(e)=>{      
              const getFood = document.getElementById(e.target.id);
              if (getFood.checked == true){
                      food.push(e.target.dataset.id);
                      food_price.push(e.target.value);
                    } 
                    else {
                      food.pop(e.target.dataset.id);
                      food_price.pop(e.target.value);

                    }
                   foodTotal = sum(food_price);
                 
                   foods= (food.toString());
                   sessionStorage.setItem("food", foods);
                   sessionStorage.setItem("foodTotal", foodTotal);

                  //  console.log((foodTotal));

                  //   console.log(food);
      
            });

            const  destination = [];
            const destination_price = [];
            $(".get_destination").on('click',(e)=>{      
              const getDestination = document.getElementById(e.target.id);
              if (getDestination.checked == true){
                      destination.push(e.target.dataset.id);
                      destination_price.push(e.target.value);
                    } 
                    else {
                      destination.pop(e.target.dataset.id);
                      destination_price.pop(e.target.value);

                    }
                    destinationTotal = sum(destination_price);
                    destinations= (destination.toString());
                   sessionStorage.setItem("destination", destinations);
                   sessionStorage.setItem("destinationTotal", destinationTotal);

                  //  console.log((foodTotal));
                     allTotal = [sessionStorage.getItem("roomTotal"),sessionStorage.getItem("foodTotal"),sessionStorage.getItem("destinationTotal")]
                     console.log((allTotal));
                     sumTotal = sum(allTotal);
                     sessionStorage.setItem("sumTotal", sumTotal);
                    console.log(sumTotal);

                  //  console.log(destinationTotal);
      
            });

                            
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
      
///////////////////////////////////////////////////////////////////////Room, food, destination selected and clicked next ////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

            $('#room-food-destination').on('click', (e)=>{
           
              const tamount = document.getElementById('total_amount');
                     tamount.innerHTML = ` <label for="total_amount">Total Amount : </label>
                          <label >${sessionStorage.getItem("sumTotal")}</label> `;         
                      click_next(e);
            });

            $('#submit-hotel-booking').on('click',(e)=>{ 
                save_booking(e);
                 click_next(e);
            });


            function save_booking(e){
                            
                            let hotelId = <?php echo $hotel_id ?>;
                            
                            let fullName = $('#full_name').val();
                            let gender = $('#gender').val();
                            let currentAddress = $('#current_address').val();
                            let bookingDate = $('#booking_date').val();
                            let time = $('#time').val();
                            let mobileNumber = $('#mobile_number').val(); 
                            // let totalAmount =  $('#total_amount').val(); 
                            // console.log('here');
                            // console.log(typeof(totalAmount));
                            let totalAmount = sessionStorage.getItem("sumTotal");
                            let foods= sessionStorage.getItem("food");
                            let rooms = sessionStorage.getItem("room");
                            let destinations = sessionStorage.getItem("destination");
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
                                    $('#select-success').html('Data added successfully !'); 
                                    
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
                                        console.log('fromhere')
                                      console.log(book);
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
                                                      <li class="list-group-item">Email: Kristh@gmail.com</li>
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
                                                  Pay Through Esewa
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
                                      let payThrough = 'Esewa';
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
                                              
                                              <td><span class="">Esewa</span></td>
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
                            
                              let amount = booking['total_amount']
                              let ownerFee = 10% amount;
                              let currency = 'NPR';
                              let payThrough = 'Esewa';
                              let charge = 100;
                              let total =  sum([ownerFee,charge,amount])
                              const invoicePrint = document.querySelector('.invoice-print');
                              console.log(invoicePrint);
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
                                    <strong>Admin, Inc.</strong><br>
                                    Kathmandu , Nepal<br>
                                  
                                    Phone: (804) 123-5432<br>
                                    Email: admin@admin.com
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
                              <div class="row">
                                <div class="col-12 table-responsive">
                                  <table class="table table-striped">
                                    <thead>
                                    <tr>
                                      <th>SN</th>
                                      <th>Destination</th>
                                      <th>Room</th>
                                      <th>Food</th>
                                      <th>Currency</th>
                                      <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>${booking['destination_id']}</td>
                                      <td>${booking['room_id']}</td>
                                      <td>${booking['food_id']}</td>
                                      <td>NRS</td>
                                      <td>Nrs ${amount}</td>
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
                         
/////////////////////////////////////Order Your Hotel Booking Details form is filled and clicked next//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

            $('#payment-amount-next').on('click',(e)=>{
                // confirm_payment_section(e);
                click_next(e);
            });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    
            
            $('#proceed-to-pay').on('click',(e)=>{
            
                click_next(e);
            });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

            $('#print-invoice').on('click',(e)=>{
                 // function printSection(el){
                  let getFullContent = document.body.innerHTML;
                let printsection = document.getElementById('invoice-print').innerHTML;
                document.body.innerHTML = printsection;
                window.print();
                document.body.innerHTML = getFullContent;
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
          

                    function click_next(e){
                                const id = e.target.dataset.id;
                            console.log(id);
                            

                      
                            contents.forEach( (content)=>{
                          content.classList.remove("active");
                        });
                        const element = document.getElementById(id);
                            console.log(element);
                      
                        element.classList.add("active");

                            }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                    

 });


        </script>