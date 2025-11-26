<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Banner</title>
    <!-- Add your CSS links or stylesheets here -->
    <style>
        .form-group .error {
            color: red;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
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
                            <li class="breadcrumb-item"><a href="<?= base_url('Banner/manage'); ?>">Manage Banner</a></li>
                            <li class="breadcrumb-item active">Add Banner</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        <!-- Main content -->
        <div class="card card-warning" style="width: 50%;margin:auto;">
              <div class="card-header">
                <h3 class="card-title">Add Banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            
                  <!-- input states -->
 <!-- ... previous form elements ... -->

        <form id="add-banner" method="post" enctype="multipart/form-data" >
				<div class="card-body">
				  <div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" placeholder="title" name="title" required>
			      </div>
				  <div class="form-group">
						<label for="title">Description</label>
						<input type="text" class="form-control" id="description" placeholder="description" name="description" required>
			      </div>
				  <div class="form-group">
						<label for="alt">Alt Tag</label>
						<input type="text" class="form-control" id="alt" placeholder="alt" name="alt" >
						<?php if (form_error ('alt') != '') { echo form_error ('alt');  }?>
                  </div>
				  <div class="form-group">
                  <label for="slider_img">Banner Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="banner_img" name="banner_img" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                   </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" onclick="add_banner()" class="btn btn-primary">Submit</button>
                </div>
              </form>



              </div>
              <!-- /.card-body -->
            </div>
    </div>
                               
                                  
    <!-- /.content-wrapper -->
    
    
    <script>
document.addEventListener("DOMContentLoaded", function () {
    // Update file name in label when an image is selected
    document.querySelectorAll('.custom-file-input').forEach(function (input) {
        input.addEventListener('change', function (e) {
            let fileName = e.target.files[0] ? e.target.files[0].name : "Choose file";
            e.target.nextElementSibling.innerText = fileName;
        });
    });
});

// Function to show image preview
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            let preview = document.getElementById(previewId);
            preview.src = e.target.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

  

</body>
</html>
