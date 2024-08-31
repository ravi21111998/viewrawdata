<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="style.css"> <!-- Adjust the path as necessary -->

<style>
    .ban-form {
        margin-top: 20px;
    }

    .ban-form label {
        margin-right: 10px;
    }

    .ban-form input {
        padding: 8px;
    }
    .ban-form form {
        margin-top: 20px;
        display:flex;
        justify-content:center;
        margin:20px;
    }

    .ban-form button {
        background-color: #ff6666;
        border: none;
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        width:10%;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:18px;
        font-weight:800;
    }

    .ban-form button:hover {
        background-color: #cc0000;
    }

    .user-details {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
</style>
</head>
<body>
<section class="content-header">
    <h1>User Details</h1>
</section>

<section class="content">
    <div class="row">
        <div class="details-container">
            <?php
            //include "db.php";
            
            //  $data = $this->db->query("UPDATE users SET userBanStatus = 0 WHERE username = ?")->result_array();
             
             
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_id = $this->input->post('user_id');
                $ban_action = $this->input->post('ban_action');

                // Ensure the database connection is available
                if (isset($this->db)) {
                    // Determine the status based on the action
                    $status = ($ban_action === 'ban') ? 1 : 0;

                    // Update the user's ban status using the CodeIgniter query builder
                    $this->db->set('userBanStatus', $status);
                    $this->db->where('username', $user_id);
                    $this->db->update('users');
                }

                // Redirect back to the user details page
                redirect('OnlineServices/ViewUserDetails?id=' . $user_id);
                exit();
            }

            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Using prepared statement to prevent SQL injection
               // $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
               // $stmt->bind_param("s", $id);
               // $stmt->execute();
               // $stmt->store_result();

                // Bind the result variables
               // $stmt->bind_result($index, $name, $country, $id, $password, $phone, $status, $registration_date);

                $data = $this->db->query("select * from users WHERE username =$id")->result_array();
    

                // Check if any data is returned
                if (!empty($data)) {
                    // Assuming $data contains only one row since you're searching by username (which should be unique)
                    $user = $data[0];
                    $id = $user['username'];
                    $name = $user['name'];
                    $country = $user['Country'];
                    $phone = $user['phone'];
                    $status = $user['userBanStatus'];
                    $created_at = $user['created_at'];
                
                    echo '<div class="user-details">';
                    echo '<h2>User Details</h2>';
                    echo '<p><strong>ID:</strong> ' . htmlspecialchars($id) . '</p>';
                    echo '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>';
                    echo '<p><strong>Country:</strong> ' . htmlspecialchars($country) . '</p>';
                    echo '<p><strong>Phone Number:</strong> ' . htmlspecialchars($phone) . '</p>';
                    echo '<p><strong>Status:</strong> ' . ($status == 0 ? 'Active' : 'Banned') . '</p>';
                    echo '<p><strong>Registration Date:</strong> ' . htmlspecialchars($created_at) . '</p>';
                
                    // Uncomment to display ban reason if the user is banned
                    // if ($status == 0) {
                    //     echo '<p><strong>Ban Reason:</strong> ' . htmlspecialchars($ban_reason) . '</p>';
                    // }
                
                    echo '</div>';
                
                    // Ban/Unban form
                    echo '<div class="ban-form">';
                    echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">';
                    echo '<input type="hidden" name="user_id" value="' . htmlspecialchars($id) . '">';
                    // echo '<label for="reason">Reason:</label>';
                    // echo '<input type="text" id="reason" name="reason">';
                    echo '<button type="submit" name="ban_action" value="' . ($status == 0 ? 'ban' : 'unban') . '" style="display: flex; justify-content: center; align-items: center;">' . ($status == 0 ? 'Ban' : 'Unban') . '</button>';
                    echo '</form>';
                    echo '</div>';
                
                    // Link back to the search results page
                    echo '<p align="center"><a href="https://xrdsimulators.tech/wow_project/index.php/OnlineServices/totalUsers">Back to Search Results</a></p>';
                }  else {
                    echo '<p>No user found with the specified ID.</p>';
                }

                //$stmt->close();
            } else {
                echo '<p>No ID specified.</p>';
            }

            //$conn->close();
            ?>
        </div>
    </div>
</section>
</body>
<?php include("footer.php"); ?>
