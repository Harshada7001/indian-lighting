<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New User Enquiry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="<?//= base_url('realtor/add'); ?>">Add Realtors</a></li>-->
              <li class="breadcrumb-item active">Manage Contact</li>
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
                <h3 class="card-title">Contact info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                   
                    <th>Email</th>
                     <th>Contact</th>
                    <th>Message</th>
                   
                  
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($contact as $value){ ?>
                  <tr>
                  <th scope="row"><?= $i; ?></th>
				  <td><?= $value->name; ?></td>
				  
                  <td><?= $value->email; ?></td>
				  <td><?= $value->phone; ?></td>
				  
				  <td><?= $value->message; ?></td>


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