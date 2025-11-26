<?php include 'session_init.php'; ?>
<?php
// Database connection settings
$host = "localhost";     // your DB host
$username = "ila_admin";      // your DB username
$password = "admin123!@#";          // your DB password
$dbname = "ila_db"; // replace with your DB name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// if (isset($_POST['category_name'])) {
    $category_name=$_POST['category_name'];
    $category_desc=$_POST['description'];
// Get form data safely
//$category_id    = mysqli_real_escape_string($conn, $_POST['category_id']);
// $target_dir = "uploads/";
// if (!is_dir($target_dir)) {
//     mkdir($target_dir, 0777, true); // create directory if not exists
// }
// $image_name = basename($_FILES["product_image"]["name"]);
// $target_file = $target_dir . time() . "_" . $image_name;

// if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    // Image uploaded successfully, insert data into database
    $sql = "INSERT INTO `product_categories`(`category_id`, `category_name`, `category_icon`, `description`) VALUES (null,'$category_name','no','$category_desc')";
// echo $sql;
    if ($conn->query($sql) === TRUE) {
        // echo "Product added successfully!";
        // header("Location: success_page.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
// } else {
//     echo "Error uploading image.";
// }
// Close DB connection
$conn->close();
// }
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forms | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
     <?php include 'side_bar.php';?>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?php include 'topslider.php';?>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Forms</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Category</div>
        <div class="card-body">
            <form method="post" action="" accept-charset="utf-8">
           

                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" rows="3" placeholder="Enter Description" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Add Category">
                </div>
            </form>
        </div>
    </div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>