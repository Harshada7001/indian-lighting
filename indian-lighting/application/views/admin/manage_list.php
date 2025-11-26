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
              <li class="breadcrumb-item"><a href="<?= base_url('listings/add'); ?>">Add list</a></li>
              <li class="breadcrumb-item active">manage List</li>
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
                <h3 class="card-title">ManageList</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>address</th>
                    <th>city</th>
                    <th>state</th>
					<th>zipcode</th>
					<th>Image</th>
					<th>description</th>
					<th>price</th>
					<th>bathrooms</th>
					<th>bedrooms</th>
					<th>garage</th>
					<th>sqft</th>
					<th>plot_size</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($real as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  <td><?= $value->title; ?></td>
				  <td><?= $value->address; ?></td>
				  <td><?= $value->city; ?></td>
				  <td><?= $value->state; ?></td>
				  <td><?= $value->zipcode; ?></td>
				  <td><img src="<?= base_url('uploads/'.$value->photo_main); ?>" width="100px"></td>
				  <td><?= $value->description; ?></td>
				  <td><?= $value->price; ?></td>
				  <td><?= $value->bathrooms; ?></td>
				  <td><?= $value->bedrooms; ?></td>
				  <td><?= $value->garage; ?></td>
				  <td><?= $value->sqft; ?></td>
				  <td><?= $value->plot_size; ?></td>
                  <td>
                 <a href="<?= base_url('listings/edit_list/'.$value->listing_id); ?>">Edit</a> |
				  <a href="<?= base_url('listings/delete_list/'.$value->listing_id); ?>">Delete</a>
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