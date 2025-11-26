<?php include 'session_init.php'; ?>

<?php
// DB connection
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_msg = '';
$error_msg = '';

if (isset($_FILES["gallery_image"])) {

    $supplier_id = $_SESSION['company'];
    $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $image_name = basename($_FILES["gallery_image"]["name"]);
    $target_file = $target_dir . $image_name;

    if (move_uploaded_file($_FILES["gallery_image"]["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO gallery (image, created_at) VALUES (?, NOW())");
        $stmt->bind_param("s", $target_file);

        if ($stmt->execute()) {
            $success_msg = "Gallery image uploaded successfully!";
        } else {
            $error_msg = "Database Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error_msg = "Error uploading file.";
    }

    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Gallery Image</title>
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
        <?php include 'topslider.php'; ?>
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>Add Gallery Image</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Upload Gallery</div>
                            <div class="card-body">

                                <?php if (!empty($success_msg)): ?>
                                    <div class="alert alert-success"><?= $success_msg; ?></div>
                                <?php endif; ?>

                                <?php if (!empty($error_msg)): ?>
                                    <div class="alert alert-danger"><?= $error_msg; ?></div>
                                <?php endif; ?>

                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="gallery_image" class="form-label">Select Image</label>
                                        <input type="file" name="gallery_image" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-primary" value="Upload">
                                    </div>
                                </form>

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
