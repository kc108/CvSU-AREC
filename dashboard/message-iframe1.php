
<?php 
  // include('../dbconfig.php');
  include('../session.php');
?>
<!-- <link href="msg/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="msg/bootstrap.min.js"></script> -->
<!-- <script src="msg/jquery.min.js"></script> -->
<link href="../assets/iconfont/roboto.css" rel="stylesheet" type="text/css">
<link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">
   <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

 




    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
  .container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
/*.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}*/

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
 /* background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;*/
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
.active{
  background-color: #2196F3; 
  
}
.h5_active{
  color: #ffffff !important;
}
/*.btn-file {
    position: relative;
    overflow: hidden;
}*/
/*.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}*/

</style>
<html>
<head>

<link href="msg/font-awesome.css" type="text/css" rel="stylesheet">

</head>
<body >
<div class="container" >
<div class="messaging">
      <div class="inbox_msg" >
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
               <!--  <input type="text" id="boxxx"  class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="material-icons" aria-hidden="true">search</i> </button>
                </span>  -->
              </div>
            </div>
          </div>
          <div class="inbox_chat" id="inbox_chat">
            <?php 
            if ($_SESSION['login_level'] == 2) {
             $sql = "SELECT user_ID,user_Name,user_Img  FROM `user_accounts` WHERE level_ID = 1";
            }
             if ($_SESSION['login_level'] == 1) {
            $sql = "SELECT user_ID,user_Name,user_Img  FROM `user_accounts` WHERE level_ID = 2";
          }
           $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  if (!empty($row['user_Img'])) {
                   $m_img = 'data:image/jpeg;base64,'.base64_encode($row['user_Img']);
                  }
                  else{
                    $m_img = "../assets/images/user-profile.png";
                  }
                    ?>
                 <!--    active_chat -->
            <div class="chat_list " id="chat_list">
              <div class="chat_people">
                <div class="chat_img "> <img src="<?php echo $m_img?>" alt="sunil"> </div>
                <div class="chat_ib research" id="<?php echo $row["user_ID"];?>">
                  <h5  class="h5_name"><?php echo $row["user_Name"];?></h5>
                  <p></p>
                </div>
              </div>
            </div>
                    <?php
                }
            } else {
            }
            ?>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
            
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
                 <!-- onkeypress="if(DetectEnterPressed(event)){LoadPage(1)}" -->
             
            
         
              <!-- <button class="msg_send_btn" type="button"><i class="material-icons" aria-hidden="true">send</i></button> -->

            <!--  <div class="input-group">
                 <input type="text" class="form-control write_msg" placeholder="Type a message" id="write_msg"   style="width: 300px;" />
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-primary attach_file" data-toggle="modal" data-target="#attach_file"><i class="material-icons" aria-hidden="true">attach_file</i></button>
                  <button type="button" class="btn btn-outline-secondary msg_send_btn"><i class="material-icons" aria-hidden="true">send</i></button>
                </div>
              </div> -->

     <!--            <div class="col-lg-6">
                    <div class="input-group">
                     

                      <div class="input-group-append" >
                        <span class="input-group-btn">

                          <button type="button" class="btn btn-outline-primary attach_file" data-toggle="modal" data-target="#attach_file"></button>
                          <button type="button" class="btn btn-outline-secondary msg_send_btn"><i class="material-icons" aria-hidden="true">send</i></button>
                        </span>
                      </div>

                  </div>
                </div> -->

<div class="input-group">
 <input type="text" class="form-control write_msg" placeholder="Type a message" id="write_msg"  style="height: 50px;" />
<!-- <span class="input-group-addon attach_file" data-toggle="modal" data-target="#attach_file"><i class="material-icons" aria-hidden="true">attach_file</i></span> -->
<span class="input-group-addon msg_send_btn" ><i class="material-icons" aria-hidden="true">send</i></span>
</div>

            
            </div>
          </div>
        </div>
 <!--        <h2>Files</h2>
<div class='alert alert-info'><strong>Hey.</strong> Upload a file!</div>
<ul class='unordered files'>
</ul> -->
      </div>
      
      
    </div></div>


<!-- Modal -->
<div class="modal fade" id="attach_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Attachment file</h4>
      </div>
      <div class="modal-body">
        <form  class="form-horizontal" action="#" method="POST" id="attachment_form" enctype="multipart/form-data">
            <input type="hidden" name="r"  id="r" class="form-control">
            <input type="hidden" name="s"  id="s" class="form-control">
            <input type="hidden" name="c"  id="c" class="form-control">
           <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="file" name="atc_file"  id="atc_file" class="form-control">
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
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
        <input type="submit" name="submit_file" id="submit_file" class="btn btn-success" value="Submit" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

