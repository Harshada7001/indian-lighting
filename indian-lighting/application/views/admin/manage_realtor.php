<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Realtors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('realtor/add'); ?>">Add Realtors</a></li>
              <li class="breadcrumb-item active">Manage Realtors</li>
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
                <h3 class="card-title">Manage Realtors</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Realtor_name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Realtor_description</th>
					<th>hire_date</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($real as $value){ ?>
                  <tr>
                   <th scope="row"><?= $i; ?></th>
				  <td><?= $value->realtor_name; ?></td>
				  <td><?= $value->email; ?></td>
				  <td><?= $value->mobile; ?></td>
				  <td><?= $value->realtor_description; ?></td>
				  <td><?= $value->hire_date; ?></td>
				  <td><a href="<?= base_url('realtor/edit_realtor/'.$value->realtor_id); ?>">Edit</a> |
				  <a href="<?= base_url('realtor/delete_realtor/'.$value->realtor_id); ?>">Delete</a>
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