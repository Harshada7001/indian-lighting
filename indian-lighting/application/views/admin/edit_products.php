     <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css">

 <style>
        .hidden {
            display: none;
        }
    </style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product/manage'); ?>">list Product</a></li>
            <li class="breadcrumb-item active">Edit product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="card card-warning" style="width: 80%;margin:auto;">
    <div class="card-header" style="background:#f18223">
      <h3 class="card-title">Edit Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      
	 <?php foreach($product as $value){ ?>
     <form id="add-product" method="post" enctype="multipart/form-data" >
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label >Product Name</label>
              <input type="text" class="form-control" name="product_name" id="product_name" value="<?=$value->product_name; ?>" placeholder="Enter ...">
            </div>
          </div>
 
    <div class="col-sm-6">          
 <div class="form-group">
            <label>Select Category Name</label>
            <div>
                <?php 
                
                // echo $value->category_id;
                // $s = [7, 8];
                $selected_ids_string = $value->category_id; // This should come from your database query

    // Convert the string to an array
    $s = explode(',', $selected_ids_string);
                
                foreach ($categories as $category) {
                
                
                
                
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category_id[]" value="<?= $category->id; ?>" id="category<?= $category->id; ?>" <?php if (in_array($category->id, $s)) echo 'checked'; ?>>
                        <label class="form-check-label" for="category<?= $category->id; ?>">
                            <?= $category->category_name; ?>
                        </label>
                    </div>
                <?php } ?>
            </div>
    </div>
 </div>     

<div class="col-sm-6">
    <div class="form-group">
        <label>Select Subcategory Name</label>
         <div>
          <?php 
          
        //   echo $value->subcategory_id;
           // $s = [7, 8];
                $selected_ids_string1 =$value->subcategory_id; // This should come from your database query

    // Convert the string to an array
    $s1 = explode(',', $selected_ids_string1);
                
           //if (in_array($sub['id'], $s1)) echo 'checked'; 
          foreach ($subcategories as $sub) { 
     
        //   echo $sub['id'];
          
          ?>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="subcategory<?= $sub['id'] ?>" name="subcategory_id[]" value="<?= $sub['id']; ?>" <?php if (in_array($sub['id'], $s1)) echo 'checked' ?>>
        <label class="form-check-label" for="subcategory<?= $sub['id']; ?>">
            <?= $sub['subcategory_name'] ?>
        </label>
    </div>
<?php } ?>

 </div>
    </div>
</div>
        </div>
        <div class="row">
        
        
   <!--<div class="col-sm-6">-->
   <!--         <div class="form-group" >-->

   <!--           <label>Select Size</label>-->
   <!--           <select class="form-control" name="product_size">-->
   <!--             <option>Choose..</option>-->
   <!--             <option>Small</option>-->
   <!--             <option>Medium</option>-->
   <!--             <option>Large</option>-->
   <!--             <option>Extra Large</option>-->
                <!-- <option>option 5</option> -->
   <!--           </select>-->


   <!--         </div>-->
   <!--       </div>-->
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
                    <div class="card-header" value="<?= $value->product_description; ?>">
                      <h3 class="card-title">
                        <b>Description</b>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="product_description">
                           <?= $value->product_description ?>
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
                    <textarea id="summernote" name="product_specification">
                 <?= $value->product_specification ?>
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
        <label for="product_img" class="form-label" style="text-align:center;margin: auto;display: flex;justify-content: center;    align-items: center;">Image</label>
        <input type="hidden" name="product_img" value="<?= $value->product_img; ?>">
        <input class="form-control" type="file" id="product_img" name="product_img">
        <?php if ($value->product_img): ?>
		 <img src="<?= base_url('uploads/' . $value->product_img); ?>" alt="image" style="max-width: 100px; display: flex;justify-content: center;margin: auto;  margin-top: 15px;">
            
        <?php endif; ?>
    </div>
          </div>
		  
		  <div class="col-sm-6">
            <div class="form-group">
                <label for="product_img1" class="form-label"  style="text-align:center;margin: auto;display: flex;justify-content: center;    align-items: center;">Image1</label>
                <input type="hidden" name="product_img1" value="<?= $value->product_img; ?>">
                <input class="form-control" type="file" id="product_img1" name="product_img1">
            <?php if ($value->product_img1): ?>
    		 <img src="<?= base_url('uploads/' . $value->product_img1); ?>" alt="image" style="max-width: 100px; margin-top: 10px;display: flex;justify-content: center;margin: auto;  margin-top: 15px;">
                
            <?php endif; ?>
            </div>
	    </div>	  
		  <div class="col-sm-6">

            <div class="form-group">
        <label for="product_img2" class="form-label"  style="text-align:center;margin: auto;display: flex;justify-content: center;    align-items: center;">Image2</label>
        <input type="hidden" name="product_img2" value="<?= $value->product_img2; ?>">
        <input class="form-control" type="file" id="product_img2" name="product_img2">
        <?php if ($value->product_img2): ?>
		 <img src="<?= base_url('uploads/' . $value->product_img2); ?>" alt="image" style="max-width: 100px; margin-top: 10px;display: flex;justify-content: center;margin: auto;  margin-top: 15px;">
            
        <?php endif; ?>
    </div>
	</div>	  
		  <div class="col-sm-6">

            <div class="form-group">
        <label for="product_img3" class="form-label"  style="text-align:center;margin: auto;display: flex;justify-content: center;    align-items: center;">Image3</label>
        <input type="hidden" name="product_img3" value="<?= $value->product_img3; ?>">
        <input class="form-control" type="file" id="product_img3" name="product_img3">
        <?php if ($value->product_img3): ?>
		 <img src="<?= base_url('uploads/' . $value->product_img3); ?>" alt="image" style="max-width: 100px; margin-top: 10px;display: flex;justify-content: center;margin: auto;  margin-top: 15px;">
            
        <?php endif; ?>
    </div>
	</div>	  

    
        </div>


        <!-- input states -->

        </div>
    
    <div class="card-footer" style="display:flex;justify-content:center;">
                  <button type="submit" onclick="add_product()" class="btn btn-primary">Submit</button>
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
<!--<script>-->
<!--    function toggleBoqFields() {-->
        // var checkbox = document.getElementById('allow_boq');
        // var boqFields = document.getElementById('boq-fields');
<!--        if (checkbox.checked) {-->
<!--            boqFields.classList.remove('hidden');-->
<!--        } else {-->
<!--            boqFields.classList.add('hidden');-->
<!--        }-->
<!--    }-->
<!--</script>-->
