<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Account Management";
    $username = $_SESSION['user_Name'];
    $script_for_specific_page = "";
    $user_img = "../assets/images/user.png";
    $user_email = "mail@gmail.com";
    if(isset($_SESSION['login_level']) )
    {      
        $login_level = $_SESSION['login_level'];
        //if the user is not admin go to 404
        if ($login_level != 2) {
         
          header('location: error404.php');
        }
         
    }
 
?>

<!DOCTYPE html>
<html>

 <?php
    include("dash-head.php");
    ?>

<body class="theme-green ">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <?php 
        include('dash-topnav.php');
    ?>
    <section>
        <?php 
        include("dash-sidenav-left.php");
        ?>

    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                </h2>
            </div>

            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="index"><i class="material-icons">home</i> Home</a></li>
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">account_box</i> Account Management</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>LIST OF ACCOUNT</h2>
                                    <div class="btn-group pull-right" >
                                      <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#account_modal">ADD ACCOUNT</button>
                                    <button type="button" class="btn btn-primary" id="proj_print">PRINT</button>
                                  
                                  </div>
                                  <input type="hidden" name="filter_Search" id="filter_Search" value="null">
                                   <br>
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="account_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">ID</th>
                                                <th width="10%">Level</th>
                                                <th width="10%">Username</th>
                                                <th width="10%">Status</th>
                                                <th width="10%">Register</th>
                                                <th width="10%">Action</th>
                                              </tr>
                                            </thead>
                                          </table>
                                       
                                   </div>
                               </div>
                           </div>
                    </div>
            </div>   
          <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <iframe src="map/user-map.php" style=" display:block; width:100%; height: 800px;"></iframe>
                    </div>
                </div> -->
          
        </div>

    </section>



 <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="account_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Account</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="account_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">Username</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="username" name="username" placeholder="username">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="level">Level</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="level" id="level" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Researcher</option>
                                <option value="2">Admin</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="email">Email</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="pass">Password</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" minlength="6">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="con_pass">Retype</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" class="form-control" id="con_pass" name="con_pass" placeholder="Confirm Your Password"  minlength="6">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="status">Active</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="status" id="status" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Activate</option>
                                <option value="0">Deactivate</option>
                                <option value="2">Ban</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>                    

          </div>
          <div class="modal-footer">
          <input type="hidden" name="user_ID" id="user_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->









    <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="accountview_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> View Account Info</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="account_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">First Name</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="av_fname" placeholder="First Name" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
                <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">Last Name</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="av_lname" placeholder="Last Name" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
                <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">Address</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="av_address" placeholder="Address" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
                <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">Contact</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="av_contact" placeholder="Contact" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
                    

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    <script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });

$(document).on('click', '#proj_print', function(){
          var filter_Search = $('#filter_Search').val();
        
          window.open('../assets/fpdf181/index.php?report=Account&filter='+filter_Search);
      });


  var dataTable = $('#account_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/account/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],
    //    dom: 'Bfrtip',
    //      "buttons": [
    //     {
    //         extend: 'print',
    //         text: 'Print',
    //         autoPrint: true,
    //         exportOptions: {
    //             columns: ':visible',
    //         },
    //         customize: function (win) {
    //             $(win.document.body).find('table').addClass('display').css('font-size', '9px');
    //             $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
    //                 $(this).css('background-color','#D0D0D0');
    //             });
    //             $(win.document.body).find('h1').css('text-align','center');
    //             $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
    //         }
    //     }
    // ],

  });

  $(document).on('submit', '#account_form', function(event){
    event.preventDefault();
    var username = $('#username').val();
    var level = $('#level').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var con_pass = $('#con_pass').val();
    var status = $('#status').val();
    if(username != '' && level != '' && email != '' && pass != '' && con_pass != '' && status != '')
    {


      if (pass == con_pass) 
        {

          if (pass.length >= 6) {
            $.ajax({
              url:"datatable/account/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#account_form')[0].reset();
                $('#account_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
          } 
          else {
            alert("Minumum Password Length is 6 Character");
          }
        } 
        else {
          alert("Password not match");
        }
    }
    else
    {
      alert("Fields are Required");
    }
  });




  $(document).on('click', '.view', function(){
    var user_ID = $(this).attr("id");
     
    $.ajax({
      url:"datatable/account/fetch_single.php",
      type:"POST",
      data:{view:'view',user_ID:user_ID},
      dataType:"json",
      success:function(data)
      {
       $('#accountview_modal').modal('show');
       
        $('#av_fname').val(data.reg_fname);
        $('#av_lname').val(data.reg_lname);
        $('#av_address').val(data.reg_address);
        $('#av_contact').val(data.reg_contact);
      
      }
    });
  });
  $(document).on('click', '.update', function(){
    var user_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/account/fetch_single.php",
      type:"POST",
      data:{update:'update',user_ID:user_ID},
      dataType:"json",
      success:function(data)
      {
        $('#account_modal').modal('show');
        $("#username").prop("disabled", true);
        $('#username').val(data.user_Name);
        $('#email').val(data.user_Email);
        $('#pass').val(data.user_Pass);
        $('#con_pass').val(data.user_Pass);
        $('#level').val(data.level_ID).change();
        $('#status').val(data.user_status).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Account Info");
        $('#user_ID').val(user_ID);
      }
    });
  });
  $(document).on('click', '.add', function(){
        $("#username").prop("disabled", false);
        $('#action').val("Submit");
        $('#operation').val("Add");
        $('.modal-title').text("Add Account");
        document.getElementById("account_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var user_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/account/delete.php",
        type:"POST",
        data:{user_ID:user_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});
 $('#account_data').on('search.dt', function() {
              var value = $('.dataTables_filter input').val();
              console.log(value);
              $('#filter_Search').val(value);
          }); 
</script>

</body>

</html>
