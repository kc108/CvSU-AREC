
<?php 
  // include('../dbconfig.php');
  include('../session.php');
?>
<link href="msg/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="msg/bootstrap.min.js"></script>
<script src="msg/jquery.min.js"></script>
<link href="../assets/iconfont/roboto.css" rel="stylesheet" type="text/css">
<link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">
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
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

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
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
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
}
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
            <div class="chat_list" id="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="<?php echo $m_img?>" alt="sunil"> </div>
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
            <form class='uploader' action='/echo/json/'>
                 <!-- onkeypress="if(DetectEnterPressed(event)){LoadPage(1)}" -->
             
            
         
              <!-- <button class="msg_send_btn" type="button"><i class="material-icons" aria-hidden="true">send</i></button> -->

             <div class="input-group">
                <!-- <input type="text" class="form-control" aria-label="Text input with segmented dropdown button"> -->
                 <input type="text" class="form-control write_msg" placeholder="Type a message" id="write_msg"   />
                <div class="input-group-append">
                  
                  <span class="btn btn-primary btn-file">
                    <i class="material-icons" aria-hidden="true">attach_file</i> <input type="file" multiple='multiple'/>
                  </span>
                  <button type="button" class="btn btn-outline-secondary msg_send_btn"><i class="material-icons" aria-hidden="true">send</i></button>
                </div>
              </div>

             </form>
            </div>
          </div>
        </div>
 <!--        <h2>Files</h2>
<div class='alert alert-info'><strong>Hey.</strong> Upload a file!</div>
<ul class='unordered files'>
</ul> -->
      </div>
      
      
    </div></div>
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
           setTimeout(function(){
                sendRequest(); //this will send request again and again;
            }, 5000);
        }
      });
 
  
    
  });

   var msg_history =  $('.msg_history');

    $(document).on('click', '.msg_send_btn', function(){
     var message_content = $('.write_msg').val();
     var  receiver_ID = $('#conversation_ID').val();
     var sender_ID = <?php echo $_SESSION['login_id'];?>;

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
  });

    // msg_sendattach_btn
$("#write_msg").keypress(function(e){

if(e.which == 13) {
    event.preventDefault();
    var message_content = $('.write_msg').val();
    var  receiver_ID = $('#conversation_ID').val();
    var sender_ID = <?php echo $_SESSION['login_id'];?>;

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
$('.upload').on('click', function() {
    $('.uploader input:file').click();
});

$('.uploader input:file').on('change', function() {
    $this = $(this);

    $('.alert').remove();

    $.each($this[0].files, function(key, file) {
        var fnz = file.name;
        $('.files').append('<li>' + file.name + '</li>');

        var data = new FormData();
        data.append(file.name, file);
        
        $.ajax({
            url: $('.uploader').attr('action'),
            type: 'POST',
            dataType: 'json',
            processData: false,
            data: data
        });
    });


    var  receiver_ID = $('#conversation_ID').val();
    var sender_ID = <?php echo $_SESSION['login_id'];?>;
    $.ajax({
       url:"message-sent.php",
       type:"POST",
       data:{receiver_ID:receiver_ID,message_content:fnz,sender_ID:sender_ID},
       dataType:"html",
       success:function(data)
       {
          $('.msg_history').load('message-content.php?receiver_ID='+receiver_ID);
          
           $('.write_msg').val('');
          
       }
     }); 
});

      // $(document).on('submit', '#attach_file', function(event){
      //       event.preventDefault();
      //       alert("submit");
      //       // var project_title = $('#project_title').val();
      //       // var project_owner = $('#project_owner').val();
      //       // var project_location = $('#project_location').val();
      //       // var project_start = $('#project_start').val();
      //       // var project_end = $('#project_end').val();
      //       // var project_scope = $('#project_scope').val();
      //       // var project_head = $('#project_head').val();
      //       // var project_status = $('#project_status').val();


      //       // $.ajax({
      //       //           url:"datatable/project/insert.php",
      //       //           method:'POST',
      //       //           data:new FormData(this),
      //       //           contentType:false,
      //       //           processData:false,
      //       //           success:function(data)
      //       //           {
      //       //             $('#action').val("Add");
      //       //             $('#operation').val("Add");

      //       //             alert(data);
                        
      //       //             document.getElementById("project_form").reset();
      //       //             $('#project_modal').modal('hide');
      //       //             dataTable.ajax.reload();
      //       //           }
      //       //         });
      //     });
 // $(document).on('click', '#proj_filter', function(){
 //          var proj_stat = $(this).attr("data-id");
 //          $('#filter_projStat').val(proj_stat);
          
 //          $('#project_data').DataTable().destroy();
 //          if(proj_stat != '0')
 //          {
 //           load_data(proj_stat);
 //          }
 //          else
 //          {
 //           load_data();
 //          }
 //      });
  // function LoadPage() {
  //      var message_content = $('.write_msg').val();
  //      var  receiver_ID = $('#conversation_ID').val();
  //      var sender_ID = <?php echo $_SESSION['login_id'];?>;

  //      $.ajax({
  //        url:"message-sent.php",
  //        type:"POST",
  //        data:{receiver_ID:receiver_ID,message_content:message_content,sender_ID:sender_ID},
  //        dataType:"html",
  //        success:function(data)
  //        {
  //           $('.msg_history').load('message-content.php?receiver_ID='+receiver_ID);
            
  //        }
  //      }); 
  //   }
  // function DetectEnterPressed(e) {
  //       var characterCode
  //       if (e && e.which) { // NN4 specific code
  //           e = e
  //           characterCode = e.which
  //       }
  //       else {
  //           e = event
  //           characterCode = e.keyCode // IE specific code
  //       }
  //       if (characterCode == 13) return true // Enter key is 13
  //       else return false
  //   }
  
  
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
