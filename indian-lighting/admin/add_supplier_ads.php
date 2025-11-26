<?php include 'session_init.php'; ?>

<?php
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $supplier_name = mysqli_real_escape_string($conn, $_POST['supplier_name']);
    $ad_link = mysqli_real_escape_string($conn, $_POST['ad_link']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    // File upload
    $target_dir = "uploads/ads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["ad_image"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;

    if (move_uploaded_file($_FILES["ad_image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO supplier_list_ads (supplier, img, link, status) 
                VALUES ('$supplier_name', '$target_file', '$ad_link', '$status')";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='alert alert-success'>Ad added successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    } else {
        $message = "<div class='alert alert-danger'>Error uploading image.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Supplier Ad</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <?php include 'side_bar.php'; ?>
    <div id="body" class="active">
        <?php include 'topslider.php'; ?>
        <div class="content">
            <div class="container">
                <div class="page-title"><h3>Add Supplier Ad</h3></div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $message ?>
                        <div class="card">
                            <div class="card-header">Manage Supplier Ads</div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <!--<div class="mb-3">-->
                                    <!--    <label for="supplier_name" class="form-label">Supplier Name</label>-->
                                    <!--    <input type="text" name="supplier_name" class="form-control" placeholder="Enter Supplier Name" required>-->
                                    <!--</div>-->

                                    <!--<div class="mb-3">-->
                                    <!--    <label for="ad_link" class="form-label">Ad Link (Optional)</label>-->
                                    <!--    <input type="text" name="ad_link" class="form-control" placeholder="https://example.com">-->
                                    <!--</div>-->

                                    <div class="mb-3">
                                        <label for="ad_image" class="form-label">Ad Image</label>
                                        <input type="file" name="ad_image" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-primary" value="Add Ad">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.content -->
    </div> <!-- /#body -->
</div> <!-- /.wrapper -->

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
