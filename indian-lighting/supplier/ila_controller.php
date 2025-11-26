<?php
$host = "localhost";     // your DB host
$username = "ila_admin";      // your DB username
$password = "admin123!@#";          // your DB password
$dbname = "ila_db"; // replace with your DB name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo $_POST['supplier_id'];
// echo $_POST['supplier_id'];
if(isset($_POST['supplier_id'])){
    
    // echo $_POST['supplier_id'];
// Collect form data
$category_id        = mysqli_real_escape_string($conn, $_POST['category_id']);
$supplier_id        = mysqli_real_escape_string($conn, $_POST['supplier_id']);
$product_name       = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
$price              = mysqli_real_escape_string($conn, $_POST['price']);
$stock_quantity     = mysqli_real_escape_string($conn, $_POST['stock_quantity']);
$min_quantity     = mysqli_real_escape_string($conn, $_POST['min_quantity']);
// $is_active          = mysqli_real_escape_string($conn, $_POST['is_active']);


echo $category_id." ".$supplier_id;
// Handle image upload
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true); // create directory if not exists
}
$image_name = basename($_FILES["product_image"]["name"]);
$target_file = $target_dir .$image_name;

if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    // Image uploaded successfully, insert data into database
    $sql = "INSERT INTO `stock_exchange_products`(`id`, `product_name`, `category`, `description`, `available_quantity`, `min_order_quantity`, `price_per_unit`, `location`, `company_name`, `image`) VALUES ('$product_name','$category_id', '$product_description','$stock_quantity','$min_quantity', '$price','no','$supplier_id','$target_file')";
echo $sql;
    if ($conn->query($sql) === TRUE) {
        // echo "Product added successfully!";
        // header("Location: success_page.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading image.";
}

// $conn->close();
}


?>