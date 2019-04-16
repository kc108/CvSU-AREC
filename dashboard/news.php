﻿<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "News Management";
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
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">account_box</i> News Management</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>LIST OF News</h2>
                                   <div class="btn-group pull-right">
                                   <button type="button" class="btn btn-success waves-effect add" data-toggle="modal" data-target="#news_modal">ADD NEWS</button>
                                   </div>
                                   <br>
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="news_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">Title</th>
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
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add News</h4>
          </div>
          
          <form class="form-horizontal" action="#" method="POST" id="news_form" enctype="multipart/form-data">

          <div class="modal-body news">
            <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="news_content">Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                             <input type="text" class="form-control" name="news_title" id="news_title">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="news_content">News</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line" id="znews_content1">
                             <textarea class="form-control" name="news_content" id="news_content" style="min-height: 400px;"></textarea>
                            
                          </div>
                           <div id="znews_content"></div>
                      </div>
                  </div>
              </div>                 

          </div>
          <div class="modal-footer">
          <input type="hidden" name="news_ID" id="news_ID" />
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
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#news_data').DataTable({

    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/news/fetch.php",
      type:"POST",
      data:{admin:1}
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#news_form', function(event){
    event.preventDefault();
    var news_title = $('#news_title').val();
    var news_content = $('#news_content').val();
    if(news_title != '' && news_content != '' )
    {
            $.ajax({
              url:"datatable/news/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#news_form')[0].reset();
                $('#news_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
       
    }
    else
    {
      alert("Fields are Required");
    }
  });
$(document).on('click', '.view', function(){
    var news_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/news/fetch_single.php",
      type:"POST",
      data:{news_ID:news_ID},
      dataType:"json",
      success:function(data)
      {
        $("#news_title").prop("disabled", true);
        $("#news_content").prop("disabled", true);
        $('#news_modal').modal('show');
        $('#news_title').val(data.news_Title);

        $('#znews_content1').hide();
        $('#znews_content').show();
        $('#znews_content').text(data.news_Content);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("View News");
         $('#news_ID').val(news_ID);
       

   
      }
    });
  });
  $(document).on('click', '.update', function(){
    var news_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/news/fetch_single.php",
      type:"POST",
      data:{news_ID:news_ID},
      dataType:"json",
      success:function(data)
      {
        $("#news_title").prop("disabled", false);
        $("#news_content").prop("disabled", false);
        $('#news_modal').modal('show');
        $('#news_title').val(data.news_Title);
        $('#news_content').val(data.news_Content);
         $('#znews_content1').show();
         $('#znews_content').hide();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Update News");
            $('#news_ID').val(news_ID);

   
      }
    });
  });
  $(document).on('click', '.add', function(){
        $('.ztitle#news_title').val('');
        $('#news_content').text('');
        $('#action').val("Submit");
        $('#operation').val("Add");
        $('.modal-title').text("Add News");
           $('#znews_content1').show();
         $('#znews_content').hide();
        $("#news_title").prop("disabled", false);
        $("#news_content").prop("disabled", false);
        document.getElementById("news_form").reset();
        $('#news_form')[0].reset();
  });
  $(document).on('click', '.delete', function(){
    var news_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/news/delete.php",
        type:"POST",
        data:{news_ID:news_ID},
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