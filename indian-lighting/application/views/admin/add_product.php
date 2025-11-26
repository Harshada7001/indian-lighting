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
          <h1>Products</h1>
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
    <div class="card-header" style="background:#f18223">
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
              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Material</label>
              <input type="text" class="form-control" name="pro_material" id="pro_material" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Color</label>
              <input type="text" class="form-control" name="pro_color" id="pro_color" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Indoor / Outdoor</label>
              <input type="text" class="form-control" name="pro_indoor" id="pro_indoor" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Manufature</label>
              <input type="text" class="form-control" name="pro_manufac" id="pro_manufac" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Selling price</label>
              <input type="text" class="form-control" name="selling_price" id="selling_price" placeholder="Enter ..." required>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Actual Price</label>
              <input type="text" class="form-control" name="cross_price" id="cross_price" placeholder="Enter ..." required>
            </div>
          </div>
          <!--  <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Product Code</label>-->
          <!--    <input type="text" class="form-control" name="model_no" id="model_no" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!--<div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Product Type</label>-->
          <!--    <input type="text" class="form-control" name="product_type" id="product_type" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          <!-- <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Height(inches/ft)</label>-->
          <!--    <input type="number" class="form-control" name="ht" id="ht" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!-- <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Length(inches/ft)</label>-->
          <!--    <input type="number" class="form-control" name="len" id="len" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!-- <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Width(inches/ft)</label>-->
          <!--    <input type="number" class="form-control" name="wid" id="wid" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!-- <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Upholstery Material</label>-->
          <!--    <input type="text" class="form-control" name="material" id="material" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!-- <div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Foam Type</label>-->
          <!--    <input type="text" class="form-control" name="foam" id="foam" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          
          <!--<div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Structural Material</label>-->
          <!--    <input type="text" class="form-control" name="strmtr" id="strmtr" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
          
          <!--<div class="col-sm-6">-->
            <!-- text input -->
          <!--  <div class="form-group">-->
          <!--    <label>Support</label>-->
          <!--    <input type="text" class="form-control" name="support" id="support" placeholder="Enter ..." required>-->
          <!--  </div>-->
          <!--</div>-->
<div class="col-sm-6">          
 <div class="form-group">
            <label>Select Category Name</label>
            <div>
                <?php foreach ($categories as $category) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category_id[]" value="<?= $category->id; ?>" id="category<?= $category->id; ?>" >
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
        
            <?php foreach ($subcategories as $sub) { ?>
                <div class="form-check">
                    <input  class="form-check-input" type="checkbox" id="<?= $sub->id ?>" name="subcategories_id[]" value="<?= $sub->id; ?>" >
                    <label class="form-check-label" for="<?= $sub->id; ?>"><?= $sub->subcategory_name ?></label>
               </div>
            <?php } ?>

    </div>
</div>

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
                    <div class="card-header" name="product_description">
                      <h3 class="card-title">
                        <b>Description</b>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="product_description" name="product_description" style="width:212px;border: 1px solid black;
}">
                
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
                  <div class="card-header" name="product_specification">
                    <h3 class="card-title">
                      <b>Specifications</b>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <textarea id="summernote" name="product_specification"style="width:212px;">
                
					</textarea>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="row">-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label>meta_title</label>-->
        <!--      <input type="text" class="form-control"name="meta_title" id="meta_title" placeholder="Enter ...">-->

        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="col-sm-6">-->

        <!--    <div class="form-group">-->
        <!--      <label>meta-description</label>-->
        <!--      <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Enter ...">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->


        <!--<div class="row">-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label>canonical</label>-->
        <!--      <input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter ...">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-sm-6">-->
        <!--    <div class="form-group">-->
        <!--      <label>url-slug</label>-->
        <!--      <input type="text" class="form-control" name="slug_url" placeholder="Enter ...">-->
        <!--    </div>-->
        <!--  </div>-->



          <!-- input states -->




        </div>

        <div class="row" class="label">
          <div class="col-md-6">

            <div class="form-group">
            <label for="product_img" class="form-label" style="display: flex;
    margin: auto;
    justify-content: center;">Image</label>
            <input class="form-control" type="file" id="product_img" name="product_img" required>
            </div>
          </div>
		  
		  <div class="col-md-6">

            <div class="form-group">
            <label for="product_img1" class="form-label"style="display: flex;
    margin: auto;
    justify-content: center;">Image1</label>
            <input class="form-control" type="file" id="product_img1" name="product_img1" >
            </div>
          </div>
		  
		  <div class="col-md-6">

            <div class="form-group">
            <label for="product_img2" class="form-label"style="display: flex;
    margin: auto;
    justify-content: center;">Image2</label>
            <input class="form-control" type="file" id="product_img2" name="product_img2">
            </div>
          </div>
		  
		  <div class="col-md-6">

            <div class="form-group">
            <label for="product_img3" class="form-label"style="display: flex;
    margin: auto;
    justify-content: center;">Image3</label>
            <input class="form-control" type="file" id="product_img3" name="product_img3">
            </div>
          </div>
		  
		         
