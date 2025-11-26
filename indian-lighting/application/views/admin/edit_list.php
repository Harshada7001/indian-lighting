<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">	
            <h1>Listings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('listings/add'); ?>">add List</a></li>
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
                <h3 class="card-title">Add Listing</h3>
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
                    <label for="title">title</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= $value->title; ?>" >
                  </div>
				  <div class="form-group">
                    <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?= $value->address; ?>" >
					<?php if (form_error ('address') != '') { echo form_error ('address');  }?>

                  </div>
				  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?= $value->city; ?>">
                  </div>
				 <div class="form-group col-md-4">
				  <label for="state">State</label>
				  <select id="state" class="form-control" id="state" name="state" value="<?= $value->state; ?>">
					<option selected>Choose...</option>
					<option>Andhra Pradesh</option>
					<option>Assam</option>
					<option>Bihar</option>
					<option>uttar Pradesh</option>
					<option>Maharashtra</option>
					<option>Manipur</option>
					<option>Rajasthan</option>
				  </select>
				</div>
				<div class="form-group col-md-12">
					  <label for="zipcode">Zipcode</label>
					  <input type="text" class="form-control" id="zipcode" name="zipcode" value="<?= $value->zipcode; ?>">
					</div>
				 
					<div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="description" name="description" >
                  </div>			
								
				<div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="price" name="price" value="<?= $value->price; ?>">
                  </div>
				  <div class="form-group">
                    <label for="bathrooms">BathRooms</label>
                    <input type="text" class="form-control" id="bathrooms" placeholder="bathrooms" name="bathrooms" value="<?= $value->bathrooms; ?>">
                  </div>
				  <div class="form-group">
                    <label for="bedrooms">Bedrooms</label>
                    <input type="text" class="form-control" id="bedrooms" placeholder="bedrooms" name="bedrooms" value="<?= $value->bedrooms; ?>">
                  </div>
				  <div class="form-group">
                    <label for="garage">garage</label>
                    <input type="text" class="form-control" id="garage" placeholder="garage" name="garage" value="<?= $value->garage; ?>">
                  </div>
				  <div class="form-group">
                    <label for="sqft">SQ-FT</label>
                    <input type="text" class="form-control" id="sqft" placeholder="sqft" name="sqft" value="<?= $value->sqft; ?>">
                  </div>
				  <div class="form-group">
                    <label for="plot size">Plot-Size</label>
                    <input type="text" class="form-control" id="plot size" placeholder="plot size" name="plot_size" value="<?= $value->plot_size; ?>">
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