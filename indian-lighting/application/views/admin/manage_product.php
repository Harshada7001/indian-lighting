 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('product/add'); ?>">Add Products</a></li>
              <li class="breadcrumb-item active">manage Products</li>
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
                <h3 class="card-title">Manage Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Subcategory</th>
					<th>Description</th>
					<!--<th>size</th>-->
					<!--<th>Colour</th>-->
					
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
				  <?php $i=1; foreach($product as $value){ ?>
                  <tr>
				  <th scope="row"><?= $i; ?></th>
				  
				  <td><?= $value->product_name; ?></td>
				  <td><img src="<?= base_url('uploads/' . $value->product_img); ?>" width="100" height="100" alt="slide Image"></td>
				  <!--<td><?//= $value->category_name; ?></td>-->
                    <td>
                       <?= $value->category_names; ?>
                    </td>


				  <td><?= $value->subcategory_names; ?></td>

				  <td><?= $value->product_description; ?></td>
				  
				  <!--<td><?//= $value->product_size; ?></td>-->
				  <!--<td><?//= $value->product_colour; ?></td>-->
				  <!--<td><?//= $value->len; ?></td>-->
				  <!--<td><?//= $value->wid; ?></td>-->
				  <!--<td><?//= $value->ht; ?></td>-->
				  <!--<td><?//= $value->material; ?></td>-->
				  <!--<td><?//= $value->foam; ?></td>-->
				  <!--<td><?//= $value->strmtr; ?></td>-->
				  <!--<td><?//= $value->support; ?></td>-->
				  
				  
                  <td>
                 <a href="<?= base_url('Product/edit_product/'.$value->product_id); ?>">Edit</a> |
				  <a href="<?= base_url('Product/delete_product/'.$value->product_id); ?>">Delete</a>
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