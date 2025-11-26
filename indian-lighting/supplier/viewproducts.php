<?php include 'session_init.php'; ?>
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

// session_start();
// $_SESSION['company']=$_GET['company']; // Output from CodeIgniter

$company= $_SESSION['company'];

$sql = "SELECT product_id, category_id, supplier_id, product_name, product_description, product_image, price, stock_quantity, is_active FROM products where supplier_id='$company'";

// echo $sql;
$result = $conn->query($sql);
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tables | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
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
            <h3>Products Table</h3>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Product Details</div>
                    <div class="card-body">
                        <table class="table table-hover" id="dataTables-example" width="100%">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Category ID</th>
                                    <th>Supplier ID</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['product_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['category_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['supplier_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['product_description']) . "</td>";
                echo "<td><img src='" . htmlspecialchars($row['product_image']) . "' width='60'></td>";
                echo "<td>Rs." . number_format($row['price'], 2) . "</td>";
                echo "<td>" . htmlspecialchars($row['stock_quantity']) . "</td>";
                echo "<td>" . ($row['is_active'] ? 'Active' : 'Inactive') . "</td>";
                echo "<td><a href='delete.php?product_id=".$row['product_id']."' onclick='return confirm(\"Are you sure you want to delete this?\");'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No products found.</td></tr>";
        }

        $conn->close();
        ?>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
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
    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>