<div class="page-header">
        <h1 class="page-title">Users</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Users</a></li>
        </ol>
        <div class="page-header-actions">
            
            <a href="javascript::void(0)" id="create-user-button" class="btn btn-sm btn-primary btn-outline btn-round"  title="create">
                <i class="icon wb-plus" aria-hidden="true"></i>
                <span class="hidden-sm-down">Create</span>
            </a>

        </div>
    </div>
    <!-- Main content -->
    <div class="panel">
        <header class="panel-heading">
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table style="width: 100% !important" id="user-datatable" class="table table-hover dataTable table-striped">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th >Full Name</th>
                            <th >Username</th>
                            <th >Email</th>
                            <th >Is Banned</th>
                            <th >Last Login</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>

                </table>
            </div>
                    <!-- /.box-body -->
        </div>
                <!-- /.box -->
    </div>

    <div id="user-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add/Edit Users</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('', array('id' =>'form-users', 'onsubmit' => 'return false')); ?>
                        <input type = "hidden" name = "id" id = "id"/>
                        <div class='form-group'>
                            <label for='email'><?php echo lang('email')?></label>
                            <input id='email' class='form-control' name='email' >
                        </div>
                        <div class='form-group'>
                            <label for='username'><?php echo lang('username')?></label>
                            <input id='username' class='form-control' name='username' >
                        </div>
                        <div class='form-group'>
                            <label for='password'><?php echo lang('password')?></label>
                            <input id='password' type="password" class='form-control' name='password' >
                        </div>
                        <div class='form-group'>
                            <label for='fullname'><?php echo lang('fullname')?></label>
                            <input id='fullname' class='form-control' name='fullname' >
                        </div>
                        <?php if (count($groups) > 0) : ?>
                            <div class='form-group'>
                                <label for='groups'><?php echo lang('groups')?></label>
                                <?php foreach($groups as $group): ?>
                                    <input type="radio" name="groups[]" id="group_<?php echo $group->id;?>" value="<?php echo $group->id;?>">  <label for="group_<?php echo $group->id;?>"><?php echo $group->name;?></label> <br />
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php echo form_close(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-green waves-effect"><?php echo lang('general_save'); ?></button>           
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('general_cancel'); ?></button>
                </div>
              
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on('click','#create-user-button', function () { 

         
            $('#user-modal').modal('show');

                $("#form-users").validate(
            { // initialize the plugin
                rules: {
                   
                    email: {
                        required: true,
                        email: true
                    },
                    username:{
                        required:true
                    },
                      password:{
                        required:true
                    },
                        fullname:{
                        required:true
                    }

                },
                messages: {
                  
                    email: {
                        required:"Please enter email address",
                        email: "Please enter valid email address"
                    },
                    username:{
                        required:"Please Enter Username"
                    },
                     password:{
                        required:"Please Enter password"
                    },
                      fullname:{
                        required:"Please Enter Your fullname"
                    }

                },
                    submitHandler: function (form) {

                save();
                }
               

           
            });
         


        });

        var dataTable; 
        $(function(){
            dataTable = $('#user-datatable').DataTable({
                dom: 'Bfrtip',
                // scrollX: true,
                "serverSide": true,
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                'ajax' : { url: "<?php  echo site_url('admin/Users/json'); ?>",type: 'POST' },
                    columns: [
                        { data: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },name: "sn", searchable: false },
                        { data: "fullname",name: "fullname"},
                        { data: "username",name: "username"},
                        { data: "email",name: "email"},
                        { data: function (data, type, row, meta) {
                            a = '';
                            if(data.banned == 0){
                                a = '<input type="checkbox"  disabled>';
                            }else{
                                a = '<input type="checkbox" checked disabled>';
                            }
                            return a;
                        },name: "banned", searchable: false },
                        { data: "ip_address",name: "ip_address"},
                        
                        { data: function(data,b,c,table) { 
                            var buttons = '';
                            if(data.id == 1 || data.id == 2){

                            }else{
                                buttons += "<a href='javascript::void(0)' data-toggle='modal' data-target='#user-modal' class='btn btn-sm btn-success btn-outline'  title='Edit' onclick='edit("+table.row+")'><i class='icon wb-pencil' aria-hidden='true'></i></a>&nbsp;&nbsp"; 

                                buttons += "<a onclick='removedemo("+data.id+")' href='javascript::void(0)' class='btn btn-sm btn-danger btn-outline'  title='Delete' ><i class='icon wb-trash' aria-hidden='true'></i></a>&nbsp;&nbsp";
                                
                                buttons += "<a target='_blank' href='<?php echo site_url('admin/Users/setPermission') ?>?user_id="+data.id+"'  class='btn btn-sm btn-warning btn-outline'  title='Assign User Permission' ><i class=' icon wb-link-intact' aria-hidden='true'></i></a>&nbsp;&nbsp";
                                // buttons += "<a target='_blank' href='<?php echo site_url('admin/Users/setPermission') ?>?user_id="+data.id+"'  class='btn btn-sm btn-warning btn-outline'  title='Assign User Permission' ><i class='icon wb-unlock' aria-hidden='true'></i></a>";

                                if (data.banned == true) {
                                    buttons += '<a href="javascript:void(0)" onclick="toggleUser(' + table.row + ', \'UNLOCK\'); return false;" title="Unban/Unlock User" class="btn btn-sm btn-default btn-outline"><i class="icon wb-unlock"></i></a>&nbsp;&nbsp';
                                } else {
                                     buttons += '<a href="javascript:void(0)" onclick="toggleUser(' + table.row + ',  \'LOCK\'); return false;" title="Ban/Lock User" class="btn btn-sm btn-default btn-outline"><i class="icon wb-lock"></i></a>&nbsp;&nbsp';
                                }

                                // if (data.login_attempts >= 4) {
                                //      resetLogin = '<a href="javascript:void(0)" onclick="resetLoginAttempts(' + table.row + '); return false;" title="Reset Login Attemps" class="btn btn-sm btn-default btn-outline"><i class="icon wb-loop"></i></a>';
                                //  }
                                                    
                            }


                            return buttons;
                        }, name:'action',searchable: false},    
                    ],
                });
        });

        function edit(index){
            var row = dataTable.row(index).data();

            $('#id').val(row.id);
            $("#form-users").find('input:checkbox').prop('checked',false);
            $("#form-users").find('input:text,select,textarea').val(function(i,v){

                /*if(row.gender == 'M')
                {
                    $('input:radio[name=gender][id=radio_1]').prop('checked',true);
                }else{
                    $('input:radio[name=gender][id=radio_2]').prop('checked',true);
                }*/
                return row[this.name];
            });
            // $('select').selectpicker('render');

            $.post('<?php echo site_url('admin/Users/get_user_permission') ?>',{user_id:row.id},function (data) {
                $.each(data.data,function (k,val) {
                    $('#group_'+val.group_id).prop('checked',true);
                });
            },'json');
        }


        function save()
        {
            $.ajax({
                url: "<?php   echo site_url('admin/Users/save')?>",
                data: $('#form-users').serialize(),
                dataType: 'json',
                success: function(result){
                    if(result.success)
                    {
                        $('#user-modal').modal('hide');
                        $('#form-users')[0].reset();
                        dataTable.ajax.reload( null, false );
                    }
                },
                type: 'POST'
            });
        }

        function toggleUser(index, toggle) {

            if( confirm("Are you sure to " + toggle + " this user ?") == true) {
                var row = dataTable.row(index).data();
                // var row =  $("#jqxGridUser").jqxGrid('getrowdata', index);

                if (row) {
                    $.ajax({
                       url: "<?php echo site_url('admin/Users/toggle_user'); ?>",
                       type: 'POST',
                       data: {id: row.id, toggle: toggle },
                        success: function (result) {
                            var result = eval('('+result+')');
                            if (result.success) {
                                dataTable.ajax.reload( null, false );

                            }
                        },
                        error: function(result) {
                            return commit(false);
                        }
                    });
               }
           }
        }

    function removedemo(index)
    {
            $.post("<?php   echo site_url('admin/Users/delete_json')?>", {id:index}, function(){
                dataTable.ajax.reload( null, false );
                alertify.success('Deleted Succcessfully!')
            });
        
    }


    </script>



<div class=" content-wrapper " id="add-hotel-profile">
      <div class="col-md-9">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hotel Information Details</h3>
              </div>
            
              <form>
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
                    <input type="tel" class="form-control  " id="phone_number" name="phone_number"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="phone_number">Image</label>
                    <input type="file" class="form-control  " id="phone_number" name="phone_number"  accept="image/*" placeholder="image">
                  </div>
                  
                  <div class="form-group">
                    <label for="upload_image">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <label class="form-label" for="customFile">Default file input example</label>
                          <input type="file" class="form-control" name="upload_image" id="upload_image" />
                      
                    
                      
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
             

                <div class="card-footer">
                  <button type="submit" id="submit-hotel" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
      </div>
      </div>
      </section>

      <section class="content" id="add-all-hotels">
        <h1>add-all-hotels</h1>
      </section>

      <section class="content" id="view-membership">
        <h1>view-membership</h1>
      </section>

      <section class="content" id="manage-hotels">
        <h1>manage-hotels</h1>
      </section>

      <section class="content" id="all-completed-bookings">
        <h1>all-completed-bookings</h1>
      </section>

  </div>