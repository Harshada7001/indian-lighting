<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">	
            <h1>Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Banner/add_banner'); ?>">add Banner</a></li>
              <li class="breadcrumb-item active">edit Banner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Edit Banner</h3>
              </div>
              <!-- /.card-header -->
			  <style>
				.form-group .error{
					color:red;
				}
			  
			  </style>
			  <?php foreach($banner as $value){ ?>
              <!-- form start -->
 <form id="add-banner" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="description" name="description" value="<?= $value->description; ?>" required>
                  </div>
				  <div class="form-group">
                    <label for="alt">Alt Tag</label>
                    <input type="text" class="form-control" id="alt" placeholder="alt" name="alt" value="<?= $value->alt; ?>">
					<?php if (form_error ('alt') != '') { echo form_error ('alt');  }?>
                  </div>
				 
                  <div class="form-group">
                    <label for="banner_img" class="form-label">Upload Image</label>
                    <input type="hidden" name="old_banner_img" value="<?= $value->banner_img; ?>"> <!-- Store old image -->
                    <input class="form-control" type="file" name="banner_img" id="banner_img">
                    
                    <?php if ($value->banner_img): ?>
                        <img src="<?= base_url('uploads/' . $value->banner_img); ?>" style="max-width: 100px; margin-top: 10px;">
                    <?php endif; ?>
                </div>

                  </div>
                  <div class="card-footer">
                  <button type="submit" onclick="add_banner()" class="btn btn-primary">Submit</button>
                </div>
                </div>
                
                <!-- /.card-body -->

                
              </form>

		  <?php } ?>
            </div>
          </div>
         </div>
        </div>
    </section>