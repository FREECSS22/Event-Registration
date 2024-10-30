<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    // Get the form inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = md5($_POST['pass']); // Assuming passwords are stored as md5 hashes

    try {
        // First, check in the admin table
        $selectAdmin = $conn->prepare("SELECT * FROM `admin` WHERE email = ? AND password = ?");
        $selectAdmin->execute([$email, $pass]);
        $adminRow = $selectAdmin->fetch(PDO::FETCH_ASSOC);

        if ($adminRow) {
            // Admin credentials matched
            $_SESSION['admin_id'] = $adminRow['id'];
            header('location: ../view/admin_dashboard/try.php');
            exit();
        }

        // If not an admin, check in the youth table
        $selectYouth = $conn->prepare("SELECT * FROM `youth` WHERE email = ? AND password = ?");
        $selectYouth->execute([$email, $pass]);
        $youthRow = $selectYouth->fetch(PDO::FETCH_ASSOC);

        if ($youthRow) {
            // Youth credentials matched
            $_SESSION['youth_id'] = $youthRow['id'];
            header('location: ../view/youth_dashboard/index.php');
            exit();
        }

        // If neither matched, set an error message
        $message[] = 'Incorrect email or password!';
    } catch (PDOException $e) {
        // Handle database errors
        $message[] = 'Database error: ' . $e->getMessage();
    }

    // Display messages if set
    if (isset($message)) {
        foreach ($message as $msg) {
            echo "<p>$msg</p>";
        }
    }
}
?>
