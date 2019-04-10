<?php 
    include('../session.php');
    include('dash-global-function.php');
 
   
    $pagename = "Project Monitoring";
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
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">search</i> Project Monitoring</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>LIST OF PROJECT</h2>
                                   <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#project_modal">ADD PROJECT</button>
                                   </div>
                                   <br>
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="project_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">Project Title</th>
                                                <th width="10%">Project Owner</th>
                                                <th width="10%">Date Started</th>
                                                <th width="10%">Date Ended</th>
                                                <th width="10%">Project Location</th>
                                                <th width="10%">Project Progress</th>
                                                <th width="10%">Action</th>
                                              </tr>
                                            </thead>
                                          </table>
                                      <!--  -->
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
    <div class="modal fade" tabindex="-1" role="dialog" id="project_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Project</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="project_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_title">Project Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_owner">Project Owner</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_owner" name="project_owner" placeholder="Project Owner">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_location">Project Location</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_location" name="project_location" placeholder="Project Location">
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_start">Start Date</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="date" class="form-control" id="project_start" name="project_start" >
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_end">End Date</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="date" class="form-control" id="project_end" name="project_end" >
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Scope</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_scope" name="project_scope" placeholder="Project Scope">
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_end">Project Head</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_head" name="project_head" placeholder="Name ">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_status">Project Status</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="project_status" id="project_status" >
                                <option value="">~~SELECT~~</option>
                              <?php 
                                $query = mysqli_query($conn,"SELECT * FROM `status`");
                                if (mysqli_num_rows($query) > 0) 
                                {
                                     while ($rows = mysqli_fetch_assoc($query)) {
                                ?>
                                <option value="<?php echo $rows['status_ID']?>" ><?php echo $rows['status_Name']?></option>
                                <?php
                                     }
                                }
                                ?>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
          </div>
          <div class="modal-footer">
          <input type="hidden" name="proj_ID" id="proj_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
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



  var dataTable = $('#project_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/project/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#project_form', function(event){
    event.preventDefault();
    var project_title = $('#project_title').val();
    var project_owner = $('#project_owner').val();
    var project_location = $('#project_location').val();
    var project_start = $('#project_start').val();
    var project_end = $('#project_end').val();
    var project_scope = $('#project_scope').val();
    var project_head = $('#project_head').val();
    var project_status = $('#project_status').val();


    $.ajax({
              url:"datatable/project/insert.php",
              method:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                
                document.getElementById("project_form").reset();
                $('#project_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
  });

$(document).on('click', '.add', function(){
        $('#action').val("Add");
        $('#operation').val("Add");
        $('.modal-title').text('Add Project');
        $('#action').show();
        $('#project_title').val('');
        $('#project_owner').val('');
        $('#project_location').val('');
        $('#project_start').val('');
        $('#project_end').val('');
        $('#project_scope').val('');
        $('#project_head').val('');
        $('#project_status').val('');
        // document.getElementById("project_form").reset();

  });

$(document).on('click', '.update', function(){
    var proj_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/project/fetch_update.php",
      type:"POST",
      data:{proj_ID:proj_ID},
      dataType:"html",
      success:function(data)
      {

        $('.modal-body').html('');
        $('#project_modal').modal('show');
        $('.modal-body').html(data);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('#proj_ID').val(proj_ID);
         $('.modal-title').text('Edit Project');
         $('#action').show();
        
      }
    });
  });

$(document).on('click', '.view', function(){
    var proj_ID = $(this).attr("id");
    
      
    $.ajax({
      url:"datatable/project/fetch_view.php",
      type:"POST",
      data:{proj_ID:proj_ID},
      dataType:"html",
      success:function(data)
      {
       
        


        $('.modal-title').text('View Project');
        $('#action').hide();
        $('.modal-body').html('');
        $('#project_modal').modal('show');
        $('.modal-body').html(data);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('#proj_ID').val(proj_ID);

        
      }
    });
  });



  $(document).on('click', '.delete', function(){
    var proj_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/project/delete.php",
        method:"POST",
        data:{proj_ID:proj_ID},
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
</script>
</body>

</html>
