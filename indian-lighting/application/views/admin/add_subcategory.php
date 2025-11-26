
<style>
    .subcategory-select {
        display: flex;
        flex-direction: column;
        gap: 5px; /* Positive gap for better spacing */
    }

    @media (max-width: 748px) {
        .subcategory-select {
            flex-direction: column;
            gap: 5px;
        }
    }
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sub-Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('subcategory/manage'); ?>">List Sub-Category</a></li>
            <li class="breadcrumb-item active">Add Sub-Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header"style="background:#f18223">
      <h3 class="card-title">Add Sub-Category</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
                 <form id="add-subcategory" method="post" enctype="multipart/form-data">
    <div class="row">
        <!-- Select Category -->
        <div class="col-sm-12">
            <div class="form-group">
                <label>Select Category Name</label>
                <div class="subcategory-select">
                    <?php foreach ($categories as $category) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category_id[]" 
                                   value="<?= $category->id; ?>" id="category<?= $category->id; ?>">
                            <label class="form-check-label" for="category<?= $category->id; ?>">
                                <?= $category->category_name; ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Subcategory Name -->
        <div class="col-sm-6">
            <div class="form-group">
                <label>Sub-Category Name</label>
                <input type="text" class="form-control" name="subcategory_name" 
                       id="subcategory_name" placeholder="Enter ..." required>
            </div>
        </div>

        <!-- Upload Image -->
        <div class="col-sm-6">
            <div class="form-group">
                <label for="subcategory_img" class="form-label">Upload Image</label>
                <input class="form-control" type="file" name="subcategory_img" 
                       id="subcategory_img" required>
            </div>
        </div>
    </div>

    <!-- Description and URL Slug -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="subcategory_description" 
                       id="subcategory_description" placeholder="Enter ..." required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Url Slug</label>
                <input type="text" class="form-control" name="slug_url" 
                       id="slug_url" placeholder="Enter ..." required>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

    </div>
    <!-- /.card-body -->
  </div>
</div>