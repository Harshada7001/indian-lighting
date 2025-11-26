<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Project</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('project/manage'); ?>">List Projects</a></li>
            <li class="breadcrumb-item active">Edit Project</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header" style="background:#f18223">
      <h3 class="card-title">Edit Project</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form id="edit-project" action="<?= base_url('project/edit'); ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Project Name</label>
              <input type="text" class="form-control" name="project_name" value="<?= $project->project_name; ?>" placeholder="Enter Project Name" >
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Client Name</label>
              <input type="text" class="form-control" name="client_name" value="<?= $project->client_name; ?>" placeholder="Enter Client Name" >
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Year Completed</label>
              <input type="date" class="form-control" name="completedyear" value="<?= $project->completedyear; ?>" >
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Location</label>
              <input type="text" class="form-control" name="location" value="<?= $project->location; ?>" placeholder="Enter Location" >
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Category</label>
              <input type="text" class="form-control" name="category_name" value="<?= $project->category_name; ?>" placeholder="Enter Category" >
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Value of Project</label>
              <input type="text" class="form-control" name="cost" value="<?= $project->cost; ?>" placeholder="Enter Value of Project" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label>Upload Image</label>
              <input class="form-control" type="file" name="pro_img">
              <?php if ($project->pro_img): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label>Project Description</label>
              <textarea id="summernote" class="form-control" name="project_description" style="height: 100px;" ><?= $project->project_description; ?></textarea>
            </div>
          </div>
          
             <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image1</label>
              <input class="form-control" type="file" name="pro_img1" id="pro_img1" >
              <?php if ($project->pro_img1): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img1); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image2</label>
              <input class="form-control" type="file" name="pro_img2" id="pro_img2" >
              <?php if ($project->pro_img2): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img2); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>


   <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image3</label>
              <input class="form-control" type="file" name="pro_img3" id="pro_img3" >
              <?php if ($project->pro_img3): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img3); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image4</label>
              <input class="form-control" type="file" name="pro_img4" id="pro_img4" >
              <?php if ($project->pro_img4): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img4); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>


   <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image5</label>
              <input class="form-control" type="file" name="pro_img5" id="pro_img5" >
              <?php if ($project->pro_img5): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img5); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Project Image6</label>
              <input class="form-control" type="file" name="pro_img6" id="pro_img6" >
              <?php if ($project->pro_img6): ?>
                <img src="<?= base_url('uploads/' . $project->pro_img6); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
              <?php endif; ?>
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Testimonial Video</label>
              <input class="form-control" type="file" name="project_video" id="project_video" >
              <?php if ($project->project_video): ?>
                <video src="<?= base_url('uploads/' . $project->project_video); ?>" alt="video" style="max-width: 100px; margin-top: 10px;"></video>
              <?php endif; ?>
            </div>
          </div>

         <div class="col-sm-6">
            <div class="form-group">
              <label>Upload Testimonial Text</label>
              <input type="text" class="form-control" name="project_testimonial" value="<?= $project->project_testimonial; ?>" placeholder="Enter Client Name" >

            </div>
          </div>
          
        </div>

        <div class="card-footer" style="justify-content:center;display:flex;">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
