<?php
include 'session_init.php';

$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID is passed
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // First, get the ad to delete its image file if needed
    $sql = "SELECT img FROM supplier_list_ads WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $imagePath = $row['img'];

        // Delete DB record
        $deleteSql = "DELETE FROM supplier_list_ads WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("i", $id);
        
        if ($deleteStmt->execute()) {
            // Optional: delete the image from server if it exists and path is valid
            if (!empty($imagePath) && file_exists($imagePath)) {
                unlink($imagePath);
            }
            header("Location: viewsupplierlistads.php?msg=deleted");
            exit;
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Ad not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
