<?php include 'session_init.php'; ?>
<?php
// Database connection settings
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES["catelog_file"])) {

    $supplier_id = $_SESSION['company']; // you can get this from session if needed
    $target_dir = "uploads/";

    // Create uploads directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $image_name = basename($_FILES["catelog_file"]["name"]);
    $target_file = $target_dir. $image_name;

    // Validate file size or type if needed here
    // Example: only allow PDF
    // if (pathinfo($image_name, PATHINFO_EXTENSION) !== 'pdf') {
    //     die("Only PDF files are allowed.");
    // }

    if (move_uploaded_file($_FILES["catelog_file"]["tmp_name"], $target_file)) {

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO product_catlog (supplierid, file) VALUES (?, ?)");
        $stmt->bind_param("ss", $supplier_id, $target_file);

// echo "INSERT INTO product_catlog (supplierid, file) VALUES ($supplier_id, $target_file)";

        if ($stmt->execute()) {
            echo "Catalog uploaded successfully!";
            // header("Location: success_page.php");
        } else {
            echo "Database Error: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo "Error uploading file.";
    }

    $conn->close();
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
        <div class="card-header">Add Catelog</div>
        <div class="card-body">
            <form method="post" action="" accept-charset="utf-8" enctype="multipart/form-data"
>
           

                <div class="mb-3">
                    <label for="category_name" class="form-label">Catelog File</label>
                    <input type="file" name="catelog_file"  class="form-control" required>
                </div>

                

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Add Catelog">
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