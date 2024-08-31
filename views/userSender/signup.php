<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $username = 10186;
    $username += 2;

    $stmt = $conn->prepare("INSERT INTO users (name, phone, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $username, $password);

    if ($stmt->execute()) {
        echo "Registration successful";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

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

<section class="content-header">
    <img src="wows.png" alt="Logo" style="max-width: 300px; height: auto;">
    <h1>Sign Up</h1>
</section>

<section class="content">
    <div class="row">
        <div id="signup-box">
            <form action="" method="post">
                <label for="phone">Phone: </label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone" required />

                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required />

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required />

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</section>