 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BOQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="<?//= base_url('blog/add'); ?>">Add Blog</a></li>-->
              <li class="breadcrumb-item active">manage BOQ</li>
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
                <h3 class="card-title">Manage BOQ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   
                    <th>Product</th>
					<th>User</th>
					<th>Requirment</th>
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($boq_posts as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  
				  <td><?= $value->fb_pname; ?></td>
				  <!--<td><img src="<?//= base_url('uploads/' . $value->img); ?>" width="100" height="100" alt="Image"></td>-->

				  <td><?= $value->username; ?></td>
				  <td><?= $value->fb_requirment; ?></td>
				 
				  
				  
                  <td>
                 <!--<a href="<?//= base_url('Blog/edit_blog/'.$value->id); ?>">Edit</a> |-->
				  <a href="<?= base_url('Boq/delete_boq/'.$value->fbid); ?>">Delete</a>
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