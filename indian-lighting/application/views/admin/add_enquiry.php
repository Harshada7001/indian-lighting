<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enquiry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Enquiry/manage'); ?>">Manage Enquiry</a></li>
              <li class="breadcrumb-item active">Add Enquiry</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Enquiry</h3>
              </div>
              <!-- /.card-header -->
			  <style>
				.form-group .error{
					color:red;
				}
			  
			  </style>
			  
              <!-- form start -->
              <form id="add-enquiry" method="post" enctype="mulipart/form-data">
               <input type="hidden" name="enq_id" value="<?= $this->uri->segment(3); ?>">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
	<?php if (form_error ('email') != '') { echo form_error ('email');  }?>  
	<div class="form-group">
    <label for="name">FullName</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
	<?php if (form_error ('name') != '') { echo form_error ('fullname');  }?>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
	<?php if (form_error ('mobile') != '') { echo form_error ('mobile');  }?>
  </div>
    <button type="submit" onclick="submit()" class="btn button-style-w3">Submit</button>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->