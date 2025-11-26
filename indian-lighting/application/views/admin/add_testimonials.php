<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Testimonials</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('project/managetest'); ?>">List Project Testimonial</a></li>
            <li class="breadcrumb-item active">Add Testimonials</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

   <div class="card card-warning" style="width: 80%;margin:auto;">
              <div class="card-header" style="background:#f18223">
                <h3 class="card-title">Add Testimonials</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    <form id="add-te" method="post" action="<?= base_url('project/addtest'); ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="project">Project</label>
                <select name="project_id" id="project" class="form-control" >
                    <option value="">Select a project...</option>
                    <?php foreach ($projects as $p) { ?>
                        <option value="<?= $p->id; ?>"><?= $p->project_name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Testimonial video</label>
                <input class="form-control" type="file" id="testimonial_video" name="testimonial_video" >
            </div>
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
</div>
</div>

</div>
</div>
<script>
  document.querySelector('#selector').addEventListener("focus", () => {

    document.querySelector('#dropdownbox').setAttribute("style", "");
  });

  function onclickdropitem(id) {
    console.log(id);
    document.querySelector('#selector').value = document.querySelector("#" + id + " p").innerHTML;

    document.querySelector('#dropdownbox').setAttribute("style", "display:none");
  }
</script>