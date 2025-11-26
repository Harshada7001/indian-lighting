<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Customer Says</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Customersays/manage'); ?>">List Customersays</a></li>
            <li class="breadcrumb-item active">Add Customersays</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

   <div class="card card-warning" style="width: 80%;margin:auto;">
              <div class="card-header"style="background:#f18223">
                <h3 class="card-title">Add Customer Says</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  	  <?php foreach($cust as $value){ ?>
                 <form id="add-blog" method="post" enctype="multipart/form-data" >

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="name"  id="name" class="form-control" placeholder="Enter ..." value="<?= $value->name; ?>" required>
                      </div>
                    </div>
				
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Enter ..." value="<?= $value->description; ?>"required>
                      </div>
                    </div>
     
                  </div>

                  <!-- input states -->
                

                  
                 
                <div class="card-footer">
                  <button type="submit" onclick="add_cust()" class="btn btn-primary">Submit</button>
                </div>
                </form>
                	<?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</div>
</div>

</div>
</div>
<!--<script>-->
<!--  document.querySelector('#selector').addEventListener("focus", () => {-->

<!--    document.querySelector('#dropdownbox').setAttribute("style", "");-->
<!--  });-->

<!--  function onclickdropitem(id) {-->
<!--    console.log(id);-->
<!--    document.querySelector('#selector').value = document.querySelector("#" + id + " p").innerHTML;-->

<!--    document.querySelector('#dropdownbox').setAttribute("style", "display:none");-->
<!--  }-->
<!--</script>-->