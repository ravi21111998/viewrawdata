<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Online Services</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sender.css"> <!-- My customised css -->

    <!-- <script src="https://kit.fontawesome.com/399b1d9929.js" crossorigin="anonymous"></script> -->

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.2/firebase-auth.js"></script>
</head>

<body>
    <section class="content-header">
        <h1>Wows Online Services 1</h1>
    </section>




    <section class="content">
        <div class="row">
            <div id="chat-box">
                <div id="messages" style="overflow-y: scroll; max-height: 500px;"></div>

                <!-- <div id="attachment-preview"></div> -->
                <div class="input-container">
                    <div id="message-input">
                        <input type="text" id="message" placeholder="Type a message..." />
                        <button id="file-picker-btn" onclick="triggerFileInput()" class="attachment-icon">
                            &#128206;
                        </button>
                        <input type="file" id="attachment" style="display: none" />
                        <button class="send-btn" onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
    <?php
    include "db.php";

    $adminId = 1;
    
    // Prepare and bind SQL statement with parameterized query
    $stmt = $conn->prepare("SELECT username FROM admin WHERE id = ?");
    $stmt->bind_param("i", $adminId);

    // Execute query
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($adminUsername);

    // Fetch the result
    $stmt->fetch();

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();

    // Output the admin's username
    // echo "Admin's username: " . $adminUsername;
    ?>

    <script>
          const adminUsername = "<?php echo $adminUsername; ?>";

        document.getElementById('attachment').addEventListener('change', handleFileSelect);

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

                    const message = document.getElementById('message-input').value;
                    const timestamp = getCurrentTime();
                    const attachmentSrc = e.target.result;

                    const messageData = {
                        message,
                        attachmentSrc,
                        timestamp,
                        sender: currentUserSenderId,
                        recipient: 'admin',
                    };

                    if (currentChatRef) {
                        currentChatRef.push(messageData);
                    }

                    document.getElementById('message-input').value = '';
                    document.getElementById('file-input').value = '';
                    attachmentPreview.innerHTML = '';
                };

                reader.readAsDataURL(file);
            }
        }


        document.getElementById('message-input').addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                sendMessage();
            }
        });
        
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

        const messagesDiv = document.getElementById('messages');
        const messageInput = document.getElementById('message');
        const attachmentInput = document.getElementById('attachment');

        // Extract user info from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const userId = urlParams.get('id');
        const userName = urlParams.get('name');

        // Listen for new messages
        const messagesRef = db.ref(`OnlineServiceMessages/${userId}`);
        messagesRef.on('value', (snapshot) => {
            const messages = snapshot.val();
            messagesDiv.innerHTML = '';
            for (const messageId in messages) {
                const message = messages[messageId];
                displayMessage(message);
            }
        });

        // Convert file to Base64
        function getBase64(file, callback) {
            const reader = new FileReader();
            reader.onload = function () {
                callback(reader.result);
            };
            reader.readAsDataURL(file);
        }

        // Send a new message
        function sendMessage() {
            const message = messageInput.value;
            const file = attachmentInput.files[0];
            const newMessageRef = messagesRef.push();

            if (userId && userName) {
                db.ref('OnlineServiceChatusers/' + userId).set({
                    name: userName
                }).catch((error) => {
                    console.error('Error saving user data:', error);
                });
            }

            if (file) {
                getBase64(file, (base64) => {
                    newMessageRef.set({
                        sender: userName,
                        message: message,
                        attachmentSrc: base64,
                        timestamp: new Date().toLocaleTimeString()
                    });
                });
            } else {
                newMessageRef.set({
                    sender: userName,
                    message: message,
                    timestamp: new Date().toLocaleTimeString()
                });
            }

            messageInput.value = '';
            attachmentInput.value = '';
        }

        // Display a message
       // Display a message
function displayMessage(messageData) {
    const chatMessages = document.getElementById('messages');
    const isScrolledToBottom = chatMessages.scrollHeight - chatMessages.clientHeight <= chatMessages.scrollTop + 1;

    const messageContainer = document.createElement('div');
    messageContainer.className = 'message-container';

    const sentMessage = document.createElement('div');
    sentMessage.className = 'sent-message';
    if (messageData.sender === userName) {
        sentMessage.classList.add('user-message');
    } else {
        sentMessage.classList.add('admin-message');
    }

    // Construct the message content
    const messageContent = document.createElement('div');
    messageContent.className = 'message-content';

    // Sender's name in bold
    const senderName = document.createElement('strong');
    senderName.textContent = messageData.sender === userName ? userName : adminUsername;
    messageContent.appendChild(senderName);
    messageContent.appendChild(document.createElement('br')); // Line break for separation

    // Message text if it exists
    if (messageData.message) {
        const messageText = document.createElement('div');
        messageText.className = 'message-text';
        messageText.textContent = messageData.message;
        messageContent.appendChild(messageText);
    }

    // Attachment if it exists
    if (messageData.attachmentSrc) {
        const attachment = document.createElement('div');

        if (messageData.attachmentSrc.startsWith('data:image/')) {
            const img = document.createElement('img');
            img.src = messageData.attachmentSrc;
            img.style.width = '300px';
            img.style.height = 'auto';
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

        messageContent.appendChild(attachment);
    }

    sentMessage.appendChild(messageContent);

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

    </script>
</body>

</html>