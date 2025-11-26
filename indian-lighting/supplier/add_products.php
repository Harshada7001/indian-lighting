<?php include 'session_init.php'; ?>
<?php
// Database configuration
$host = "localhost";     // your DB host
$username = "ila_admin";      // your DB username
$password = "admin123!@#";          // your DB password
$dbname = "ila_db"; // replace with your DB name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
$is_active          = mysqli_real_escape_string($conn, $_POST['is_active']);

// Handle image upload
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true); // create directory if not exists
}
$image_name = basename($_FILES["product_image"]["name"]);
$target_file = $target_dir.$image_name;

if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    // Image uploaded successfully, insert data into database
    $sql = "INSERT INTO products (category_id, supplier_id, product_name, product_description, product_image, price, stock_quantity, is_active) 
            VALUES ('$category_id', '$supplier_id', '$product_name', '$product_description', '$target_file', '$price', '$stock_quantity', '$is_active')";
// echo $sql;
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
        <div class="card-header">Add New Product</div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- Category ID -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Category ID</label>
                    <div class="col-sm-10">
                         <select class="form-control" name="category_id">
                                <option value="0">Select Category</option>
                          
                        <?php
                         // Image uploaded successfully, insert data into database
    $sql = "SELECT * FROM `product_categories`";
$result=$conn->query($sql) ;
   while($row=$result->fetch_assoc()){
                        ?>
                       
                            <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>
                            
                            <?php } ?>
                        </select>
                        <!--<input type="number" name="category_id" class="form-control" required>-->
                    </div>
                </div>

                <!-- Supplier ID -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="supplier_id" class="form-control" value="<?php echo $_SESSION['company'];?>" readonly>   
                    </div>
                </div>

                <!-- Product Name -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="product_name" class="form-control" required>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Product Description</label>
                    <div class="col-sm-10">
                        <textarea name="product_description" class="form-control" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Product Image -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="product_image" accept="image/*" class="form-control" required>
                    </div>
                </div>

                <!-- Price -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" step="0.01" class="form-control" required>
                    </div>
                </div>

                <!-- Stock Quantity -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Stock Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock_quantity" class="form-control" required>
                    </div>
                </div>

                <!-- Is Active -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Is Active</label>
                    <div class="col-sm-10">
                        <select name="is_active" class="form-select">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mb-3 row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Product</button>
                    </div>
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