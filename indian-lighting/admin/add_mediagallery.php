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

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $upload_dir = "uploads/";

    // -------- Handle Media Image Upload --------
    $media_image = "";
    if (!empty($_FILES['media_image']['name'])) {
        $img_file = $_FILES['media_image']['name'];
        $img_tmp  = $_FILES['media_image']['tmp_name'];
        $img_ext  = pathinfo($img_file, PATHINFO_EXTENSION);

        // Allow only image formats
        $allowed_img = ['jpg','jpeg','png','gif','webp'];
        if (in_array(strtolower($img_ext), $allowed_img)) {
            $new_img_name = time() . '_img_' . basename($img_file);
            $img_destination = $upload_dir . $new_img_name;
            if (move_uploaded_file($img_tmp, $img_destination)) {
                $media_image = $new_img_name;
            }
        }
    }

    // -------- Handle PDF Upload --------
    $file = $_FILES['pdf_file']['name'];
    $tmp_name = $_FILES['pdf_file']['tmp_name'];
    $file_ext = pathinfo($file, PATHINFO_EXTENSION);

    if (strtolower($file_ext) !== "pdf") {
        die("Only PDF files are allowed.");
    }

    $new_filename = time() . '_pdf_' . basename($file);
    $destination = $upload_dir . $new_filename;

    if (move_uploaded_file($tmp_name, $destination)) {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO media_gallery (media_image, title, file_name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $media_image, $title, $new_filename);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "PDF uploaded successfully with media image.";
        } else {
            echo "Failed to insert record.";
        }

        $stmt->close();
    } else {
        echo "Failed to move uploaded PDF.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add PDF | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
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
                        <h3>Add PDF File</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Upload PDF</div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="add_mediagallery.php">
                                        <div class="mb-3">
                                            <label for="media_image" class="form-label">Select Image</label>
                                            <input type="file" name="media_image" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">PDF Title</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Select PDF File</label>
                                            <input type="file" name="pdf_file" class="form-control" accept="application/pdf" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="submit" name="submit" value="Upload PDF" class="btn btn-primary">
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
</body>
</html>
