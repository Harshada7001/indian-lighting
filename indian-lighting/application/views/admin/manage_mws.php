 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MWS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('mws/add'); ?>">Add MWS</a></li>
              <li class="breadcrumb-item active">manage MWS</li>
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
                <h3 class="card-title">Manage MWS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   
                    <th>Category Name (Market we serve)</th>
                    <th>Image</th>
            
					<th>Description</th>
					<th>Specification</th>
					
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($mws as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  
				  <td><?= $value->name; ?></td>
				  <td><img src="<?= base_url('uploads/' . $value->proj_img); ?>" width="100" height="100" alt="mws Image"></td>
				  <!--<td><?//= $value->category_name; ?></td>-->


				  <td><?= $value->desc_1; ?></td>
				  <td><?= $value->desc_2; ?></td>
				  
                <td>
                        <!--<a href="<?//= base_url('mws/edit_mws/'.$value->id); ?>">Edit</a> |-->
				        <a href="<?= base_url('mws/delete_mws/'.$value->id); ?>">Delete</a>
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