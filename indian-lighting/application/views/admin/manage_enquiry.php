  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('enquiry/add'); ?>">Add Enquiry</a></li>
              <li class="breadcrumb-item active">manage Enquiry</li>
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
                <h3 class="card-title">ManageEnquiry</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Property Name</th>
                    <th>name</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>added_date</th>
					<th>added_by</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($real as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  <td><?= $value->title; ?></td>
				  <td><?= $value->name; ?></td>
				  <td><?= $value->email; ?></td>
				  <td><?= $value->mobile; ?></td>
				  <td><?= $value->added_date; ?></td>

				  <td><?= $value->added_by; ?></td>
				  
                  <td>
                 <a href="<?= base_url('Enquiry/edit_enquiry/'.$value->enq_id); ?>">Edit</a> |
				  <a href="<?= base_url('Enquiry/delete_enquiry/'.$value->enq_id); ?>">Delete</a>
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