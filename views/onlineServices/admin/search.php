<?php
// include "../db.php";

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // Using prepared statement to prevent SQL injection
    // $stmt = $conn->prepare("SELECT username, name, phone, userBanStatus FROM users WHERE username = ?");
    // $stmt->bind_param("s", $search);
    // $stmt->execute();
    // $stmt->store_result();
    $data = $this->db->query("select username, name, phone, userBanStatus from users WHERE username =$search")->result_array();
    // Bind the result variables
    //$stmt->bind_result($id, $name, $phone, $status);
    
    // // Display search results in a table
    // if ($stmt->num_rows > 0) {
    //     echo '<table>';
    //     echo '<tr><th>ID</th><th>Name</th><th>Phone</th><th>Status</th><th>Actions</th></tr>';
    //     while ($stmt->fetch()) {
    //         echo '<td>' . $id . '</td>';
    //         echo '<td>' . $name . '</td>';
    //         echo '<td>' . $phone . '</td>';
    //         echo '<td>' . ($status ? 'Active' : 'Banned') . '</td>';
    //         echo '<td><a href="viewdetails.php?id=' . $id . '"><button class="view-details">View Details</button></a></td>';
    //         echo '</tr>';
    //     }
    //     echo '</table>';
    // } else {
    //     echo '<p>No results found.</p>';
    // }

    // $stmt->close();
   // Check if data is not empty
if (!empty($data)) {
    // Assuming $data contains only one row since you're searching by username (which should be unique)
    $user = $data[0];
    $id = $user['username'];
    $name = $user['name'];
    $phone = $user['phone'];
    $status = $user['userBanStatus'];

    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Phone</th><th>Status</th><th>Actions</th></tr>';
    echo '<tr>';
    echo '<td>' . htmlspecialchars($id) . '</td>';
    echo '<td>' . htmlspecialchars($name) . '</td>';
    echo '<td>' . htmlspecialchars($phone) . '</td>';
    echo '<td>' . (!$status ? 'Active' : 'Banned') . '</td>';
    echo '<td><a href="ViewUserDetails?id=' . urlencode($id) . '"><button class="view-details">View Details</button></a></td>';
    echo '</tr>';
    echo '</table>';
} else {
    echo '<p>No results found.</p>';
}
}

// $conn->close();
?>
