
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
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
</style>
<html>
<head>

<link href="msg/font-awesome.css" type="text/css" rel="stylesheet">

</head>
<body>
<div class="container">
<div class="messaging">
      <div class="inbox_msg">
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
          <div class="inbox_chat" >
            <?php 

            $sql = "SELECT * FROM `research`";
           $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                 $date = date_create($row["research_Created"]);
                    ?>
                 <!--    active_chat -->
            <div class="chat_list ">
              <div class="chat_people">
                <div class="chat_img"> <img src="../assets/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib research" id="<?php echo $row["research_ID"];?>">
                  <h5><?php echo $row["research_Title"];?><span class="chat_date"><?php echo  date_format($date,"Y/m/d H:i:s");?></span></h5>
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
              <form>
              <input type="text" class="write_msg" placeholder="Type a message" />
              
              <button class="msg_send_btn" type="button"><i class="material-icons" aria-hidden="true">send</i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      
    </div></div>
<script type="text/javascript">

$(document).ready(function(){

    $(document).on('click', '.research', function(){
    

    var research_ID = $(this).attr("id");
   
  
      $.ajax({
        url:"message-content.php",
        type:"POST",
        data:{research_ID:research_ID},
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
     var  conversation_ID = $('#conversation_ID').val();
     var sender_ID = <?php echo $_SESSION['login_id'];?>;
     alert(conversation_ID);
     // $.ajax({
     //   url:"message-sent.php",
     //   type:"POST",
     //   data:{conversation_ID:conversation_ID,message_content:message_content,sender_ID:sender_ID},
     //   dataType:"html",
     //   success:function(data)
     //   {
     //      $('.msg_history').load('message-content.php?research_ID='+conversation_ID);
          
     //   }
     // });  
  });


  
  
});
   </script>
    </body>
    </html>
