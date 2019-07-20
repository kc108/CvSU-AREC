<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Research";
    $username = $_SESSION['user_Name'];
    $script_for_specific_page = "";
    $user_img = "../assets/images/user.png";
    $user_email = "mail@gmail.com";
    if(isset($_SESSION['login_level']) )
    {      
        $login_level = $_SESSION['login_level'];
        //if the user is not admin go to 404
        if ($login_level != 2) {
         
          // header('location: error404.php');
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
                                   <h2>LIST OF RESEARCH</h2>

                                    <div class="btn-group pull-right" >
                                        <?php 
                                        if ($login_level == 1) {
                                          ?>
                                          <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#research_modal">ADD RESEARCH</button>
                                          <?php
                                        }
                                        else{
                                         ?>
                                          <button type="button" class="btn btn-info waves-effect add" data-toggle="modal" data-target="#archiveresearch_modal">VIEW ARCHIVE</button>
                                          <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#research_modal">ADD RESEARCH</button>
                                          <?php
                                        }
                                        if ($login_level != 1) {

                                        ?>

                                      <button type="button" class="btn btn-primary" id="proj_print">PRINT</button>
                                    <?php
                                        }
                                        ?>

                                    </div>
                                  <input type="hidden" name="filter_Search" id="filter_Search" value="">
                                  <input type="hidden" name="filter_Search" id="filter_Search1" value="">
                                  <br>                                  
                               </div>
                               <div class="body">
                                         <div class="table-responsive" style="overflow-x: hidden;">
                                          <table  id="research_data"  class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">ID</th>
                                                <th width="10%">Author's</th>
                                                <th width="10%">Title</th>
                                                <th width="10%">Status</th>
                                                <th width="10%">Year Conduct</th>
                                                <th width="10%">Action</th>
                                              </tr>
                                            </thead>
                                          </table>
                                       
                                   </div>
                               </div>
                           </div>
                    </div>
            </div>   

          
        </div>

    </section>
<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="archiveresearch_modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="fa fa-eye"></span> View Archive</h4>
            <br>
              <div class="btn-group pull-right" >
                <button type="button" class="btn btn-primary" id="proj_print1">PRINT</button>
              </div>
          </div>
          <div class="modal-body archiveresearch">
          <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="archiveresearch_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">ID</th>
                                                <th width="10%">Author's</th>
                                                <th width="10%">Title</th>
                                                <th width="10%">Status</th>
                                                <th width="10%">Date Create</th>
                                                <th width="10%">Action</th>
                                              </tr>
                                            </thead>
                                          </table>
                                       
                                   </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->

<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="research_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title mview"><span class="glyphicon glyphicon-plus-sign"></span> Add Research</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="research_form" enctype="multipart/form-data">

          <div class="modal-body mview">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Research Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_Title" name="research_Title" placeholder="Research Title" required="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Author">Research Author's</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_Author" name="research_Author" placeholder="Research Author's" required="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Content">Content</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                            <textarea  class="form-control " id="research_Content" name="research_Content" placeholder="Content" style="width: 482px;height: 237px;" required=""></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
                <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_yrconduct">Year Conduct</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_yrconduct" name="research_yrconduct" placeholder="Year Conduct">
                          </div>
                      </div>
                  </div>
              </div>

              <br>
              <?php 
              if ($login_level == 1) {
                $zzz = "researcher";
              }
              else{
                $zzz = "admin";
              }
              ?>
              <input type="hidden" name="stat_inp" id="stat_inp" value="<?php echo $zzz?>">
              <div id="stat_inp1">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Status">Status</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="research_Status" id="research_Status" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Pending</option>
                                <option value="2">Approve</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
               <br>
              <div id="attch_add">
                (<b>Optional :</b> <i> 1 Attachment Per Research </i>)
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="file" name="research_Attachment"  id="research_Attachment" class="form-control">
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                      <div class="form-group">
                          <div class="">
                              <div class="btn btn-danger" id="clear_file">X</div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
              <div id="attch_view">
                
                         
              </div>
              


          </div>
          <div class="modal-footer">
          <input type="hidden" name="research_ID" id="research_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
             <input type="submit" name="action" id="action" class="btn btn-success btn-lg" value="Submit" />
          </div>
         
           
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
      
      $(document).on('click', '#proj_print', function(){
          var filter_Search = $('#filter_Search').val();
          var filter_Stats = "1_2";

          window.open('../assets/fpdf181/print?report=Research&filter='+filter_Search+'&stats='+filter_Stats);
      });
$(document).on('click', '#proj_print1', function(){
          var filter_Search = $('#filter_Search1').val();
          var filter_Stats = "3";
          
          window.open('../assets/fpdf181/print?report=Research&filter='+filter_Search+'&stats='+filter_Stats);
      });

       var dataTable = $('#research_data').DataTable({
        "processing":true,
        "serverSide":true,
         "bAutoWidth": false,
        "order":[],
        "ajax":{
          url:"datatable/research/fetch.php",
          type:"POST"
        },
        "columnDefs":[
          {
            "targets":[0],
            "orderable":false,
          },
        ],
      });

        var archivedataTable = $('#archiveresearch_data').DataTable({
    "processing":true,
    "serverSide":true,
     "bAutoWidth": false,
    "order":[],
    "ajax":{
      url:"datatable/research/archivefetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


    $(document).on('submit', '#research_form', function(event){
    event.preventDefault();
    // var research_Title = $('#research_Title').val();
    // var research_Content = $('#research_Content').val();
    // var research_Attachment = $('#research_Attachment').val();
    // var research_Status = $('#research_Status').val();
    $.ajax({
              url:"datatable/research/insert.php",
              method:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#stat_inp1').html();
                $('#stat_inp1').html('<div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label for="research_Status">Status</label></div><div class="col-lg-10 col-md-10 col-sm-8 col-xs-7"><div class="form-group"><div class="form-line"><select class="form-control" name="research_Status" id="research_Status" required=""><option value="">~~SELECT~~</option><option value="1">Pending</option><option value="2">Approve</option></select></div></div></div></div>');  

                $('#research_form')[0].reset();
                $('#research_modal').modal('hide');
                $('#research1_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
    });

    $(document).on('click', '.add', function(){
        $("#research_Title").prop("disabled", false);
        $("#research_Author").prop("disabled", false);
        $("#research_Content").prop("disabled", false);
        $("#research_yrconduct").prop("disabled", false);
        
         var stat_inp = $('#stat_inp').val();
         if (stat_inp == "admin") {
           
            $("#research_Status").prop("disabled", false);  
                     }
         else{
            
            $('#stat_inp1').html('');
            
            // $('#research_Status').removeAttr(required);
         }

     
        document.getElementById("research_form").reset('');

        $('#action').val("Add");
        $('#operation').val("Add");
        $('#action').show();
        $('#attch_add').show();
        $('#attch_view').html('');
        
        $('.modal-title.mview').html('<span class="glyphicon glyphicon-plus-sign"></span> Add Research');
  });
      $(document).on('click', '.view', function(){
    var research_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/research/fetch_view.php",
      type:"POST",
      data:{research_ID:research_ID},
      dataType:"json",
      success:function(data)
      {

        $('#research_Title').val(data.research_Title);
        $('#research_Author').val(data.research_Author);
        $('#research_Content').val(data.research_Content);
        $('#research_yrconduct').val(data.research_yrConduct);
        $('#research_Status').val(data.research_Status).change();
        $('#research_ID').val(data.research_ID);

        $("#research_Title").prop("disabled", true);
        $("#research_Author").prop("disabled", true);
        $("#research_Content").prop("disabled", true);
        $("#research_yrconduct").prop("disabled", true);
        $("#research_Status").prop("disabled", true);


        $('#attch_add').hide();
        $('#attch_view').html(data.research_view);
        

        $('#research_modal').modal('show');
        $('.modal-title.mview').text("View Research Info");
        $('#action').hide();
      }
    });
  });

    $(document).on('click', '.update', function(){
    var research_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/research/fetch_view.php",
      type:"POST",
      data:{research_ID:research_ID},
      dataType:"json",
      success:function(data)
      {

        $('#research_Title').val(data.research_Title);
        $('#research_Author').val(data.research_Author);
        $('#research_Content').val(data.research_Content);
        $('#research_yrconduct').val(data.research_yrConduct);
        $('#research_Status').val(data.research_Status).change();
        $('#research_ID').val(data.research_ID);
        

        $("#research_Title").prop("disabled", false);
        $("#research_Author").prop("disabled", false);
        $("#research_Content").prop("disabled", false);
        $("#research_yrconduct").prop("disabled", false);
        
         var stat_inp = $('#stat_inp').val();
         if (stat_inp == "admin") {
            $('#stat_inp1').show();
            $("#research_Status").prop("disabled", false);    
         }
         else{
            $('#stat_inp1').hide();
            // $('#research_Status').removeAttr(required);
         }

        $('#attch_add').show();
        $('#attch_view').html('');

        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('#action').show();
        $('#attch_add').show();



        $('#research_modal').modal('show');
        $('.modal-title.mview').text("Update Research Info");
        
      }
    });
  });

  $(document).on('click', '.approve', function(){


  var research_ID = $(this).attr("id");
    if(confirm("Are you sure you want to approve this?"))
    {
      $.ajax({
        url:"datatable/research/approve.php",
        method:"POST",
        data:{research_ID:research_ID},
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
$(document).on('click', '.disapprove', function(){


  var research_ID = $(this).attr("id");
    if(confirm("Are you sure you want to disapprove this?"))
    {
      $.ajax({
        url:"datatable/research/disapprove.php",
        method:"POST",
        data:{research_ID:research_ID},
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

$(document).on('click', '.archive', function(){


  var research_ID = $(this).attr("id");
    if(confirm("Are you sure you want to archive this?"))
    {
      $.ajax({
        url:"datatable/research/archive.php",
        method:"POST",
        data:{research_ID:research_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
          archivedataTable.ajax.reload();
          
        }
      });
    }
    else
    {
      return false; 
    }
  });
$(document).on('click', '.unarchive', function(){


  var research_ID = $(this).attr("id");
    if(confirm("Are you sure you want to unarchive this?"))
    {
      $.ajax({
        url:"datatable/research/unarchive.php",
        method:"POST",
        data:{research_ID:research_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
          archivedataTable.ajax.reload();
          
        }
      });
    }
    else
    {
      return false; 
    }
  });

  $(document).on('click', '.delete', function(){
    var research_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/research/delete.php",
        method:"POST",
        data:{research_ID:research_ID},
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
  $(document).on('click', '#clear_file', function(){
    $('#research_Attachment').val('');
  });
  


 $('#research_data').on('search.dt', function() {
              var value = $('.dataTables_filter input').val();
              $('#filter_Search').val(value);
          }); 
 $('#archiveresearch_data').on('search.dt', function() {
              var value = $('.dataTables_filter input').val();
              $('#filter_Search1').val(value);
          }); 


 $(document).on('click', '#cl_acc', function(){
      
     $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{account:1},
        success:function(data)
        {
      
        }
      });
  });
   
$(document).on('click', '#cl_news', function(){
    
    $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{news:1},
        success:function(data)
        {
      
        }
      });
    

  });
$(document).on('click', '#cl_sugg', function(){
    
    $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{suggest:1},
        success:function(data)
        {
      
        }
      });
  });
$(document).on('click', '#cl_res', function(){
    
    $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{research:1},
        success:function(data)
        {
      
        }
      });
  });
$(document).on('click', '#cl_proj', function(){
    $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{project:1},
        success:function(data)
        {
      
        }
      });
  });
$(document).on('click', '#cl_bio', function(){
      $.ajax({
        url:"notif_seen1.php",
        type:"POST",
        data:{biogas:1},
        success:function(data)
        {
      
        }
      });
  });




</script>

</body>

</html>
