<?php
include 'db.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $phone = $_POST['phone'];
//     $password = $_POST['password'];

//     $stmt = $conn->prepare("SELECT name, password, username FROM users WHERE phone = ?");
//     $stmt->bind_param("s", $phone);
//     $stmt->execute();
//     $stmt->store_result();
//     $stmt->bind_result($name, $hashed_password, $id);
//     $stmt->fetch();

//     if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
//         session_start();
//         $_SESSION['user_id'] = $id;
//         $_SESSION['user_name'] = $name;

//         // Redirect to user.html with user info
//         header("Location: sender.php?id=$id&name=$name");
//     } else {
//         echo "Invalid username or password";
//     }

//     $stmt->close();
//     $conn->close();
// }
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #592d92;
            color: #fff;
            margin: 0;
        }

        .content-header {
            background-color: #592d92;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        #login-box,
        #signup-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #592d92;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #401f6a;
        }
    </style>
</head>
<body>

<section class="content-header">
    <img src="wows.png" alt="Logo" style="max-width: 300px; height: auto;">
    <h1>Login</h1>
</section>

<section class="content">
    <div class="row">
        <div id="login-box">
    <form id="loginForm" method="post">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Login</button>
        </form>
        </div>
    </div>
</section>
</body>
</html>