$(document).ready(function(){

    $(document).on('click', '.research', function(){
    

    var receiver_ID = $(this).attr("id");
   
  
      $.ajax({
        url:"message-content.php",
        type:"POST",
        data:{receiver_ID:receiver_ID},
        dataType:"html",
        success:function(data)
        {
         
          $('.msg_history').html('');
          $('.msg_history').html(data);
           // setTimeout(function(){
           //      sendRequest(); //this will send request again and again;
           //  }, 5000);
        }
      });
 
  
    
  });

   var msg_history =  $('.msg_history');

    $(document).on('click', '.msg_send_btn', function(){
     var message_content = $('.write_msg').val();
     var  receiver_ID = $('#conversation_ID').val();
     var sender_ID = <?php echo $_SESSION['login_id'];?>;
      if (message_content == "") {
       
      }
      else{
       
     $.ajax({
       url:"message-sent.php",
       type:"POST",
       data:{receiver_ID:receiver_ID,message_content:message_content,sender_ID:sender_ID},
       dataType:"html",
       success:function(data)
       {
          $('.msg_history').load('message-content.php?receiver_ID='+receiver_ID);
          
       }
     }); 
      }  
  });

    // msg_sendattach_btn
$("#write_msg").keypress(function(e){

if(e.which == 13) {
    event.preventDefault();
    var message_content = $('.write_msg').val();
    var  receiver_ID = $('#conversation_ID').val();
    var sender_ID = <?php echo $_SESSION['login_id'];?>;
      if (message_content == "") {
       
      }
      else{
       
       
       $.ajax({
         url:"message-sent.php",
         type:"POST",
         data:{receiver_ID:receiver_ID,message_content:message_content,sender_ID:sender_ID},
         dataType:"html",
         success:function(data)
         {
            $('.msg_history').load('message-content.php?receiver_ID='+receiver_ID);
            
             $('.write_msg').val('');
            
         }
       }); 
      }

    }
});
  $(document).on('click', '#clear_file', function(){
    $('#atc_file').val('');
  });
    $(document).on('submit', '#attachment_form', function(event){
    event.preventDefault();
    console.login('asd');
    var  receiver_ID = $('#conversation_ID').val();
    var sender_ID = <?php echo $_SESSION['login_id'];?>;
    $('#r').val(receiver_ID);
    $('#s').val(sender_ID);
    $('#c').val(receiver_ID);

    $('#attach_file').modal(hide);
    // $.ajax({
    //           url:"message-attachment.php",
    //           method:'POST',
    //           data:new FormData(this),
    //           contentType:false,
    //           processData:false,
    //           success:function(data)
    //           {

    //           }
    //         });
    });
// document.getElementById("file").onchange = function(event) {
//     event.preventDefault();
//       document.getElementById("attach_file").submit();
//       this.form.submit();
   
//       $.ajax({
//         url:"message-attachment.php",
//         method:'POST',
//         data:new FormData(this),
//         contentType:false,
//         processData:false,
//         success:function(data)
//         {
//           alert("Success");
//         }
//       });
// }
// $('.upload').on('click', function() {
//     $('.uploader input:file').click();
// });

// $('.uploader input:file').on('change', function() {
//     $this = $(this);

//     $('.alert').remove();

//     $.each($this[0].files, function(key, file) {
//         var fnz = file.name;
//         $('.files').append('<li>' + file.name + '</li>');

//         var data = new FormData();
//         data.append(file.name, file);
        
//         $.ajax({
//             url: $('.uploader').attr('action'),
//             type: 'POST',
//             dataType: 'json',
//             processData: false,
//             data: data
//         });
//     });


//     var  receiver_ID = $('#conversation_ID').val();
//     var sender_ID = <?php echo $_SESSION['login_id'];?>;
//     $.ajax({
//        url:"message-sent.php",
//        type:"POST",
//        data:{receiver_ID:receiver_ID,message_content:fnz,sender_ID:sender_ID},
//        dataType:"html",
//        success:function(data)
//        {
//           $('.msg_history').load('message-content.php?receiver_ID='+receiver_ID);
          
//            $('.write_msg').val('');
          
//        }
//      }); 
// });

$('input[type=file]').change(function () {
   
   console.dir(this.value);
   console.dir(this.files[0]);
    var fileInput = document.getElementById('attach_file');
    var file = fileInput.files[0];
    var formData = new FormData();
    formData.append('file', file);

    $.ajax({
      url:"blep.php",
      type:'POST',
      data:formData,
      contentType:false,
      processData:false,
      success:function(data)
      {
        console.log('asd');
      }
    });
});
  // $(document).on('submit', '#news_form', function(event){
  //   event.preventDefault();

  //           $.ajax({
  //             url:"belp.php",
  //             type:'POST',
  //             data:new FormData(this),
  //             contentType:false,
  //             processData:false,
  //             success:function(data)
  //             {
  //               console.log('asd');
  //             }
  //           });

  // });


 
  
});


$(document).ready(function() {
    var $msg_list = $('div.chat_list');
    var $msg_name = $('h5.h5_name');

    $msg_list.click(function() {
        $msg_list.removeClass('active'); 
        $(this).addClass('active'); 
    });
     $msg_name.click(function() {
        $msg_name.removeClass('h5_active'); 
        $(this).addClass('h5_active'); 
    });
 });

   </script>
    </body>
    </html>
