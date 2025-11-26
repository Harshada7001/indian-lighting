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
$target_file = $target_dir . time() . "_" . $image_name;

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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --primary: #3b82f6;
      --bg: #f3f4f6;
      --text: #1f2937;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /*body {*/
    /*  min-height: 100vh;*/
    /*  background: var(--bg);*/
    /*  color: var(--text);*/
    /*  display: flex;*/
    /*  flex-direction: column;*/
    /*  align-items: center;*/
    /*  padding: 2rem 1rem;*/
    /*}*/

    /* Header */
    .header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 2rem;
      font-size: 1.75rem;
      font-weight: 600;
    }

    .header i {
      color: var(--primary);
    }

    /* Cards grid */
    .cards {
      width: 100%;
      max-width: 1200px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .card {
      display: block; /* allow whole card to be clickable */
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 2.5rem 1.5rem;
      text-align: center;
      transition: transform 0.3s;
      cursor: pointer;
      text-decoration: none; /* remove underline */
      color: inherit; /* keep text color */
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card i {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .card h3 {
      margin-bottom: 0.5rem;
      font-size: 1.25rem;
    }

    .card p {
      color: #6b7280;
    }
  </style>
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
                       <center><h3>Dashboard</h3></center> 
                    </div>
                    <div class="row">

                        <div class="col-lg-12">
    <div class="card">
       <section class="cards">
    <a href="add_products.php" class="card">
      <i class="fa-solid fa-plus"></i>
      <h3>Add Product</h3>
      <p>Create a new product listing.</p>
    </a>
     <a href="add_ila.php" class="card">
      <i class="fa-solid fa-plus"></i>
      <h3>Add ILA</h3>
      <p>Create a new product sponsored.</p>
    </a>
    <a href="add_catelog.php" class="card">
      <i class="fa-solid fa-folder-plus"></i>
      <h3>Add Catalog</h3>
      <p>Organize products into catalogs.</p>
    </a>
    <a href="viewproducts.php" class="card">
      <i class="fa-solid fa-table-list"></i>
      <h3>View Products</h3>
      <p>Browse and manage existing products.</p>
    </a>
    <a href="add_category.php" class="card">
  <i class="fa-solid fa-book-open"></i>
  <h3>Add Category</h3>
  <p>Add your product category.</p>
</a>

  </section>
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