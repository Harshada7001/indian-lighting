 
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
              <li class="breadcrumb-item"><a href="<?= base_url('category/add'); ?>">Add Category</a></li>
              <li class="breadcrumb-item active">Manage Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                     <th>Banner Image</th>
                    <th>Name</th>
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($category as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				   <td><img src="<?= base_url('uploads/' . $value->category_img); ?>" width="100" height="100" alt="Service Image"></td>
				  <!--<td><img src="<?//= base_url('uploads/' . $value->mws_img); ?>" width="100" height="100" alt="MWS Image"></td>-->
				  <td><?= $value->category_name; ?></td>
				  
				  
                  <td>
                 <a href="<?= base_url('Category/edit_category/'.$value->id); ?>">Edit</a> |
				  <a href="<?= base_url('Category/delete_category/'.$value->id); ?>">Delete</a>
				</td>
                  </tr>
				  <?php  $i++; } ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->