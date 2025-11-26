<?php
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Get file path to delete image file
    $result = $conn->query("SELECT image FROM gallery WHERE id = $id");
    if ($result && $row = $result->fetch_assoc()) {
        $file = $row['image'];
        if (file_exists($file)) {
            unlink($file);
        }
    }

    // Delete from database
    $conn->query("DELETE FROM gallery WHERE id = $id");
}

$conn->close();
header("Location: view_gallery.php");
exit;
