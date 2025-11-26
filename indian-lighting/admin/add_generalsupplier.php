<!doctype html>
<?php
// Database configuration
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['company_name'])) {
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
    $ila_id = mysqli_real_escape_string($conn, $_POST['ila_id']);
    $contact_person = "0";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    // $website = mysqli_real_escape_string($conn, $_POST['website']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    // $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);
    // $categories = isset($_POST['category']) ? implode(',', $_POST['category']) : '';

    // $target_dir = "uploads/";
    // if (!is_dir($target_dir)) {
    //     mkdir($target_dir, 0777, true);
    // }

    // // Upload product_logo
    // $logo_name = basename($_FILES["product_logo"]["name"]);
    // $logo_path = $target_dir . time() . "_logo_" . $logo_name;
    // move_uploaded_file($_FILES["product_logo"]["tmp_name"], $logo_path);

    // // Upload catelog file 1
    // $catelog_name = basename($_FILES["catelog_file"]["name"]);
    // $catelog_path = $target_dir . time() . "_catelog_" . $catelog_name;
    // move_uploaded_file($_FILES["catelog_file"]["tmp_name"], $catelog_path);
    
    

    // // Upload ads image
    // $ads_name = basename($_FILES["product_image"]["name"]);
    // $ads_path = $target_dir . time() . "_ads_" . $ads_name;
    // move_uploaded_file($_FILES["product_image"]["tmp_name"], $ads_path);

    $sql = "INSERT INTO general_suppliers (company_name, email, phone, address,description) VALUES ('$company_name', '$email', '$phone',  '$address', '$description' )";
// echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "<div style='padding:10px;background:#d4edda;color:#155724;margin:10px;'>Supplier added successfully!</div>";
    } else {
        echo "<div style='padding:10px;background:#f8d7da;color:#721c24;margin:10px;'>Error: " . $conn->error . "</div>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms | Bootstrap Simple Admin</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <?php include 'side_bar.php'; ?>
    <div id="body" class="active">
        <?php include 'topbar.php'; ?>
        <div class="content">
            <div class="container">
                <div class="page-title"><h3>Add General Supplier</h3></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Add General Supplier</div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                   
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Company Name</label>
                                        <div class="col-sm-10"><input type="text" name="company_name" class="form-control" required></div>
                                    </div>
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">ILA ID</label>-->
                                    <!--    <div class="col-sm-10"><input type="text" name="ila_id" class="form-control" required></div>-->
                                    <!--</div>-->
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10"><input type="email" name="email" class="form-control"></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10"><input type="text" name="phone" class="form-control"></div>
                                    </div>
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Password</label>-->
                                    <!--    <div class="col-sm-10"><input type="password" name="password" class="form-control" required></div>-->
                                    <!--</div>-->
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control" required></div>
                                    </div>
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Website</label>-->
                                    <!--    <div class="col-sm-10"><input type="text" name="website" class="form-control"></div>-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Catelog File 1</label>-->
                                    <!--    <div class="col-sm-10"><input type="file" name="catelog_file" class="form-control"></div>-->
                                    <!--</div>-->
                                    <!-- <div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Catelog File 2</label>-->
                                    <!--    <div class="col-sm-10"><input type="file" name="catelog_file1" class="form-control"></div>-->
                                    <!--</div>-->
                                    <!-- <div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Catelog File 3</label>-->
                                    <!--    <div class="col-sm-10"><input type="file" name="catelog_file2" class="form-control"></div>-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Ads</label>-->
                                    <!--    <div class="col-sm-10"><input type="file" name="product_image" accept="image/*" class="form-control" required></div>-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Logo</label>-->
                                    <!--    <div class="col-sm-10"><input type="file" name="product_logo" accept="image/*" class="form-control" required></div>-->
                                    <!--</div>-->
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10"><textarea name="description" rows="3" class="form-control"></textarea></div>
                                    </div>
                                    <!--<div class="mb-3 row">-->
                                    <!--    <label class="col-sm-2 col-form-label">Created At</label>-->
                                    <!--    <div class="col-sm-10"><input type="date" name="created_at" class="form-control" required></div>-->
                                    <!--</div>-->
                                    <div class="mb-3 row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                                            <button type="reset" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- content -->
    </div><!-- body -->
</div><!-- wrapper -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/form-validator.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
