
<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// include '../db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Fetch session and POST data
    $name = $this->session->userdata('online_services')['name'];
    $current_password = $this->input->post('current_password');
    $new_password = $this->input->post('new_password');
    $confirm_password = $this->input->post('confirm_password');

    // Validate new passwords
    if ($new_password !== $confirm_password) {
        // exit();
        $this->session->set_flashdata('message', 'New passwords do not match.');
        redirect(current_url());
        return;
    }

    // Query to get the current password hash
    $query = $this->db->query("SELECT password FROM onlineServiceDetails WHERE username = ?", array($name));
    $result = $query->row_array();

    if ($result && password_verify($current_password, $result['password'])) {
        // Hash the new password
        $new_hash = password_hash($new_password, PASSWORD_BCRYPT);

        // Update the new password in the database
        $this->db->query("UPDATE onlineServiceDetails SET password = ?,viewPassword = ? WHERE username = ?", array($new_hash, $new_password, $name));
        
        $this->session->set_flashdata('message', 'Password successfully changed.');
          redirect(current_url());
    } else {
        $this->session->set_flashdata('message', 'Current password is incorrect.');
          redirect(current_url());
    }
   
}
?>

<?php include("header.php"); ?>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.change-password-container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}
.message {
            color: red;
            margin-top: 15px;
        }
form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #3caea3;
    border: none;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #338a7d;
}
</style>
<section class="content-header">
    <h1>Change Password</h1>
</section>

<section class="content">
    <div class="row">
        <div class="change-password-container">
            <form action="" method="POST">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required>

                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>

                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Change Password</button>
            </form>
              <?php if ($this->session->flashdata('message')): ?>
                    <div class="message">
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
