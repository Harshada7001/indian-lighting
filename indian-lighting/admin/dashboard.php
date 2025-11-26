<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->


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
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --primary: #3b82f6;
      --bg: #f3f4f6;
      --text: #1f2937;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

 

    /* Header */
    .header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 2rem;
      font-size: 1.75rem;
      font-weight: 600;
    }

    .header i {
      color: var(--primary);
    }

    /* Cards grid */
    .cards {
      width: 100%;
      max-width: 1200px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .card {
      display: block; /* allow whole card to be clickable */
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 2.5rem 1.5rem;
      text-align: center;
      transition: transform 0.3s;
      cursor: pointer;
      text-decoration: none; /* remove underline */
      color: inherit; /* keep text color */
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card i {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .card h3 {
      margin-bottom: 0.5rem;
      font-size: 1.25rem;
    }

    .card p {
      color: #6b7280;
    }
  </style>
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
     <?php include 'side_bar.php';?>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
        <?php include 'topbar.php';?>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                  <header class="header">
 <center>    <i class="fa-solid fa-gauge-high"></i>
    <span>Admin Dashboard</span></center>
  </header>

  <!-- Action cards -->
  <section class="cards">
    <!-- Product options -->
    
      <a href="add_own_products.php" class="card">
      <i class="fa-solid fa-plus"></i>
      <h3>Add Own Product</h3>
      <p>Create a new product listing.</p>
    </a>
    <a href="view_own_products.php" class="card">
      <i class="fa-solid fa-table-list"></i>
      <h3>View Own Products</h3>
      <p>Browse and manage existing products.</p>
    </a>
    
    <a href="add_products.php" class="card">
      <i class="fa-solid fa-plus"></i>
      <h3>Add Supplier Product</h3>
      <p>Create a new product listing.</p>
    </a>
    <a href="viewproducts.php" class="card">
      <i class="fa-solid fa-table-list"></i>
      <h3>View Supplier Products</h3>
      <p>Browse and manage existing products.</p>
    </a>

    <!-- Catalog options -->
    <a href="add_catelog.php" class="card">
      <i class="fa-solid fa-folder-plus"></i>
      <h3>Add Catalog</h3>
      <p>Organize products into catalogs.</p>
    </a>
    <a href="viewcatlog.php" class="card">
      <i class="fa-solid fa-list"></i>
      <h3>View Catalogs</h3>
      <p>View and manage catalogs.</p>
    </a>

    <!-- Supplier options -->
    <a href="add_sppliers.php" class="card">
      <i class="fa-solid fa-user-plus"></i>
      <h3>Add Supplier</h3>
      <p>Add a new supplier profile.</p>
    </a>
    <a href="viewsuplliers.php" class="card">
      <i class="fa-solid fa-users"></i>
      <h3>View Suppliers</h3>
      <p>Browse and manage suppliers.</p>
    </a>


 <!-- Supplier options -->
    <a href="add_generalsupplier.php" class="card">
      <i class="fa-solid fa-user-plus"></i>
      <h3>Add General Supplier</h3>
      <p>Add a new supplier profile.</p>
    </a>
    <a href="viewgeneralsupplier.php" class="card">
      <i class="fa-solid fa-users"></i>
      <h3>View General Suppliers</h3>
      <p>Browse and manage suppliers.</p>
    </a>

    <!-- Category options -->
    <a href="add_category.php" class="card">
      <i class="fa-solid fa-tag"></i>
      <h3>Add Category</h3>
      <p>Create a new product category.</p>
    </a>
    <a href="viewcategory.php" class="card">
      <i class="fa-solid fa-tags"></i>
      <h3>View Categories</h3>
      <p>Manage existing categories.</p>
    </a>
    
       <!-- Category options -->
    <a href="add_ads.php" class="card">
      <i class="fa fa-address-book"></i>
      <h3>Add Ads</h3>
      <p>Create a new product ads.</p>
    </a>
    <a href="viewads.php" class="card">
      <i class="fa fa-address-book"></i>
      <h3>View Ads</h3>
      <p>Manage existing ads.</p>
    </a>
    
       <!-- Category options -->
    <a href="add_mediagallery.php" class="card">
    <i class="fa-solid fa-file-pdf"></i>
      <h3>Add Media Gallery PDF</h3>
      <p>add new media PDF</p>
    </a>
    <a href="viewmediagallery.php" class="card">
      <i class="fa-solid fa-file-pdf"></i>
      <h3>View Media Gallery PDF</h3>
      <p>Manage existing PDF</p>
    </a>
    
       <!-- Category options -->
    <a href="add_supplier_ads.php" class="card">
   <i class="fa-solid fa-rectangle-ad"></i>
      <h3>Add Supplier Ad</h3>
      <p>add new suppliers list ad</p>
    </a>
    <a href="viewsupplierlistads.php" class="card">
      <i class="fa-solid fa-rectangle-ad"></i>
      <h3>View Supplier Ad</h3>
      <p>Manage suppliers list ad</p>
    </a>
    
    
    <a href="add_gallery.php" class="card">
   <i class="fa-solid fa-rectangle-ad"></i>
      <h3>Add Gallery</h3>
      <p>add new Gallery image</p>
    </a>
    <a href="view_gallery.php" class="card">
      <i class="fa-solid fa-rectangle-ad"></i>
      <h3>View Gallery</h3>
      <p>Manage Gallery Images</p>
    </a>
    
    
  </section>
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