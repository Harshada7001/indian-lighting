<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">	
            <h1>List Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('listings/add'); ?>">add list</a></li>
              <li class="breadcrumb-item active">edit List</li>
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
                <h3 class="card-title">List Category</h3>
              </div>
              <!-- /.card-header -->
			  <style>
				.form-group .error{
					color:red;
				}
			  
			  </style>
			  <?php foreach($real as $value){ ?>
              <!-- form start -->
              <form id="add-list" method="post">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="title">Category Name</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" >
                  </div>
				  <div class="form-group">
                    <label for="address">Status</label>
                    <select id="status" name="status" class="form-control" onchange="change_status(this,'<?php echo base64_encode($Data['id']);?>');">
															<option value="1" <?php if($Data['status']==1) { echo "selected"; } ?>>Active</option>
															<option value="0" <?php if($Data['status']==0) { echo "selected"; } ?>>Deactive</option>
															</select>
                  </div>
				 
				 
                  
				 </div>

                <div class="card-footer">
                  <button type="submit" onclick="add_list()" class="btn btn-primary">Submit</button>
                </div>
              </form>
		  <?php } ?>
            </div>
          </div>
         </div>
        </div>
    </section>