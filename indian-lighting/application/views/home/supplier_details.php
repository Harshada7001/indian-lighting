<style>
   .ad-image-container {
  position: relative;
  display: inline-block;
}

.gallery-img {
  display: block;
  width: 100%;
  height: auto;
}

/*.zoom-btn {*/
/*  position: absolute;*/
/*  top: -30px;*/
/*  right: 10px;*/
/*  background: rgba(0,0,0,0.6);*/
/*  color: white;*/
/*  border: none;*/
/*  border-radius: 50%;*/
/*  padding: 5px 10px;*/
/*  cursor: pointer;*/
/*  font-size: 18px;*/
/*  z-index: 10;*/
/*}*/
/*.img-modal {*/
/*  display: none;*/
/*  position: fixed;*/
/*  z-index: 9999;*/
/*  top: 0;*/
/*  left: 0;*/
/*  width: 100%;*/
/*  height: 100%;*/
/*  overflow: auto;*/
/*  background: rgba(0, 0, 0, 0.85);*/
/*  text-align: center;*/
/*  padding-top: 40px;*/
/*}*/
/*.img-modal .modal-content {*/
/*  margin: auto;*/
/*  display: block;*/
/*  max-width: 100%;*/
/*  max-height: 100%;*/
/*  width: auto;*/
/*  height: auto;*/
/*}*/

/*.close-btn {*/
/*  position: absolute;*/
/*  top: 30px;*/
/*  right: 50px;*/
/*  color: white;*/
/*  font-size: 40px;*/
/*  font-weight: bold;*/
/*  cursor: pointer;*/
/*  z-index: 10000;*/
/*}*/

.premium-img-wrap {
    flex: 0 0 200px;
    background: #f1f5f9;
    border-radius: 12px;
    padding: 20px;
    margin-left: 40px;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

</style>



<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/Suppliers.webp'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <!--<div class="row">-->
                    <!--    <div class="col-12">-->
                    <!--        <div class="bradcaump__inner text-center">-->
                    <!--            <h2 class="bradcaump-title">Supplier Details</h2>-->
                    <!--            <nav class="bradcaump-inner">-->
                    <!--              <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>-->
                    <!--              <span class="brd-separetor">/</span>-->
                    <!--              <span class="breadcrumb-item active">Supplier Details</span>-->
                    <!--            </nav>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>


<!--<section class="company-header">-->

<!--</section>-->


<section class="htc__shop__sidebar bg__white ptb--120">
    <?php foreach ($suppliers as $supplier) :
 ?>

     <div class="container-fluid px-0">
         <hr>
    <div class="header-bar d-flex justify-content-center">
      <!-- Logo Section with Image -->
       <div class="premium-img-wrap">
          <img src="<?= base_url('admin/' . $supplier->logo); ?>" alt="<?= $supplier->company_name ?>">
        </div>
      <!--<div class="logo-section d-flex align-items-center justify-content-center">-->
      <!--  <img src="<?php  //echo base_url('/admin/').$supplier->logo; ?>" alt="Logo" class="logo-img">-->
      <!--</div>-->

      <!-- Company Name -->
      <div class="company-name text-center flex-grow-1">
      <h2> <?php  echo $supplier->company_name; ?></h2>
      </div>
    </div>
     <?php   endforeach;
?>
  </div>
  <hr>
  <div class="container-fluid">
    <div class="row">
 <style>
     .category-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.category-list li {
    margin: 5px 0;
}

.category-list li a {
    display: block;
    padding: 10px 15px;
    background-color: #f0f0f0;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.category-list li a:hover {
    background-color: #007bff;
    color: #fff;
}

 </style>
      <!-- Left Column: PRODUCT CATEGORY -->
    <div class="col-md-3">
      <div class="category-box d-flex flex-column h-100">
        <h4 class="section-title">PRODUCT CATEGORY</h4>
        <div class="category-content mt-auto">
<ul class="category-list">
    <?php foreach ($suppliers as $supplier): ?>
        <?php 
            $categories = explode(',', $supplier->categories); 
            foreach ($categories as $category): 
        ?>
            <li><a href="#"><?= trim($category) ?></a></li>
        <?php endforeach; ?>
    <?php endforeach; ?>
</ul>

            
        </div>
    <!--<hr>-->
        <!-- Download section fixed at the bottom -->
<div class="download-section text-center mt-auto">
    <?php if (!empty($suppliers)): ?>
        <?php foreach ($suppliers as $cat): ?>
            
            <object class="pdf" 
                data="<?= base_url('supplier/' . $cat->catelog); ?>"
                width="200"
                height="300">
            </object>

            <div class="pdf-icons mt-3" style="font-weight: 700;font-size: 20px;">
                <span>Download Catalogue</span><br>

                <?php if (!empty($cat->catelog)): ?>
                    <div class="catalog-item">
                        <a href="<?= base_url('admin/' . $cat->catelog); ?>" target="_blank">
                            <img src="<?= base_url('static/PDF_file_icon.svg.png'); ?>" alt="PDF">
                        </a>
                        <?php if (!empty($cat->catelog_name)): ?>
                            <p><?= $cat->catelog_name; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($cat->catelog1)): ?>
                    <div class="catalog-item">
                        <a href="<?= base_url('admin/' . $cat->catelog1); ?>" target="_blank">
                            <img src="<?= base_url('static/PDF_file_icon.svg.png'); ?>" alt="PDF">
                        </a>
                        <?php if (!empty($cat->catelog1_name)): ?>
                            <p><?= $cat->catelog1_name; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($cat->catelog2)): ?>
                    <div class="catalog-item">
                        <a href="<?= base_url('admin/' . $cat->catelog2); ?>" target="_blank">
                            <img src="<?= base_url('static/PDF_file_icon.svg.png'); ?>" alt="PDF">
                        </a>
                        <?php if (!empty($cat->catelog2_name)): ?>
                            <p><?= $cat->catelog2_name; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">No products available.</p>
    <?php endif; ?>
