 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('category/manage'); ?>">Manage Category</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card card-warning" style="width: 80%;margin:auto;">
              <div class="card-header" style="background:#f18223">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <form id="add-category" method="post" enctype="multipart/form-data" >

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="category_name"  id="category_name" class="form-control" placeholder="Enter ..." required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Url_slug</label>
                        <input type="text" name="slug_url" id="slug_url" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="category_description" id="category_description" placeholder="Enter ..." required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                        <label>canonical</label>
                         <input type="text" class="form-control" placeholder="Enter ..."name="canonical" id="canonical">
                      </div>
                    <!--<div class="form-group">-->
                    <!--    <label>meta_title</label>-->
                    <!--    <input type="text" class="form-control" name="meta_title" id="meta_title" laceholder="Enter ...">-->
                    <!--  </div>-->
                    </div>
                    <!--<div class="col-sm-6">-->
                    <!--<div class="form-group">-->
                    <!--    <label>meta_description</label>-->
                    <!--     <input type="text" class="form-control" placeholder="Enter ..." name="meta_description" id="meta_description">-->
                    <!--  </div>-->
                    <!--</div>-->
                   
                    <!--<div class="col-sm-6">-->
                    <!--<div class="form-group">-->
                    <!--    <label>canonical</label>-->
                    <!--     <input type="text" class="form-control" placeholder="Enter ..."name="canonical" id="canonical">-->
                    <!--  </div>-->
                    <!--</div>-->
                    <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label> -->
                    <label for="service_img" class="form-label">Upload Image Icon</label>
					<input class="form-control" type="file" name="service_img" id="service_img" required>
                  </div>
                  
                  <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label> -->
                    <label for="service_img" class="form-label">Upload color image icon </label>
					<input class="form-control" type="file" name="mws_img" id="mws_img" required>
                  </div>
                  </div>

                  <!-- input states -->
                

                  
                 
                <div class="card-footer" style="display:flex;justify-content:center;">
                  <button type="submit" onclick="add_category()" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
    <!-- /.content -->
  </div>
 