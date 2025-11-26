<!doctype html>
<?php
// Database configuration
$host = "localhost";
$username = "ila_admin";
$password = "admin123!@#";
$dbname = "ila_db";

$conn = new mysqli($host, $username, $password, $dbname);


if (isset($_POST['sup_id'])) {
    $id = $_POST['sup_id'];
    $company_name = $_POST['company_name'];
$ila_id       = $_POST['ila_id'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$password     = $_POST['password'];
$address      = $_POST['address'];
$website      = $_POST['website'];
$description  = $_POST['description'];
$created_at   = $_POST['created_at'];
$categories   = isset($_POST['category']) ? implode(",", $_POST['category']) : "";

// Handle file uploads
function uploadFile($fileInput, $oldValue) {
    if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] == 0) {
        $target_dir = "uploads/";
        $filename = basename($_FILES[$fileInput]["name"]);
        $target_file = $target_dir . time() . "_" . $filename;
        move_uploaded_file($_FILES[$fileInput]["tmp_name"], $target_file);
        return $target_file;
    }
    return $oldValue;
}

// Fetch existing file paths
$stmt = $conn->prepare("SELECT catelog, catelog1, catelog2, ads, logo FROM suppliers WHERE supplier_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$existing = $stmt->get_result()->fetch_assoc();

$catelog     = uploadFile("catelog_file", $existing['catelog']);
$catelog1    = uploadFile("catelog_file1", $existing['catelog1']);
$catelog2    = uploadFile("catelog_file2", $existing['catelog2']);
$ads         = uploadFile("product_image", $existing['ads']);
$logo        = uploadFile("product_logo", $existing['logo']);

// Update the record
$stmt = $conn->prepare("UPDATE suppliers SET company_name=?, ila_id=?, email=?, phone=?, password=?, address=?, website=?, description=?, created_at=?, categories=?, catelog=?, catelog1=?, catelog2=?, ads=?, logo=? WHERE supplier_id=?");
$stmt->bind_param("sssssssssssssssi", $company_name, $ila_id, $email, $phone, $password, $address, $website, $description, $created_at, $categories, $catelog, $catelog1, $catelog2, $ads, $logo, $id);

if ($stmt->execute()) {
    echo "<script>alert('Record updated successfully.'); window.location.href='viewsuplliers.php';</script>";
} else {
    echo "Error updating record: " . $stmt->error;
}
}

// Collect form data

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
                                <?php
// include("db.php"); // DB connection

if (isset($_GET['supplier_id'])) {
    $id = $_GET['supplier_id'];

    // Fetch data from the database
    $stmt = $conn->prepare("SELECT * FROM suppliers WHERE supplier_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $supplier = $result->fetch_assoc();
} else {
    echo "No ID specified.";
    exit;
}
?>
<form method="post" enctype="multipart/form-data" action="">
    <!-- Category Checkboxes -->
    <div class="mb-3 row">
        <input type="hidden" value="<?php echo $_GET['supplier_id']; ?>" name="sup_id">
        <label class="col-sm-2 col-form-label">Category Name</label>
        <div class="col-sm-10">
            <?php
            $categories = [
                "01 - Indoor & Outdoor Luminaires",
                "02 - Architectural & Decorative Luminaires",
                "03 - Smart & Intelligent Luminaires",
                "04 - Special Application Luminaires",
                "05 - Sensors, Lighting Controllers & Lighting Automation",
                "06 - Solar Lights",
                "07 - LED Housing",
                "08 - LED Drivers & Electronic Components",
                "09 - LED Chip, COB, PCB, LED Strips & LED Modules",
                "10 - Optics (Lens, Diffusers, Reflectors, Glass)",
                "11 - Wires, Connectors, Hardware, Gaskets, Thermal Paste, Solder, Sealants, Consumables & Accessories",
                "12 - Lighting Equipments ",
                "13 - Lighting Services"
            ];

            $selectedCategories = explode(",", $supplier['categories']);
            foreach ($categories as $cat) {
                $checked = in_array($cat, $selectedCategories) ? 'checked' : '';
                echo "<label><input type='checkbox' name='category[]' value=\"" . htmlspecialchars($cat) . "\" $checked> $cat</label><br>";
            }
            ?>
        </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Company Name</label>
        <div class="col-sm-10"><input type="text" name="company_name" value="<?= htmlspecialchars($supplier['company_name']) ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ILA ID</label>
        <div class="col-sm-10"><input type="text" name="ila_id" value="<?= htmlspecialchars($supplier['ila_id']) ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10"><input type="email" name="email" value="<?= htmlspecialchars($supplier['email']) ?>" class="form-control"></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10"><input type="text" name="phone" value="<?= htmlspecialchars($supplier['phone']) ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10"><input type="password" name="password" value="<?= htmlspecialchars($supplier['password']) ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10"><input type="text" name="address" value="<?= htmlspecialchars($supplier['address']) ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Website</label>
        <div class="col-sm-10"><input type="text" name="website" value="<?= htmlspecialchars($supplier['website']) ?>" class="form-control"></div>
    </div>

    <!-- For files, you usually allow reupload -->
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog File 1</label>
    <div class="col-sm-10">
        <input type="file" name="catelog_file" class="form-control">
        <small>Current: <?= htmlspecialchars($supplier['catelog']) ?></small>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog Name 1</label>
    <div class="col-sm-10">
        <input type="text" name="catelog_file_name" value="<?= htmlspecialchars($supplier['catelog_name']) ?>" class="form-control">
    </div>
</div>

<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog File 2</label>
    <div class="col-sm-10">
        <input type="file" name="catelog_file1" class="form-control">
        <small>Current: <?= htmlspecialchars($supplier['catelog1']) ?></small>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog Name 2</label>
    <div class="col-sm-10">
        <input type="text" name="catelog_file1_name" value="<?= htmlspecialchars($supplier['catelog1_name']) ?>" class="form-control">
    </div>
</div>

<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog File 3</label>
    <div class="col-sm-10">
        <input type="file" name="catelog_file2" class="form-control">
        <small>Current: <?= htmlspecialchars($supplier['catelog2']) ?></small>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Catelog Name 3</label>
    <div class="col-sm-10">
        <input type="text" name="catelog_file2_name" value="<?= htmlspecialchars($supplier['catelog2_name']) ?>" class="form-control">
    </div>
</div>


    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Ads</label>
        <div class="col-sm-10">
            <input type="file" name="product_image" accept="image/*" class="form-control">
            <small>Current: <?= htmlspecialchars($supplier['ads']) ?></small>
        </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-10">
            <input type="file" name="product_logo" accept="image/*" class="form-control">
            <small>Current: <?= htmlspecialchars($supplier['logo']) ?></small>
        </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10"><textarea name="description" rows="3" class="form-control"><?= htmlspecialchars($supplier['description']) ?></textarea></div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Created At</label>
        <div class="col-sm-10"><input type="date" name="created_at" value="<?= $supplier['created_at'] ?>" class="form-control" required></div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
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
