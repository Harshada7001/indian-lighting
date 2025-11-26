<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->

<?php
// Database configuration
$host = "localhost";     // your DB host
$username = "ila_admin";      // your DB username
$password = "admin123!@#";          // your DB password
$dbname = "ila_db"; // replace with your DB name

$conn = new mysqli($host, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['company_name'])){
// Collect and sanitize form data
//$supplier_id     = mysqli_real_escape_string($conn, $_POST['supplier_id']);
$company_name    = mysqli_real_escape_string($conn, $_POST['company_name']);
$contact_person  = mysqli_real_escape_string($conn, $_POST['contact_person']);
$email           = mysqli_real_escape_string($conn, $_POST['email']);
$phone           = mysqli_real_escape_string($conn, $_POST['phone']);
$password          = mysqli_real_escape_string($conn, $_POST['password']);
$address         = mysqli_real_escape_string($conn, $_POST['address']);
$website         = mysqli_real_escape_string($conn, $_POST['website']);
$description     = mysqli_real_escape_string($conn, $_POST['description']);
$created_at      = mysqli_real_escape_string($conn, $_POST['created_at']);
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true); // create directory if not exists
}
$image_name = basename($_FILES["product_logo"]["name"]);
$target_file = $target_dir . time() . "_" . $image_name;

// echo $image_name;

if (move_uploaded_file($_FILES["product_logo"]["tmp_name"], $target_file)) {
// SQL Insert query
$sql = "INSERT INTO suppliers (
    supplier_id, company_name, contact_person, email, phone,password, address, website, description, created_at,logo
) VALUES (
    null, '$company_name', '$contact_person', '$email', '$phone','$password', '$address', '$website', '$description', '$created_at','$target_file'
)";

// echo $sql;

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Supplier added successfully!";
    // Optional: redirect to another page
    // header("Location: success_page.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Close DB connection
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
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
<!--                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>-->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                
                                <?php
session_start();
$_SESSION['company']=$_GET['company']; // Output from CodeIgniter


?>
<?php
// session_start();

// echo "Supplier ID: " . $_SESSION['supplier_id'] . "<br>";
// echo "Company Name: " . $_SESSION['company'];
?>

                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span><?php echo $_GET['company']; ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
<!--                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>-->
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Forms</h3>
                    </div>
                    <div class="row">

                      <div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Supplier</div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
<!--                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Supplier ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="supplier_id" class="form-control">
                    </div>
                </div>-->

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="company_name" class="form-control">
                    </div>
                </div>

                <!--<div class="mb-3 row">-->
                <!--    <label class="col-sm-2 col-form-label">Contact Person</label>-->
                <!--    <div class="col-sm-10">-->
                <!--        <input type="text" name="contact_person" class="form-control">-->
                <!--    </div>-->
                <!--</div>-->

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-10">
                        <input type="text" name="website" class="form-control">
                    </div>
                </div>
  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <input type="file" name="product_logo" accept="image/*" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Created At</label>
                    <div class="col-sm-10">
                        <input type="date" name="created_at" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</button>
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