</div>
		  
		  <div class="row">
		      <!--  <div class="col-md-6">-->
            <!-- New Checkbox for BOQ -->
        <!--    <div class="form-group">-->
        <!--        <div class="form-check">-->
        <!--            <input class="form-check-input" type="checkbox" name="allow_boq" id="allow_boq" value="1" onchange="toggleBoqFields()">-->
        <!--            <label class="form-check-label" for="allow_boq">-->
        <!--                Allow Product in BOQ?-->
        <!--            </label>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
		  
		  
		  <div id="boq-fields" class="hidden col-sm-6">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slab 1 (100 to 250)</label>
                    <input type="number" class="form-control" name="slab1_from" placeholder="From" min="100" max="250">
                    <input type="number" class="form-control" name="slab1_to" placeholder="To" min="100" max="250">
                </div>
           
            
                <div class="form-group">
                    <label>Slab 2 (250 to 500)</label>
                    <input type="number" class="form-control" name="slab2_from" placeholder="From" min="250" max="500">
                    <input type="number" class="form-control" name="slab2_to" placeholder="To" min="250" max="500">
                </div>
                </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slab 3 (500 to 700)</label>
                    <input type="number" class="form-control" name="slab3_from" placeholder="From" min="500" max="700">
                    <input type="number" class="form-control" name="slab3_to" placeholder="To" min="500" max="700">
                </div>
            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slab 4 (700 to 1000)</label>
                    <input type="number" class="form-control" name="slab4_from" placeholder="From" min="700" max="1000">
                    <input type="number" class="form-control" name="slab4_to" placeholder="To" min="700" max="1000">
                </div>
            </div>
        </div>
		  </div>
		  
		  
		  <!--<div class="col-sm-6">-->

    <!--        <div class="form-group">-->
    <!--        <label for="product_img4" class="form-label"style="display: flex;-->
    <!--margin: auto;-->
    <!--justify-content: center;">Image4</label>-->
    <!--        <input class="form-control" type="file" id="product_img4" name="product_img4">-->
    <!--        </div>-->
    <!--      </div>-->
		  
		  <!--<div class="col-sm-6">-->

    <!--        <div class="form-group">-->
    <!--        <label for="product_img5" class="form-label"style="display: flex;-->
    <!--margin: auto;-->
    <!--justify-content: center;">Image5</label>-->
    <!--        <input class="form-control" type="file" id="product_img5" name="product_img5" >-->
    <!--        </div>-->
    <!--      </div>-->
    
    </div>
        </div>


        <!-- input states -->
  <div class="card-footer" style="justify-content:center;display:flex;">
                  <button type="submit" onclick="add_product()" class="btn btn-primary">Submit</button>
                </div>



    </div>
  
      </form>


</div>
<!-- /.card-body -->



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
    function toggleBoqFields() {
        var checkbox = document.getElementById('allow_boq');
        var boqFields = document.getElementById('boq-fields');
        if (checkbox.checked) {
            boqFields.classList.remove('hidden');
        } else {
            boqFields.classList.add('hidden');
        }
    }
</script>


