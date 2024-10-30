<?php
$db_name = "mysql:host=localhost;dbname=sktunasan"; // Your database name
$username = "root";
$password = "";

try {
    $conn = new PDO($db_name, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
