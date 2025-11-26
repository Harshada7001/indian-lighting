<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">	
            <h1>List Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">List</li>
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
                <h3 class="card-title">List Order</h3>
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
                    <label for="title">User</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
                  </div>
                  <div class="form-group">
                    <label for="title">Product Name</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="title">Product Code</label>
                    <input type="text" class="form-control" id="title" placeholder="code" name="title" value="<?= $value->title; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="title">Quntity</label>
                    <input type="number" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="order">Order ID</label>
                    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID">
                  </div>

				  <div class="form-group">
                    <label for="address">Payment Status</label>
                    <select id="status" name="status" class="form-control" onchange="change_status(this,'<?php echo base64_encode($Data['id']);?>');">
							<option value="1" <?php if($Data['status']==1) { echo "selected"; } ?>>Active</option>
							<option value="0" <?php if($Data['status']==0) { echo "selected"; } ?>>Deactive</option>
					</select>
                  </div>
				 <div class="form-group">
                    <label for="order">Date</label>
                    <input type="text" class="form-control" id="date" placeholder="date" name="date">
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