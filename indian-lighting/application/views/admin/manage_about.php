
  <div class="content-wrapper">
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url(
                   "admin/dashboard"
               ) ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(
                  "about/add"
              ) ?>">Add About us</a></li>
              <li class="breadcrumb-item active">Manage About Us</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage About us</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description1</th>
                    <th>Description2</th>
					<th>Date</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php
      $i = 1;
      foreach ($about as $value) { ?>
                  <tr>
				  <th scope="row"><?= $i ?></th>
				  <td><?= $value->title ?></td>
				  <td><?= $value->desc1 ?></td>
				  <td><?= $value->desc2 ?></td>
				  <td><?= $value->about_date ?></td>
                  <td>
                 <a href="<?= base_url(
                     "About/edit_about/" . $value->id
                 ) ?>">Edit</a> |
				  <a href="<?= base_url("About/delete_about/" . $value->id) ?>">Delete</a>
				</td>
                  </tr>
				  <?php $i++;}
      ?>
                  </tbody>
                 
                </table>
              </div>
           
            </div>
         
          </div>
        
        </div>
  
      </div>
    
    </section>
    
  </div>
