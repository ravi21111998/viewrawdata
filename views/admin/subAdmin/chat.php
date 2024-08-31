 <style>
   .nav-tabs>li {
     float: inherit;
     margin-bottom: -1px;
   }

   ul.nav.nav-tabs li a {
     padding: 0;
     line-height: 31px;
     padding: 14px;
   }

   ul.nav.nav-tabs li {
     border-bottom: 1px solid gray;
   }

   .direct-chat-messages {
     height: 570px;
     background-image: url(<?= base_url() . 'uploads/admin/chat.jpeg' ?>);
     background-size: cover;
   }

   .input-group {
     position: relative;
     display: block;
     border-collapse: separate;
   }

   span.input-group-append {
     float: right;
     margin-top: 0px;
     margin-right: 0px;
     margin-bottom: 60px;
   }

   .card-footer input.form-control {
     width: 92% !important;
   }

   .card.direct-chat.direct-chat-primary .row,
   .card.direct-chat.direct-chat-primary .row .col-md-4,
   .card.direct-chat.direct-chat-primary .row .col-md-8 {
     margin: 0;
     padding: 0;
   }  
 </style>
 <div class="content-wrapper" style="min-height: 901px;">
   <div class="card direct-chat direct-chat-primary">
     <div class="card-header">
       <h2 class="card-title text-center">Direct Chat</h2>

       <!--<div class="card-tools">-->

       <!--  <span title="3 New Messages" class="badge badge-primary">3</span>-->
       <!--  <button type="button" class="btn btn-tool" data-card-widget="collapse">-->
       <!--    <i class="fas fa-minus"></i>-->
       <!--  </button>-->
       <!--  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">-->
       <!--    <i class="fas fa-comments"></i>-->
       <!--  </button>-->
       <!--  <button type="button" class="btn btn-tool" data-card-widget="remove">-->
       <!--    <i class="fas fa-times"></i>-->
       <!--  </button>-->
       <!--</div>-->
     </div>
     <div class="row">
       <div class="col-md-4">
         <ul class="nav nav-tabs" id="list-of-chat">

         </ul>
       </div>
       <div class="col-md-8">


         <!-- /.card-header -->
         <div class="chating tab-pane fade in active" id="chat">
           <div class="card-body">
             <!-- Conversations are loaded here -->
             <div class="direct-chat-messages">
               <ul class="contacts-list chat-finished" id="chat_head">
                 <!-- End Contact Item -->


               </ul>
               <!-- /.contacts-list -->
             </div>
             <!-- /.direct-chat-pane -->
           </div>
         </div>
         <!-- /.card-body -->
         <div class="card-footer">
           <form action="#" method="post" id="send_msg">
             <div class="input-group">
               <input type="text" name="message" id="msg" placeholder="Type Message ..." class="form-control">
               <span class="input-group-append">
                 <button type="submit" class="btn btn-primary">Send</button>
               </span>
             </div>
           </form>
         </div>
         <!-- /.card-footer-->
       </div>
       <!--/.direct-chat -->
     </div>
   </div>
 </div>
 <input type="hidden" id="set_user_id">

 <script src="http://3.132.251.129/app/assets/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <!-- Firebase -->
 <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>

 <script src="https://cdn.firebase.com/libs/firechat/3.0.1/firechat.min.js"></script>

 <script type="text/javascript">
   var vendorId = "<?= $Admin_Id ?>";

   getChatFrnd();
   /**@abstract
    * Load chat friends
    */
   function getChatFrnd() {

     $.ajax({
       type: "post",
       url: "<?= base_url("getChatFrinedListVendor") ?>",  
       cache: false,
       data: {

       },
       success: function(response) {

         $("#list-of-chat").html("");

         var data_res = response.details; 
         //console.log(data_res);

         $.each(data_res, function(i, item) {

           var new_message = (data_res[i].readStatus == "0" && data_res[i].type == "1") ? `<strong style="color:green; font-size:50px;">.</strong>` : '';

           $("#list-of-chat").append(`

                      <li class="active get-user-id" data-userid="` + data_res[i].id + `">
                          <a data-toggle="tab" href="#chat" class="d-flex">
                              <span style="padding: 13px 24px;">
                                  <img class="direct-chat-img" src="` + ((data_res[i].image == "") ? "<?= base_url("uploads/admin/1637230754_3056630.png") ?>" : "<?= base_url() ?>" + data_res[i].image) + `" alt="message user image">
                                  </span>
                              <span><strong>` + data_res[i].name + `</strong> ` + new_message + `</span>
                          </a>
                      </li>
                    `);
         });

       }
     });

   }

   // Initialize Firebase SDK
   var config = {
     apiKey: "AIzaSyDm_VjCJ0TAb4453YWzKHQMhSaUxaTxxMM",
     authDomain: "change-maker-cfe8a.firebaseapp.com",
     databaseURL: "https://change-maker-cfe8a-default-rtdb.firebaseio.com",
     projectId: "change-maker-cfe8a",
     storageBucket: "change-maker-cfe8a.appspot.com",
     messagingSenderId: "666052630213",
     appId: "1:666052630213:web:ea138413456ebaa9b5c2ac",
     measurementId: "G-10N0KLLC8Z"
   };

   firebase.initializeApp(config);
   // Get a reference to the Firebase Realtime Database
   var chatRef = firebase.database().ref('PanelChat');
   var lastMessage = firebase.database().ref('LastMessage');
   var notificationStatus = firebase.database().ref('UserStateInformation');


   let userId = "";

   $(document).on("click", ".get-user-id", function() {
     var ele = $(this);
     var old_rec = userId;

     $("#chat_head" + old_rec).html("");

     userId = ele.data("userid");
     userId = userId.toString();

     $("#set_user_id").val(userId);

     $("#chat_head" + old_rec).attr("id", "chat_head" + userId);
     getChat(userId);

   });

   firebase.database()
     .ref("LastMessage")
     .on("child_changed", function(snap) {
       getChatFrnd();

     });

   function getChat(userId) {

     chat_visualizaion = [];

     //console.log(chat_visualizaion);

     lastMessage.child(userId).update({
       "readStatus": "1"
     });

     firebase.database()
       .ref("PanelChat")
       .child(userId)
       .on("child_added", function(snap) {

         var key = "";

         var data = snap.val();

         if (chat_visualizaion[data.objectKey] == undefined) {
           //console.log(chat_visualizaion);

           if (data.type == "2") {
             $("#chat_head" + userId).append(`
            <div class="direct-chat-msg right" >
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-timestamp" style="float:right;" >` + data.date + ` ` + data.time + `</span>
              </div>
            
              <div class="direct-chat-text" style="width:fit-content; float:right;" >
              ` + data.message + `
              </div>
              
            </div>


          `);
           } else {
             $("#chat_head" + userId).append(`
              <div class="direct-chat-msg ">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-timestamp float-left" >` + data.date + ` ` + data.time + `</span>
                </div>
                
                <div class="direct-chat-text" style="width:fit-content">
                ` + data.message + `
                </div>
                
              </div>
          `);

           }

           chat_visualizaion[data.objectKey] = data;

         }
         //  key = snap.key()
         //console.log(snap.val())

         let div_height = $("#chat_head" + userId).height();

         //console.log(div_height);

         // Scroll to end of chat
         document.querySelector('.chat-finished').scrollIntoView({
           block: 'end', // "start" | "center" | "end" | "nearest",
           behavior: 'smooth' //"auto"  | "instant" | "smooth",
         });

       });
   }

   $("#send_msg").submit(function(event) {
     event.preventDefault();

     var elm = $("#msg");

     var userId = $("#set_user_id").val();

     userId = userId.toString();

     var msg = elm.val();

     if (msg != "") {
       sendMessage(userId, msg);

       sendUserNotification(userId, msg);

       elm.val("");

     }
   });

   function sendMessage(userId, msg) {

     const d = new Date();

     let random_key_generator = chatRef.child(userId).push().getKey();

     chatRef.child(userId).child(random_key_generator).set({
       date: d.getDate() + "-" + (d.getMonth() + 1) + "-" + (d.getYear() + 1900),
       objectKey: random_key_generator,
       message: msg,
       time: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds(),
       type: "2",
     });

     lastMessage.child(userId).update({
       readStatus: "0",
       type: "2",
       date: d.getDate() + "-" + (d.getMonth() + 1) + "-" + (d.getYear() + 1900),
       message: msg,
       time: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds(),

     });

   }
  
   function sendUserNotification(userId, msg) {

     //console.log(userId);

     firebase.database()
       .ref("UserStateInformation")
       .child(userId)
       .once("value", function(snap) {
         var data = snap.val();

         if (data == null) {
           $.ajax({
             url: "<?= base_url("new-message-notification") ?>",
             type: "post",
             cache: false,
             data: {
               userId: userId,
               message: msg,
             },
             success: function(response) {
               //console.log(response);
             }
           })
         }
       });
   }
   /**/
 </script>