<div class="col-lg-6 col-md-4 col-6">
                      <div class="card" >
                      <img class="card-img-top"   alt="100x100" src="<?php echo base_url(); ?>/images/${booking['image']}"
                              data-holder-rendered="true">
                              <div class="card-body">
                              <div class="d-flex">
                                    <div class="p-2 font-weight-bold">Booked By</div>
                                    <div class="ml-auto p-2 font-weight-bold">NRs.${booking['total_amount']} </div>
                              </div>
                                
                                <div class="card-text"><i class="fas fa-hotel"></i> ${booking['full_name']}</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> ${booking['mobile']}</div>
                                <div class="card-text"><i class="fas fa-hotel"></i> ${booking['current_address']}</div>
                               
                                <div class="review-number">
                                  <div class="d-inline p-1  "><i class="fas fa-hotel"></i>${booking['food_id']}</div>
                                  <div class="d-inline p-1  "><i class="fas fa-mobile"></i> ${booking['room_id']} </div>  
                                  <div class="d-inline p-1  "><i class="fas fa-mobile"></i>${booking['destination_id']} </div>    
                                </div> 
                                <br>
                             
                                    <div id="">
                                    <button onclick="" name="cid" class="btn btn-success"  data-cid="1">Booking Completed</button>
                                    </div>
    
                                    <div id="">                
                                    <button onclick="" name="pid" class="btn btn-danger"  data-cid="0">Booking Pending</button>
                                    </div>
                                  
                              </tr>

                              </div>
                            </div>
</div>