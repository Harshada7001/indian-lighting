<?php
// Start session if needed
// session_start();

// DB Connection
$servername = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$database = "ila_db"; // Replace with your DB

$conn = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get IDs from URL or form
$product_id = $_GET['product_id'] ?? null;
$category_id = $_GET['category_id'] ?? null;
$detail_id = $_GET['detail_id'] ?? null;
$stock_id = $_GET['stock_id'] ?? null;
$supplier_id = $_GET['supplier_id'] ?? null;
$aid = $_GET['aid'] ?? null;
$pcid  = $_GET['pcid'] ??null;
if ($product_id) {
    $conn->query("DELETE FROM `products` WHERE `product_id` = '$product_id'");
    header('Location:viewproducts.php');
}

if ($category_id) {
    $conn->query("DELETE FROM `product_categories` WHERE `category_id` = '$category_id'");
    header('Location:viewcategory.php');
}

if ($detail_id) {
    $conn->query("DELETE FROM `product_detail` WHERE `id` = '$detail_id'");
    header('Location:viewsuplliers.php');
}

if ($stock_id) {
    $conn->query("DELETE FROM `stock_exchange_products` WHERE `id` = '$stock_id'");
    header('Location:viewsuplliers.php');
}

if ($supplier_id) {
    $conn->query("DELETE FROM `suppliers` WHERE `supplier_id` = '$supplier_id'");
    header('Location:viewsuplliers.php');
    // echo "DELETE FROM `suppliers` WHERE `supplier_id` = '$supplier_id'";
    
}

if ($aid) {
    $conn->query("DELETE FROM `supplier_ads` WHERE `aid` = '$aid'");
    header('Location:viewads.php');
}
if ($pcid) {
    $conn->query("DELETE FROM `product_catlog` WHERE `pcid` = '$pcid'");
    header('Location:viewcatlog.php');
}


$conn->close();
