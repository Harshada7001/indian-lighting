<?php
// Database connection
$host = "localhost";
$user = "ila_admin";
$pass = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Upload CSV
if (isset($_POST['submit'])) {
    if ($_FILES['csv_file']['error'] == 0) {
        $fileName = $_FILES['csv_file']['tmp_name'];

        if (($handle = fopen($fileName, "r")) !== FALSE) {
            // Skip the header row
            fgetcsv($handle);

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $supplier_id = intval($data[0]);
                $city = $conn->real_escape_string($data[1]);

                $sql = "UPDATE suppliers SET city='$city' WHERE supplier_id=$supplier_id";
                $conn->query($sql);
            }
            fclose($handle);
            echo "City updates completed!";
        }
    }
}
?>

<!-- HTML Form -->
<form method="post" enctype="multipart/form-data">
    <input type="file" name="csv_file" accept=".csv">
    <button type="submit" name="submit">Upload & Update</button>
</form>
