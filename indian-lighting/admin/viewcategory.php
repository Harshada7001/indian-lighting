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

$sql = "SELECT * FROM media_gallery ORDER BY uploaded_on DESC";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Media Gallery | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
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
                        <h3>Media Gallery (PDF Files)</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Media Gallery Table</div>
                                <div class="card-body">
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Preview</th>
                                                <th>Download</th>
                                                <th>Uploaded On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $title = htmlspecialchars($row['title']);
                                                    $filePath = htmlspecialchars($row['file_name']);
                                                    $uploaded = htmlspecialchars($row['uploaded_on']);

                                                    echo "<tr>";
                                                    echo "<td>{$id}</td>";
                                                    echo "<td>{$title}</td>";
                                                    echo "<td><a href='{$filePath}' target='_blank' class='btn btn-sm btn-primary'>View</a></td>";
                                                    echo "<td><a href='{$filePath}' download class='btn btn-sm btn-success'>Download</a></td>";
                                                    echo "<td>{$uploaded}</td>";
                                                    echo "<td><a href='delete_media.php?id={$id}' onclick='return confirm(\"Are you sure you want to delete this PDF?\");' class='btn btn-sm btn-danger'>Delete</a></td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='6'>No media found.</td></tr>";
                                            }
                                            $conn->close();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->

                </div> <!-- /.container -->
            </div> <!-- /.content -->
        </div> <!-- /#body -->
    </div> <!-- /.wrapper -->

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
