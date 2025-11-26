<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Projects</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('project/manage'); ?>">list project</a></li>
            <li class="breadcrumb-item active">Add Project</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header" style="background:#f18223">
      <h3 class="card-title">Add Project</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<form id="add-product" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label>Project Name</label>
                <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Enter ..." >
            </div>
        </div>

        <!--<div class="col-sm-6">-->
            <!-- text input -->
        <!--    <div class="form-group">-->
        <!--        <label>Client Name</label>-->
        <!--        <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter ..." >-->
        <!--    </div>-->
        <!--</div>-->

        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label>Date Completed</label>
                <input type="date" class="form-control" name="completedyear" id="completedyear" placeholder="Enter ..." >
            </div>
        </div>

        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location" id="location" placeholder="Enter ..." >
            </div>
        </div>

        <!--<div class="col-sm-6">-->
            <!-- text input -->
        <!--    <div class="form-group">-->
        <!--        <label>Category</label>-->
        <!--        <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter ..." >-->
        <!--    </div>-->
        <!--</div>-->

        <!--<div class="col-sm-6">-->
            <!-- text input -->
        <!--    <div class="form-group">-->
        <!--        <label>Value of Project</label>-->
        <!--        <input type="text" class="form-control" name="cost" id="cost" placeholder="Enter ..." >-->
        <!--    </div>-->
        <!--</div>-->

        <!--<div class="row">-->
        <!--    <div class="form-group">-->
        <!--        <label for="pro_img" class="form-label">Upload Image</label>-->
        <!--        <input class="form-control" type="file" name="pro_img" id="pro_img" >-->
        <!--    </div>-->
        <!--</div>-->

        
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img1" class="form-label">Upload Project Image1</label>
            <input class="form-control" type="file" name="pro_img1" id="pro_img1" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img2" class="form-label">Upload Project Image2</label>
            <input class="form-control" type="file" name="pro_img2" id="pro_img2" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img3" class="form-label">Upload Project Image3</label>
            <input class="form-control" type="file" name="pro_img3" id="pro_img3" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img4" class="form-label">Upload Project Image4</label>
            <input class="form-control" type="file" name="pro_img4" id="pro_img4" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img5" class="form-label">Upload Project Image5</label>
            <input class="form-control" type="file" name="pro_img5" id="pro_img5" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="pro_img6" class="form-label">Upload Project Image6</label>
            <input class="form-control" type="file" name="pro_img6" id="pro_img6" >
        </div>
</div>
        <div class="col-sm-6">

        <div class="form-group">
            <label for="project_pdf" class="form-label">Upload Project PDF</label>
            <input class="form-control" type="file" name="project_pdf" id="project_pdf" accept="application/pdf" >
        </div>
       </div> 
       
      
          </div> 
       
       
                <div class="col-sm-6">

        
                </div>
                <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header" name="project_description">
                            <h3 class="card-title">
                                <b>Project Description</b>
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea id="summernote" name="project_description" style="width: 100%;">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer" style="justify-content:center;display:flex;">
        <button type="submit" onclick="add_product()" class="btn btn-primary">Submit</button>
    </div>
</form>


</div>
<!-- /.card-body -->



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
