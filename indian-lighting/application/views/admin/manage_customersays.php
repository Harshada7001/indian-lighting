 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonials</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('customersays/add'); ?>">Add Testimonials</a></li>
              <li class="breadcrumb-item active">manage Testimonials</li>
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
                <h3 class="card-title">Manage Testimonials</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   
                    <th>Name</th>
                    
					<th>Description</th>
					
					
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($cust as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  
				  <td><?= $value->name; ?></td>
				  
				  <td><?= $value->description; ?></td>
				  
				 
				  
				  
                  <td>
                 <a href="<?= base_url('Customersays/edit_customersays/'.$value->id); ?>">Edit</a> |
				  <a href="<?= base_url('Customersays/delete_customersays/'.$value->id); ?>">Delete</a>
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