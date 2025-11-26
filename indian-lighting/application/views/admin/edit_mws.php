<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit MWS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('mws/manage'); ?>">list MWS</a></li>
            <li class="breadcrumb-item active">Edit MWS</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header" style="background:#f18223">
      <h3 class="card-title">Edit MWS</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      
	 <?php foreach($mws as $value){ ?>
     <form id="add-product" method="post" enctype="multipart/form-data" >
        <div class="row">
          <div class="form-group">
              <label>Category Name (Market we serve)</label>
             <div class="subcategory-select">
    <label for="category-select">Select a category:</label>
    <select class="form-select" name="category_id" id="category-select">
        <option value="">Select One</option>
        <?php foreach ($categories as $category) { ?>
            <option value="<?= $category->id; ?>"><?= $category->category_name; ?></option>
        <?php } ?>
    </select>
</div>

            </div>
 
        </div>
        <div class="row">
        
   
        </div>
        <div class="row">
         
       
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <!-- <label>Description</label> -->
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header" value="<?= $value->desc_1; ?>" name="desc_1" id="desc_1">
                      <h3 class="card-title">
                        <b>Description</b>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote">
                           <?= $value->desc_1 ?>
                        </textarea>
                    </div>

                  </div>
                </div>
                <!-- /.col-->
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">

              <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      <b>Specifications</b>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <textarea id="desc_2">
                 <?= $value->desc_2 ?>
					</textarea>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
     </div>

        <div class="row">
          <div class="col-sm-6">

           <div class="form-group">
        <label for="proj_img" class="form-label" style="text-align:center;margin: auto;display: flex;justify-content: center;    align-items: center;">Image</label>
        <input type="hidden" name="proj_img" value="<?= $value->proj_img; ?>">
        <input class="form-control" type="file" id="proj_img" name="proj_img">
        <?php if ($value->proj_img): ?>
		 <img src="<?= base_url('uploads/' . $value->proj_img); ?>" alt="image" style="max-width: 100px; display: flex;justify-content: center;margin: auto;  margin-top: 15px;">
            
        <?php endif; ?>
    </div>
          </div>
	
	
        </div>


        <!-- input states -->


<div class="card-footer" style="display:flex;justify-content:center;">
                  <button type="submit" onclick="add_mws()" class="btn btn-primary">Submit</button>
                </div>

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
<script>
  document.querySelector('#selector').addEventListener("focus", () => {

    document.querySelector('#dropdownbox').setAttribute("style", "");
  });

  function onclickdropitem(id) {
    console.log(id);
    document.querySelector('#selector').value = document.querySelector("#" + id + " p").innerHTML;

    document.querySelector('#dropdownbox').setAttribute("style", "display:none");
  }
</script>
<script>
    document.getElementById('categorySelect').addEventListener('change', function () {
        var categoryId = this.value;
        var subcategorySelect = document.getElementById('subcategorySelect');

        // Clear previous options
        subcategorySelect.innerHTML = '<option value="">Choose...</option>';

        // Filter subcategories based on selected category
        <?php foreach ($subcategories as $subcategory) { ?>
            if (<?= $subcategory->category_id; ?> == categoryId) {
                var option = document.createElement('option');
                option.value = '<?= $subcategory->id; ?>';
                option.textContent = '<?= $subcategory->subcategory_name; ?>';
                subcategorySelect.appendChild(option);
            }
        <?php } ?>
    });
</script>