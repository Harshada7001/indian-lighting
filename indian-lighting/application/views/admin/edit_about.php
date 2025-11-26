<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit About Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(
                "admin/dashboard"
            ) ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(
                "about/manage"
            ) ?>">List About page</a></li>
            <li class="breadcrumb-item active">Edit About page Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

   <div class="card card-warning" style="width: 80%;margin:auto;">
              <div class="card-header">
                <h3 class="card-title">Add About Us</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php foreach ($about as $value) { ?>
                 <form id="add-about" method="post" enctype="multipart/form-data" >

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title"  id="title" class="form-control" placeholder="Enter ..." value="<?= $value->title ?>" required>
                      </div>
                    </div>
					 <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="about_date"  id="about_date" class="form-control" placeholder="Enter ..." value="<?= $value->about_date ?>"required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Url_slug</label>
                        <input type="text" name="slug_url" id="slug_url" class="form-control" placeholder="Enter ..." value="<?= $value->slug_url ?>">
                      </div>
                    </div>
                 
                  
                    <div class="col-sm-6">
                     <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header" name="desc1" value="<?= $value->desc1 ?>">
                      <h3 class="card-title">
                        <b>Description1</b>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="desc1">
                 <?= $value->desc1 ?>
                    </textarea>
                    </div>

                  </div>
                </div>
                <!-- /.col-->
              </div>
                    </div>
                 
                  
                   <div class="col-sm-6">
                     <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header" name="desc2"  >
                      <h3 class="card-title">
                        <b>Description2</b>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="desc2" >
                <?= $value->desc2 ?>
                    </textarea>
                    </div>

                  </div>
                </div>
                <!-- /.col-->
              </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>meta_title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" laceholder="Enter ..." value="<?= $value->meta_title ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>meta_description</label>
                         <input type="text" class="form-control" placeholder="Enter ..." name="meta_description" id="meta_description" value="<?= $value->meta_description ?>">
                      </div>
                    </div>
                   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>canonical</label>
                         <input type="text" class="form-control" placeholder="Enter ..."name="canonical" id="canonical" value="<?= $value->canonical ?>">
                      </div>
                    </div>
					 </div>
				
                  </div>

                  <!-- input states -->
                

                  
                 
                <div class="card-footer">
                  <button type="submit" onclick="add_about()" class="btn btn-primary">Submit</button>
                </div>
                </form>
                <?php } ?>
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