<?php
// include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $ban_action = $_POST['ban_action'];
    // $reason = $_POST['reason'];

    // Use prepared statement to prevent SQL injection
    if ($ban_action === 'ban') {
        $stmt = $conn->prepare("UPDATE users SET userBanStatus = 0 WHERE username = ?");
    } elseif ($ban_action === 'unban') {
        $stmt = $conn->prepare("UPDATE users SET userBanStatus = 1 WHERE username = ?");
    }

    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    $stmt->close();
}

$conn->close();

// Redirect back to the viewdetails.php page
header("Location: viewdetails.php?id=" . $user_id);
exit();
?>
