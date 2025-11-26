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

// Fetch all supplier ads
$sql = "SELECT * FROM supplier_list_ads ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Supplier Ads</title>
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
                <div class="page-title d-flex justify-content-between align-items-center">
                    <h3>View Supplier Ads</h3>
                    <a href="add_supplier_ad.php" class="btn btn-primary">Add New Ad</a>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">All Supplier Ads</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <!--<th>Supplier</th>-->
                                            <th>Image</th>
                                            <!--<th>Link</th>-->
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($result->num_rows > 0): ?>
                                            <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <!--<td><?//= htmlspecialchars($row['supplier']); ?></td>-->
                                                    <td>
                                                        <?php if (!empty($row['img'])): ?>
                                                            <img src="<?= htmlspecialchars($row['img']); ?>" width="100">
                                                        <?php else: ?>
                                                            No image
                                                        <?php endif; ?>
                                                    </td>
                                                    <!--<td>-->
                                                    <!--    <?php //if (!empty($row['link'])): ?>-->
                                                    <!--        <a href="<?//= htmlspecialchars($row['link']); ?>" target="_blank">Visit</a>-->
                                                    <!--    <?php //else: ?>-->
                                                    <!--        N/A-->
                                                    <!--    <?php //endif; ?>-->
                                                    <!--</td>-->
                                                    <td><?= ucfirst($row['status']); ?></td>
                                                    <td>
                                                        <!-- Placeholder Edit/Delete Links -->
                                                        <a href="delete_supplier_ad.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this ad?')">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr><td colspan="6">No ads found.</td></tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
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

<?php $conn->close(); ?>
