<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Suggestion Management";
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
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">account_box</i> Suggestion Management</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>List of Suggestion</h2>
                                
                                   <br>
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="news_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">Name</th>
                                                <th width="10%">Subject</th>
                                                <th width="10%">Date</th>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="news_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> View Suggestion</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="news_form" enctype="multipart/form-data">

          <div class="modal-body news">
            <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="news_content">Subject</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                             <input type="text" class="form-control" name="news_title" id="news_title">
                          
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="news_content">Message</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line" id="znews_content1">
                             <div class="form-control" name="news_content" id="news_content" style="min-height: 400px;"></div>
                            
                          </div>
                           <div id="znews_content"></div>
                      </div>
                  </div>
              </div>                 

          </div>
          <div class="modal-footer">
          <input type="hidden" name="s_ID" id="s_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
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
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#news_data').DataTable({

    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/suggestion/fetch.php",
      type:"POST",
      data:{admin:1}
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


$(document).on('click', '.view', function(){
    var s_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/suggestion/fetch_single.php",
      type:"POST",
      data:{s_ID:s_ID},
      dataType:"json",
      success:function(data)
      {
        $("#news_title").prop("disabled", true);
        $("#news_content").prop("disabled", true);
        $('#news_modal').modal('show');
        $('#news_title').val(data.subject);

        $('#znews_content1').hide();
        $('#znews_content').show();
        $('#znews_content').text(data.message);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("View Suggestion");
         $('#s_ID').val(s_ID);
       

   
      }
    });
  });

  $(document).on('click', '.delete', function(){
    var s_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/suggestion/delete.php",
        type:"POST",
        data:{s_ID:s_ID},
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
