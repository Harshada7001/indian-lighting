<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM media_gallery ORDER BY id DESC");?>
<!DOCTYPE html>
<html>
<head>
    <title>View PDFs</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Uploaded PDFs</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Media Image</th>
                <th>Title</th>
                <th>PDF</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['media_image']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
<td><a href="uploads/<?= htmlspecialchars($row['file_name']) ?>" target="_blank">View</a></td>
<td><?= htmlspecialchars($row['uploaded_at']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="3">No PDFs found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
