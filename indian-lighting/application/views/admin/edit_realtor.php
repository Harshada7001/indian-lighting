 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Realtor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('realtors/manage'); ?>">Manage Realtors</a></li>
              <li class="breadcrumb-item active">Add Realtors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add<small>Realtor</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <?php foreach($real as $value){ ?>
              <form id="add-realtor" method="post">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="name">RealtorName</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="realtor_name" value="<?= $value->realtor_name; ?>">
                  </div>
				  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $value->email; ?>">
					<?php if (form_error ('email') != '') { echo form_error ('email');  }?>
                  </div>
				  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile"value="<?= $value->mobile; ?>" >
                  </div>
				  <div class="form-group">
                    <label for="realtor_description">RealtorDescription</label>
                    <input type="text" class="form-control" id="realtor_description" placeholder="Description" name="realtor_description">
                  </div>
				  <div class="form-group">
                    <label for="hire_date">HireDate</label>
                    <input type="text" class="form-control" id="hire_date" placeholder="Hire_Date" name="hire_date">
                  </div>
                  <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" onclick="add_realtor()" class="btn btn-primary">Submit</button>
                </div>
              </form>
			  <?php } ;?>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 