
<?php
$name = $this->session->userdata('online_services')['name'];
echo "Welcome, " . $name;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Online Services</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />


  <!-- Icon and manifest links for various devices -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/onlineServicesFavicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon-16x16.png" />
  <link rel="icon" sizes="192x192" href="<?php echo base_url();?>assets/onlineServicesFavicon/android-chrome-192x192.png" />
  <link rel="icon" sizes="512x512" href="<?php echo base_url();?>assets/onlineServicesFavicon/android-chrome-512x512.png" />
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon.ico" />
  <link rel="manifest" href="<?php echo base_url();?>assets/onlineServicesFavicon/site.webmanifest" />



  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/ionicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/datepicker3.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/all.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/select2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/dataTables.bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/jquery.fancybox.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/AdminLTE.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/_all-skins.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/on-off-switch.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/summernote.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css" />

  <script src="https://kit.fontawesome.com/399b1d9929.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <!-- Firebase -->
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    #chat-box {
      max-width: 99%;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #chat-messages {
      height: 450px;
      overflow-y: scroll;
      padding: 10px;
    }


    .message-container {
      clear: both;
      overflow: hidden;
    }

    .sent-message {
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 10px;
      word-wrap: break-word;
      max-width: 70%;
    }

    .admin-message {
      background-color: lightblue;
      color: #333;
      float: right;
    }

    .user-message {
      background-color: lightgreen;
      color: #333;
      float: left;
    }

    .timestamp {
      font-size: 10px;
      color: #999;
      margin-top: 5px;
    }

    .sent-message img {
      max-width: 100px;
      display: block;
      margin-top: 5px;
    }

    .timestamp {
      font-size: 10px;
      color: #999;
      margin-top: 5px;
    }

    #attachment-preview {
      max-width: 100%;
      overflow: hidden;
      padding: 10px;
    }

    .input-container {
      position: relative;
    }

    input {
      width: calc(100% - 150px);
      padding: 10px;
      margin: 5px;
    }

    .attachment-icon {
      position: absolute;
      right: 120px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      border: none;
      width: 20px;
      background: #fff;
    }

    .send-btn {
      background-color: #3caea3;
      border-radius: 4px;
      color: #fff;
      width: 100px;
      padding: 10px;
      cursor: pointer;
      border: none;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      height: 43px;
    }

    .send-btn:hover {
      background-color: #338a7d;
    }

    .usersli {
      font-size: 22px;
      background-color: #333;
      color: white;
      cursor: pointer;
      padding: 10px;
      margin: 10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      transition: 0.3s;
    }

    .usersli:hover {
      background-color: #338a7d;
    }

    .unread-dot {
      width: 10px;
      height: 10px;
      background-color: red;
      border-radius: 50%;
      display: inline-block;
      margin-left: 5px;
    }
  </style>
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="<?php echo site_url()?>/OnlineServices/home" class="logo">
        <span class="logo-lg"><img src="<?php echo base_url();?>assets/wows.png" alt="" width="40px" style="margin-left: 30%" /></span>
      </a>

      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <span style="
              float: left;
              line-height: 50px;
              color: #fff;
              padding-left: 15px;
              font-size: 18px;
            ">Online Services Admin</span>
        <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/wows.png" class="user-image" alt="User Image">
                <span class="hidden-xs">
                  <?php echo "Welcome, " . $name; ?>
                  <!--<php echo $name; ?>-->
                  <!--<php echo "adminnNN1"; ?>-->
                <!--</span>-->
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <!-- <div>-->
                  <!--  <a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>-->
                  <!--</div>-->
                  <div>
                    <a id="logoutBtn" class="btn btn-default btn-flat" href="<?php echo site_url()?>/OnlineServices/logout">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- <?php $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?> -->
    <!-- Side Bar to Manage Shop Activities -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu" id="userList">
          <li class="treeview">
            <a href="<?php echo site_url()?>/OnlineServices/home">
              <i class="fa fa-dashboard"></i> <span>Home</span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo site_url()?>/OnlineServices/totalUsers">
              <i class="fa fa-message"></i> <span>Total users </span>
            </a>
          </li>

          <li class="treeview" >
            <a href="<?php echo site_url()?>/OnlineServices/changePassword" >
              <i class="fa fa-message"></i> <span>Change Password</span>
            </a>
          </li>

          <li class="treeview <?php if (($cur_page == '<?php echo site_url()?>/OnlineServices/ViewAllDetails')) {
            echo 'active';
          } ?>">
            <a href="<?php echo site_url()?>/OnlineServices/ViewAllDetails">
              <i class="fa fa-message"></i> <span>Chat</span>
            </a>
          </li>
        </ul>
        <div id="users-list">
          <h3>Chat Users</h3>
          <!-- Add search bar to search chat users -->
          <input type="text" id="searchUser" placeholder="Search users..."
            style="width: 220px;border: none;border-radius: 10px;">
          <ol id="users"></ol>
        </div>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <button id="deleteAllButton" onclick="deleteAllMessages()" class="btn btn-danger" align="right">Delete All
          Messages</button>
        <h1>Online Services Admin</h1>
      </section>

      <!-- Bootstrap delete toast -->
      <div id="delete-toast" class="alert alert-success" style="display: none;">Chat Cleared Successfully!</div>
      <!-- Bootstrap delete error toast -->
      <div id="delete-error-toast" class="alert alert-danger" style="display: none;">Error Deleting message!</div>
      <section class="content">
        <div class="row">
          <div id="chat-box">
            <!-- <div id="chat-window"> -->
            <div id="chat-messages">
              <div id="messages"></div>
            </div>

            <div id="attachment-preview"></div>
            <div class="input-container">
              <div id="message-input">
                <input type="text" id="message" placeholder="Type a message..." />
                <button id="file-input" onclick="triggerFileInput()" class="attachment-icon">
                  &#128206;
                </button>
                <input type="file" id="attachment" accept="image/*" style="display: none" />
                <button class="send-btn" onclick="sendMessage()">Send</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
      // require_once('footer.php'); ?>
      <script>
        // Get the admin's name from PHP session
       var adminName = "<?php echo $name; ?>";
        //var adminName = "admin";
        console.log("Admin's Name:", adminName);

      </script>

      <script>
        document.getElementById('message-input').addEventListener('keydown', function (e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
          }
        });

        // event listener to the search input for real-time searching
        document.getElementById('searchUser').addEventListener('input', function () {
          const searchText = this.value.toLowerCase();
          const users = document.querySelectorAll('#users li');

          users.forEach(user => {
            const username = user.textContent.toLowerCase();
            if (username.includes(searchText)) {
              user.style.display = 'block';
            } else {
              user.style.display = 'none';
            }
          });
        });

        function triggerFileInput() {
          const fileInput = document.getElementById('attachment');
          fileInput.click();
        }

        function handleFileSelect(event) {
          const fileInput = event.target;
          const attachmentPreview = document.getElementById('attachment-preview');

          while (attachmentPreview.firstChild) {
            attachmentPreview.removeChild(attachmentPreview.firstChild);
          }

          const files = fileInput.files;
          if (files.length > 0) {
            const file = files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
              const img = document.createElement('img');
              img.src = e.target.result;
              img.style.maxWidth = '100%';
              img.style.height = 'auto';
              attachmentPreview.appendChild(img);

              // Save the file to Firebase along with the message
              const message = document.getElementById('message-input').value;
              const timestamp = getCurrentTime();
              const attachmentSrc = e.target.result;

              const messageData = {
                message,
                attachmentSrc,
                timestamp,
                sender: 'admin', // Specify the sender as 'sender'
              };

              // Save the message to Firebase in mergedMessages
              mergedMessagesRef.push(messageData);

              // Clear input fields
              document.getElementById('message-input').value = '';
              document.getElementById('file-input').value = '';
              attachmentPreview.innerHTML = '';
            };

            reader.readAsDataURL(file);
          }
        }
        // Firebase configuration
        const firebaseConfig = {
          apiKey: "AIzaSyBNXwQ1j7M7BdulUTT9dWk2xdtwVGYAL_s",
          databaseURL: "https://wows-6902f-default-rtdb.firebaseio.com",
          projectId: "wows-6902f",
          storageBucket: "wows-6902f.appspot.com",
          messagingSenderId: "831085508894",
          appId: "1:831085508894:android:680f361061a6ca99f4b10f",
          // measurementId: "G-55N8HZZEY2"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const db = firebase.database();

        const usersList = document.getElementById('users');
        const messagesDiv = document.getElementById('messages');
        const messageInput = document.getElementById('message');
        const attachmentInput = document.getElementById('attachment');

        let selectedUser = null;

        // Check if admin is logged in
        fetch('check_admin.php')
          .then(response => response.json())
          .then(data => {
            if (!data.logged_in) {
              window.location.href = 'admin_login.php';
            }
          });

        // Listen for users who have sent messages
        const usersRef = db.ref('OnlineServiceChatusers');
        usersRef.on('value', (snapshot) => {
          const users = snapshot.val();
          usersList.innerHTML = '';
          for (const userId in users) {
            const li = document.createElement('li');
            li.textContent = users[userId].name;
            li.onclick = () => selectUser(userId);
            li.className = 'usersli';

            // Add unread dot if there are unread messages for this user
            const dot = document.createElement('span');
            dot.className = 'unread-dot';
            dot.id = `unread-dot-${userId}`;
            li.appendChild(dot);

            usersList.appendChild(li);
          }
        });

        // Select a user to chat with
        function selectUser(userId) {
          selectedUser = userId;
          updateUnreadDot(userId, false); // Clear the unread dot when selecting a user
          loadMessages(userId);
        }

        // Load messages for the selected user
        function loadMessages(userId) {
          const messagesRef = db.ref(`OnlineServiceMessages/${userId}`);
          messagesRef.on('value', (snapshot) => {
            const messages = snapshot.val();
            messagesDiv.innerHTML = '';
            for (const messageId in messages) {
              const message = messages[messageId];
              displayMessage(message);
            }
          });
        }

        function getCurrentDateTime() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are zero-based
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
        
            return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
        }


        // Send a new message
        function sendMessage() {
          const message = messageInput.value;
          const file = attachmentInput.files ? attachmentInput.files[0] : null;
          const newMessageRef = db.ref(`OnlineServiceMessages/${selectedUser}`).push();

          if (file) {
            getBase64(file, (base64) => {
              newMessageRef.set({
                sender: 'admin',
                message: message,
                attachmentSrc: base64,
                // timestamp: new Date().toLocaleTimeString()
                timestamp: getCurrentDateTime()
              });
            });
          } else {
            newMessageRef.set({
              sender: 'admin',
              message: message,
            //   timestamp: new Date().toLocaleTimeString()
              timestamp: getCurrentDateTime()
            });
          }

          messageInput.value = '';
          attachmentInput.value = '';
        }


        // Convert file to Base64
        function getBase64(file, callback) {
          const reader = new FileReader();
          reader.onload = function () {
            callback(reader.result);
          };
          reader.readAsDataURL(file);
        }

        // Display a message
        function displayMessage(messageData) {
          const chatMessages = document.getElementById('messages');
          const isScrolledToBottom = chatMessages.scrollHeight - chatMessages.clientHeight <= chatMessages.scrollTop + 1;

          const messageContainer = document.createElement('div');
          messageContainer.className = 'message-container';

          const sentMessage = document.createElement('div');
          sentMessage.className = 'sent-message';

          // Determine if sender is admin or user
          if (messageData.sender === 'admin') {
            sentMessage.classList.add('admin-message');
            sentMessage.innerHTML = `<strong>${adminName}: </strong>`;
          } else {
            sentMessage.classList.add('user-message');
            sentMessage.innerHTML = `<strong>${messageData.sender}: </strong>`;
          }

          // Add message text if it exists
          if (messageData.message) {
            const messageText = document.createElement('div');
            messageText.textContent = messageData.message;
            sentMessage.appendChild(messageText);
          }

          // Add attachment if it exists 
          if (messageData.attachmentSrc) {
            const attachment = document.createElement('div');

            if (messageData.attachmentSrc.startsWith('data:image/')) {
              const img = document.createElement('img');
              img.src = messageData.attachmentSrc;
              img.style.width = '300px';
              img.style.borderRadius = '5px';
              attachment.appendChild(img);
            } else if (messageData.attachmentSrc.startsWith('data:application/pdf')) {
              const a = document.createElement('a');
              a.href = messageData.attachmentSrc;
              a.textContent = 'View PDF';
              a.target = "_blank";
              attachment.appendChild(a);
            } else {
              const a = document.createElement('a');
              a.href = messageData.attachmentSrc;
              a.textContent = 'Download Attachment';
              a.target = "_blank";
              attachment.appendChild(a);
            }
            sentMessage.appendChild(attachment);
          }

          // Add timestamp
          const timestamp = document.createElement('div');
          timestamp.className = 'timestamp';
          timestamp.textContent = messageData.timestamp;
          sentMessage.appendChild(timestamp);

          messageContainer.appendChild(sentMessage);
          chatMessages.appendChild(messageContainer);

          // Scroll to bottom if necessary
          if (isScrolledToBottom) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
          }
        }




        var MessagesRef = db.ref("OnlineServiceMessages");
        const bootstrapToast = document.getElementById('delete-toast');
        const bootstrapErrorToast = document.getElementById('delete-error-toast');

        function deleteAllMessages() {
          const confirmDelete = confirm("Are you sure you want to delete all messages?");

          if (confirmDelete) {
            // Remove all messages from Firebase
            MessagesRef.remove()
              .then(() => {
                console.log("All messages deleted successfully from Firebase.");
                bootstrapToast.style.display = 'block';
              })
              .catch((error) => {
                console.error("Error deleting all messages from Firebase:", error);
                bootstrapErrorToast.style.display = 'block';
              });

            // Remove all messages from the DOM
            const chatMessages = document.getElementById('chat-messages');
            chatMessages.innerHTML = ''; // Remove all child elements
          }
        }

        // Update unread dot for a user
        function updateUnreadDot(userId, hasUnreadMessages) {
          const dot = document.getElementById(`unread-dot-${userId}`);
          if (hasUnreadMessages) {
            dot.style.display = 'inline-block';
          } else {
            dot.style.display = 'none';
          }
        }

        // Listen for new messages and update unread dot
        function setupUnreadMessagesListener(userId) {
          const messagesRef = db.ref(`OnlineServiceMessages/${userId}`);
          messagesRef.on('child_added', (snapshot) => {
            const message = snapshot.val();
            displayMessage(message);

            // Set unread dot for the selected user
            if (userId !== selectedUser) {
              updateUnreadDot(userId, true);
            }
          });

          // Mark messages as read when user selects the chat
          const userRef = db.ref(`OnlineServiceChatusers/${userId}`);
          userRef.on('value', () => {
            updateUnreadDot(userId, false);
          });
        }

      </script>


    </div>

  </div>

  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/select2.full.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.inputmask.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.inputmask.extensions.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/icheck.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/fastclick.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/app.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/jscolor.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/on-off-switch.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/on-off-switch-onload.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/clipboard.min.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/demo.js"></script>
  <script src="<?php echo base_url();?>assets/onlineServicesJS/summernote.js"></script>
  <!-- include toastr.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- <script src="script2.js"></script> -->