</div>
     </div>
    </div>


      <!-- Middle Column: PRODUCT GALLERY -->
    <div class="col-md-6">
    <div class="gallery-box">
        <h4 class="section-title text-center">PRODUCT GALLERY</h4>
        <div class="row mt-3">

            
            
            <?php 
            // print_r($products);
            if (!empty($products)):
            ?>
                <?php foreach ($products as $product): ?>
                  <?php
        // Split comma-separated image paths
        $images = explode(",", $product->product_image);
        ?> <?php foreach ($images as $img): ?>
                    <div class="col-6 mb-6">
                        <img style="border:1px solid black"src="<?= base_url('admin/' . trim($img)); ?>" 
                             class="gallery-img" 
                             alt="<?= htmlspecialchars($product->product_name); ?>" height="250" width="250">
             
                    </div>
                    <?php endforeach; ?>
                    
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No products available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


      <!-- Right Column: UPLOADED AD PAGE -->
      <div class="col-md-3">
        <div class="ad-box">
          <!--<h4 class="section-title">AD PAGE</h4>-->
          <div class="ad-content">
               <?php 
            // print_r($products);
            if (!empty($suppliers)):
            ?>
                <?php foreach ($suppliers as $index => $ad): ?>
  <div class="ad-image-container position-relative mb-3">
    <img src="<?= base_url('admin/' . $ad->ads); ?>" 
         class="gallery-img img-fluid" 
         alt="<?= htmlspecialchars($ad->ads); ?>" 
         height="300" width="550">

   
    <!-- Stylish Zoom Button -->
    <button type="button" class="zoom-btn" data-img="<?= base_url('admin/' . $ad->ads); ?>" onclick="openModal(this)" aria-label="Zoom Image">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 24 24">
        <path d="M21.707 20.293l-5.387-5.387A7.928 7.928 0 0016 9a8 8 0 10-8 8 7.928 7.928 0 005.906-2.68l5.387 5.387a1 1 0 001.414-1.414zM4 9a5 5 0 115 5 5.006 5.006 0 01-5-5z"/>
      </svg>
    </button>
  </div>
<?php endforeach; ?>

            <?php else: ?>
      
                <p class="text-center">No Ads available.</p>
            <?php endif; ?>
              
          </div>
        </div>
      </div>

<div id="imgModal" class="img-modal">
  <span class="close-btn" onclick="closeModal()">×</span>
  <img class="modal-content" id="modalImage">
</div>




    </div>
  </div>
</section>



<script>
function openModal(btn) {
  const imgSrc = btn.getAttribute('data-img');
  document.getElementById('modalImage').src = imgSrc;
  document.getElementById('imgModal').style.display = 'block';
}

function closeModal() {
  document.getElementById('imgModal').style.display = 'none';
}
</script>

