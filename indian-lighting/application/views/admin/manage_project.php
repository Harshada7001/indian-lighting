 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('project/add'); ?>">Add projects</a></li>
              <li class="breadcrumb-item active">manage projects</li>
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
                <h3 class="card-title">Manage projects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   
                    <th>Name</th>
                    <th>Image</th>
                    <!--<th>Client</th>-->
                    <th>Year</th>
                    <th>Location</th>
                    <!--<th>Category</th>-->
                    <!--<th>Cost</th>-->
                   	<th>Description</th>
                   	<th>PDF</th>
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($projects as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  
				  <td><?= $value->project_name; ?></td>
				  <td><img src="<?= base_url('uploads/' . $value->pro_img1); ?>" width="100" height="100" alt="slide Image"></td>
				 <!--<td><?//= $value->client_name; ?></td>-->
				 <td><?= $value->completedyear; ?></td>
				 <td><?= $value->location; ?></td>
				 <!--<td><?//= $value->category_name; ?></td>-->
				 <!--<td><?//= $value->cost; ?></td>-->
				 <td><?= $value->project_description; ?></td>
				 <td><?= $value->project_pdf; ?></td> 
				 <td><?= $value->project_video; ?></td>
				 <td><?= $value->project_testimonial; ?></td>
                  <td>
                 <!--<a href="<?//= base_url('project/edit_project/'.$value->id); ?>">Edit</a> |-->
				  <a href="<?= base_url('project/delete_project/'.$value->id); ?>">Delete</a>
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