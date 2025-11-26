<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product/manage'); ?>">list Product</a></li>
            <li class="breadcrumb-item active">Add product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header">
      <h3 class="card-title">Add Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
     <form id="add-product" method="post" enctype="multipart/form-data" >
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter ...">
            </div>
          </div>
  <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Model Number</label>
              <input type="text" class="form-control" name="model_no" id="model_no" placeholder="Enter ...">
            </div>
          </div>
	<div class="col-sm-6">
    <div class="form-group">
        <label>Select Category Name</label>
        <select class="form-control" name="category_id" id="categorySelect">
            <option value="">Choose...</option>
            <?php foreach ($categories as $category) { ?>
                <option value="<?= $category->id; ?>"><?= $category->category_name; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Select SubCategory Name</label>
        <select class="form-control" name="subcategory_id" id="subcategorySelect">
            <option value="">Choose...</option>
            <?php foreach ($subcategories as $subcategory) { ?>
                <option value="<?= $subcategory->id; ?>" data-category="<?= $subcategory->category_id; ?>"><?= $subcategory->subcategory_name; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
        </div>
        <div class="row">
        
         

          <div class="col-sm-6">
          <div class="form-group">
              <label>Select Colour</label>
              <select class="form-control" name="product_colour">
                
                <option value="0">Brawn</option>
                <option value="1">Black</option>
                
              </select>
            </div>
          </div>
   <div class="col-sm-6">
            <div class="form-group" >

              <label>Select Size</label>
              <select class="form-control" name="product_size">
                <option>Choose..</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
                <!-- <option>option 5</option> -->
              </select>


            </div>
          </div>
        </div>
        
        
          
            <!-- textarea -->
            
              <!-- <label>Description</label> -->
              <div class="row">
                <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" name="product_description" id="product_description" placeholder="Enter ...">
            </div>
          </div>
                    <!-- /.card-header -->
    
                <!-- /.col-->
            
            
        

              <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label>specification</label>
              <input type="text" class="form-control" name="product_specification" id="product_specification" placeholder="Enter ...">
            </div>
          </div>
            
            </div>
       
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>meta_title</label>
              <input type="text" class="form-control"name="meta_title" id="meta_title" placeholder="Enter ...">

            </div>
          </div>

          <div class="col-sm-6">

            <div class="form-group">
              <label>meta-description</label>
              <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Enter ...">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>canonical</label>
              <input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter ...">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>url-slug</label>
              <input type="text" class="form-control" name="slug_url" placeholder="Enter ...">
            </div>
          </div>



          <!-- input states -->




        </div>

        <div class="row">
          <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img" class="form-label">Image</label>
            <input class="form-control" type="file" id="product_img" name="product_img" required>
            </div>
          </div>
		  
		  <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img1" class="form-label">Image1</label>
            <input class="form-control" type="file" id="product_img1" name="product_img1" required>
            </div>
          </div>
		  
		  <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img2" class="form-label">Image2</label>
            <input class="form-control" type="file" id="product_img2" name="product_img2">
            </div>
          </div>
		  
		  <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img3" class="form-label">Image3</label>
            <input class="form-control" type="file" id="product_img3" name="product_img3">
            </div>
          </div>
		  
		  <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img4" class="form-label">Image4</label>
            <input class="form-control" type="file" id="product_img4" name="product_img4">
            </div>
          </div>
		  
		  <div class="col-sm-6">

            <div class="form-group">
            <label for="product_img5" class="form-label">Image5</label>
            <input class="form-control" type="file" id="product_img5" name="product_img5" >
            </div>
          </div>
        </div>


        <!-- input states -->




    </div>
    <div class="card-footer">
                  <button type="submit" onclick="add_product()" class="btn btn-primary">Submit</button>
                </div>
      </form>


</div>
<!-- /.card-body -->
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