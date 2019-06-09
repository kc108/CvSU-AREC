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
        // if ($login_level != 2) {
         
        //   header('location: error404.php');
        // }
         
    }

   $login_level;
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
                    CVSU RESEARCH
                </h2>
            </div>

            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="index"><i class="material-icons">home</i> Home</a></li>
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">search</i> Research Management</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>LIST OF RESEARCH</h2>
                                   <div class="btn-group pull-right">
                                   
                                   <?php 
                                   if ($login_level == 1) {
                                     ?>
                                     <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#research1_modal">ADD RESEARCH</button>
                                     <?php
                                   }
                                   else{
                                    ?>
                                     <button type="button" class="btn btn-info waves-effect add" data-toggle="modal" data-target="#archiveresearch_modal">VIEW ARCHIVE</button>
                                     <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#research_modal">ADD RESEARCH</button>
                                     <?php
                                   }
                                   ?>
                                   </div>
                                   <br>
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table  id="research_data"  class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">ID</th>
                                                <th width="10%">Researcher</th>
                                                <th width="10%">Title</th>
                                                <th width="10%">Status</th>
                                                <th width="10%">Date Create</th>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="archiveresearch_modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="fa fa-eye"></span> View Archive</h4>
          </div>
          <div class="modal-body archiveresearch">
          <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="archiveresearch_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">ID</th>
                                                <th width="10%">Researcher</th>
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
            <h4 class="modal-title mview"><span class="glyphicon glyphicon-plus-sign"></span> Add Account</h4>
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
                              <input type="text" class="form-control" id="research_Title" name="research_Title" placeholder="Research Title">
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
                            <textarea  class="form-control " id="research_Content" name="research_Content" placeholder="Content" style="width: 482px;height: 237px;"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
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
               <br>
              (<b>Optional :</b> <i> 1 Attachment Per Research </i>)
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="file" name="research_Attachment"  id="research_Attachment" class="form-control">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
          <input type="hidden" name="research_ID" id="research_ID" />
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
    <div class="modal fade" tabindex="-1" role="dialog" id="research1_modal">
      <div class="modal-dialog " role="document" >
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Account</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="research_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Research Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_Title" name="research_Title" placeholder="Research Title">
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
                            <textarea  class="form-control " id="research_Content" name="research_Content" placeholder="Content" style="width: 482px;height: 237px;"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <input type="hidden" name="research_Status"  id="research_Status" class="form-control" value="1">
               <br>
              (<b>Optional :</b> <i> 1 Attachment Per Research </i>)
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="file" name="research_Attachment"  id="research_Attachment" class="form-control">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
          <input type="hidden" name="research_ID" id="research_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->
         <!-- Modal -->
<div id="report_project_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Project Report</h4>
      </div>
      <div class="modal-body">
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="loc_stat">Status</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                             <select class="form-control"  id="fil_status">
                             <option value="null">~~SELECT~~</option>
                             <?php 
                             $query = "SELECT * FROM `status` ";
                            $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_array($result))
                             {
                              echo '<option value="'.$row["status_ID"].'">'.$row["status_Name"].'</option>';
                             }
                             ?>
                           </select>
                    </div>
                </div>
            </div>
        </div> 

           <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="loc_stat">Location</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                             <select class="form-control" id="fil_location">
                             <option value="null">~~SELECT~~</option>
                             <?php 
                             $query = "SELECT DISTINCT(proj_Location) FROM `project_monitoring`";
                            $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_array($result))
                             {
                              echo '<option value="'.$row["proj_Location"].'">'.$row["proj_Location"].'</option>';
                             }
                             ?>
                           </select>
                    </div>
                </div>
            </div>
        </div> 
        <div class="text-center">
            <button type="button" class="btn btn-primary" onclick="print_project();">PRINT</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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
  function setSelectedValue(dropDownList, valueToSet) {
    var option = dropDownList.firstChild;
    for (var i = 0; i < dropDownList.length; i++) {
        if (option.text.trim().toLowerCase() == valueToSet.trim().toLowerCase()) {
            option.selected = true;
            return;
        }
        option = option.nextElementSibling;
    }
}



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
       dom: 'Bfrtip',
         "buttons": [
        {
            extend: 'print',
            text: 'Print',
            autoPrint: true,
            exportOptions: {
                columns: ':visible',
            },
            customize: function (win) {
                $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                    $(this).css('background-color','#D0D0D0');
                });
                $(win.document.body).find('h1').css('text-align','center');
                $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
            }
        }
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
       dom: 'Bfrtip',
         "buttons": [
        {
            extend: 'print',
            text: 'Print',
            autoPrint: true,
            exportOptions: {
                columns: ':visible',
            },
            customize: function (win) {
                $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                    $(this).css('background-color','#D0D0D0');
                });
                $(win.document.body).find('h1').css('text-align','center');
                $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
            }
        }
    ],

  });

  $(document).on('submit', '#research_form', function(event){
    event.preventDefault();
    var research_Title = $('#research_Title').val();
    var research_Content = $('#research_Content').val();
    var research_Attachment = $('#research_Attachment').val();
    var research_Status = $('#research_Status').val();
   
    
    $("#research_Title").prop("disabled", false);
    $("#research_Content").prop("disabled", false);
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
                
                $('#research_form')[0].reset();
                $('#research_modal').modal('hide');
                $('#research1_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
  });

$(document).on('click', '.add', function(){
        $("#research_Title").prop("disabled", false);
        $("#research_Content").prop("disabled", false);
        $('#research_Title').val('');
        $('#research_Content').val('');
        $('#research_Attachment').val('');
        $('#research_Status').val('');
        document.getElementById("research_form").reset('');
  });
    $(document).on('click', '.view', function(){
    var research_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/research/fetch_view.php",
      type:"POST",
      data:{research_ID:research_ID},
      dataType:"html",
      success:function(data)
      {
        $('.modal-body.mview').html('');
        $('#research_modal').modal('show');
        $('.modal-body.mview').html(data);
        $('.modal-title.mview').text("View Research Info");
        $('#action').hide();
      }
    });
  });
$(document).on('click', '.update', function(){
    var research_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/research/fetch_update.php",
      type:"POST",
      data:{research_ID:research_ID},
      dataType:"html",
      success:function(data)
      {
        $('.modal-body.mview').html('');
        $('#research_modal').modal('show');
        $('.modal-body.mview').html(data);
        $('.modal-title.mview').text("Edit Research Info");
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('#action').show();
        
      }
    });
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
  



});

$(document).on('change', '#fil_location', function(){
  var fil_location = $(this).val();

 });
$(document).on('change', '#fil_status', function(){
  var fil_status = $(this).val();

 });
function print_project(){
     var fil_location = $('#fil_location').val();
      var fil_status = $('#fil_status').val();
     window.open('../assets/fpdf181/index.php?report=project&location='+fil_location+'&status='+fil_status);
}
</script>
</body>

</html>
