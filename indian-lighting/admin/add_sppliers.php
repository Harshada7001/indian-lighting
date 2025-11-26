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
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);
    $categories = isset($_POST['category']) ? implode(',', $_POST['category']) : '';

    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Upload product_logo
    $logo_name = basename($_FILES["product_logo"]["name"]);
    $logo_path = $target_dir . time() . "_logo_" . $logo_name;
    move_uploaded_file($_FILES["product_logo"]["tmp_name"], $logo_path);

    // Upload catelog file 1
    // Catalog 1
$catelog_name = mysqli_real_escape_string($conn, $_POST['catelog_file_name']); // catalog name (from form)
$catelog_file = basename($_FILES["catelog_file"]["name"]); // actual file
$catelog_path = $target_dir . time() . "_catelog_" . $catelog_file;
move_uploaded_file($_FILES["catelog_file"]["tmp_name"], $catelog_path);

// Catalog 2
$catelog1_name = mysqli_real_escape_string($conn, $_POST['catelog_file1_name']);
$catelog1_file = basename($_FILES["catelog_file1"]["name"]);
$catelog_path1 = $target_dir . time() . "_catelog1_" . $catelog1_file;
move_uploaded_file($_FILES["catelog_file1"]["tmp_name"], $catelog_path1);

// Catalog 3
$catelog2_name = mysqli_real_escape_string($conn, $_POST['catelog_file2_name']);
$catelog2_file = basename($_FILES["catelog_file2"]["name"]);
$catelog_path2 = $target_dir . time() . "_catelog2_" . $catelog2_file;
move_uploaded_file($_FILES["catelog_file2"]["tmp_name"], $catelog_path2);

    
    

    // Upload ads image
    $ads_name = basename($_FILES["product_image"]["name"]);
    $ads_path = $target_dir . time() . "_ads_" . $ads_name;
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $ads_path);

    $sql = "INSERT INTO suppliers (
    supplier_id, company_name, ila_id, contact_person, email, phone, password, address, website, description, created_at, logo, categories, catelog, catelog1, catelog2, catelog_name, catelog1_name, catelog2_name, ads
) VALUES (
    null, '$company_name', '$ila_id', '$contact_person', '$email', '$phone', '$password', '$address', '$website', '$description', '$created_at', '$logo_path', '$categories', '$catelog_path','$catelog_path1','$catelog_path2','$catelog_name','$catelog1_name','$catelog2_name', '$ads_path'
)";

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
    <title>Forms | Bootstrap Simple Admin Template</title>
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
                <div class="page-title"><h3>Add Supplier</h3></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Add Supplier</div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                     
                                            
                                            
                                            <?php
$categories = [
    "Indoor & Outdoor Luminaires",
    "Architectural & Decorative Luminaires",
    "Smart & Intelligent Luminaires",
    "Special Application Luminaires",
    "Sensors, Lighting Controllers & Lighting Automation",
    "Solar Lights",
    "LED Housing",
    "LED Drivers & Electronic Components",
    "LED Chip, COB, PCB, LED Strips & LED Modules",
    "Optics (Lens, Diffusers, Reflectors, Glass)",
    "Wires, Connectors, Hardware, Gaskets, Thermal Paste, Solder, Sealants, Consumables & Accessories",
    "Lighting Equipments ",
    "Lighting Services"
];
foreach ($categories as $cat) {
    echo "<label><input type='checkbox' name='category[]' value=\"" . htmlspecialchars($cat) . "\"> $cat</label><br>";
}
?>

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Company Name</label>
                                        <div class="col-sm-10"><input type="text" name="company_name" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">ILA ID</label>
                                        <div class="col-sm-10"><input type="text" name="ila_id" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10"><input type="email" name="email" class="form-control"></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10"><input type="text" name="phone" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10"><input type="password" name="password" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-10"><input type="text" name="website" class="form-control"></div>
                                    </div>
                                    <div class="mb-3 row">
                                      <!-- First file -->
                                      <label class="col-sm-2 col-form-label">Catalog File 1</label>
                                      <div class="col-sm-4">
                                        <input type="file" name="catelog_file" class="form-control">
                                      </div>
                                    
                                      <!-- Second file -->
                                      <label class="col-sm-2 col-form-label">Catalog File Name</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="catelog_file_name" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                      <label class="col-sm-2 col-form-label">Catalog File 2</label>
                                      <div class="col-sm-4">
                                        <input type="file" name="catelog_file1" class="form-control">
                                      </div>
                                    
                                      <label class="col-sm-2 col-form-label">Catalog File Name</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="catelog_file1_name" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                      <label class="col-sm-2 col-form-label">Catalog File 3</label>
                                      <div class="col-sm-4">
                                        <input type="file" name="catelog_file2" class="form-control">
                                      </div>
                                    
                                      <label class="col-sm-2 col-form-label">Catalog File Name</label>
                                      <div class="col-sm-4">
                                        <input type="text" name="catelog_file2_name" class="form-control">
                                      </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Ads</label>
                                        <div class="col-sm-10"><input type="file" name="product_image" accept="image/*" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10"><input type="file" name="product_logo" accept="image/*" class="form-control" required></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10"><textarea name="description" rows="3" class="form-control"></textarea></div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Created At</label>
                                        <div class="col-sm-10"><input type="date" name="created_at" class="form-control" required></div>
                                    </div>
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
