<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Sub-Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('subcategory/add'); ?>">Add Sub-Category</a></li>
            <li class="breadcrumb-item active">Edit Sub-Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%; margin:auto;">
    <div class="card-header">
      <h3 class="card-title">Edit subCategory</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form id="edit-subcategory" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Select Category Name</label>
              <?php
              // Get selected category IDs from the database
              $selected_ids_string = $subcategory->category_id;
              // Convert the string to an array
              $selected_ids_array = explode(',', $selected_ids_string);

              foreach ($categories as $category) { ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="category_id[]" value="<?= $category->id; ?>" 
                           <?php if (in_array($category->id, $selected_ids_array)) echo 'checked'; ?>>
                    <?= $category->category_name; ?>
                  </label>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>SubCategory Name</label>
              <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" value="<?= $subcategory->subcategory_name; ?>" placeholder="Enter ...">
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="form-group">
              <label>Url_slug</label>
              <input type="text" class="form-control" name="slug_url" id="slug_url" value="<?= $subcategory->slug_url; ?>" placeholder="Enter ...">
            </div>
          </div>
          
          <div class="form-group">
            <label for="subcategory_img" class="form-label">Upload Image</label>
            <input type="hidden" name="subcategory_img" value="<?= $subcategory->subcategory_img; ?>">
            <input class="form-control" type="file" name="subcategory_img" id="subcategory_img">
            <?php if ($subcategory->subcategory_img): ?>
              <img src="<?= base_url('uploads/' . $subcategory->subcategory_img); ?>" alt="image" style="max-width: 100px; display: flex; justify-content: center; margin: auto; margin-top: 15px;">
            <?php endif; ?>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" name="subcategory_description" id="subcategory_description" value="<?= $subcategory->subcategory_description; ?>" placeholder="Enter ...">
            </div>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
</div>
