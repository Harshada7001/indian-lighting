
<style>
@media (max-width:768px){
      .ht__bradcaump__wrap {
    align-items: center;
    display: flex;
    height: 80px!important;
}
#changingImage{
    height:170px!important;
}

    .details-list li {
         justify-content: left; 
    }

}
#changingImage{
    max-width:400px!important;
}  
.scroll-image-box{
    overflow-y:none!important;
}
.sticky-ad {
  position: relative; /* default */
}

.fixed-ad {
  position: fixed;
  top: 80px; /* adjust below your header height */
  width: 300px; /* match your col width */
  z-index: 999;
}

.stop-ad {
  position: absolute;
  bottom: 0;
  width: 100%;
}
</style>



<!-- Font Awesome 6.5 CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/Suppliers.webp'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <!--<div class="row">-->
                    <!--    <div class="col-12">-->
                    <!--        <div class="bradcaump__inner text-center">-->
                    <!--            <h2 class="bradcaump-title">Supplier List</h2>-->
                    <!--            <nav class="bradcaump-inner">-->
                    <!--              <a class="breadcrumb-item" href="<?//= base_url(); ?>">Home</a>-->
                    <!--              <span class="brd-separetor">/</span>-->
                    <!--              <span class="breadcrumb-item active">Supplier List</span>-->
                    <!--            </nav>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Our ShopSide Area -->
        <section class="htc__shop__sidebar modern-wave-section bg__white ptb--120">
            <div class="wave-background">
                <svg class="wave-svg" viewBox="0 0 1440 600" preserveAspectRatio="none">
                  <path class="wave1" fill="#cbe5ff" d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,154.7C1120,139,1280,149,1360,154.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" opacity="0.7"></path>
                  <path class="wave2" fill="#b2d7ff" d="M0,224L80,234.7C160,245,320,267,480,245.3C640,224,800,160,960,133.3C1120,107,1280,117,1360,122.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" opacity="0.6"></path>
                  <path class="wave3" fill="#a0cfff" d="M0,288L80,304C160,320,320,352,480,341.3C640,331,800,277,960,240C1120,203,1280,181,1360,170.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" opacity="0.5"></path>
                </svg>
              </div>
<div class="container" style="margin-top:-5%">
    <div class="row">
        <!-- LEFT COLUMN (Smaller) -->
                         <div class="col-lg-3 col-xl-3 col-md-4 col-xs-12">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                               <h3>Suppliers Search</h3>
                            </div>
                            <div class="category-menu-list p-4 bg-light shadow-sm rounded">
                               <form action="<?= base_url('home/searchSuppliers') ?>" method="GET">
                       <div class="mb-3">
                            <label for="company" class="form-label fw-semibold">🔍 Company</label>
                            <input type="text" class="form-control rounded-pill" name="company" id="company" placeholder="Search by company name" autocomplete="off">
                            <div id="companyList"></div>
                        </div>

                        <div class="mb-3">
                            <label for="product" class="form-label fw-semibold">📦 Product</label>  
                            <select class="form-control rounded-pill" name="product">
                                   <option value="">Select Category</option>
                            <?php foreach ($category as $cat): ?>
                                    <option value="<?= htmlspecialchars($cat->category_name); ?>"><?= htmlspecialchars($cat->category_name); ?></option>
                                     <?php endforeach; ?>
                                     </select>
                            <!--<input type="text" class="form-control rounded-pill" name="product" id="product" placeholder="Search by product" autocomplete="off">-->
                            <!--<div id="productList"></div>-->
                        </div>

                        <div class="mb-4">
                            <label for="location" class="form-label fw-semibold">📍 Location</label>
                            <input type="text" class="form-control rounded-pill" name="location" id="location" placeholder="Search by location" autocomplete="off">
                            <div id="locationList"></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold" style="background-color:#1f99a4">🔎 Search</button>
                    </form>

                            </div>


                        </div>
                    </div>
                    
                    
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){

    // Company autocomplete
    $('#company').keyup(function(){
        var query = $(this).val();
        if(query != '') {
            $.ajax({
                url: "<?= base_url('home/fetch_company') ?>",
                method: "POST",
                data: {query: query},
                success: function(data){
                    $('#companyList').fadeIn();
                    $('#companyList').html(data);
                }
            });
        } else {
            $('#companyList').fadeOut();
        }
    });

    $(document).on('click', '.company_item', function(){
        $('#company').val($(this).text());
        $('#companyList').fadeOut();
    });

    // Same logic for product
    $('#product').keyup(function(){
        var query = $(this).val();
        if(query != '') {
            $.ajax({
                url: "<?= base_url('home/fetch_product') ?>",
                method: "POST",
                data: {query: query},
                success: function(data){
                    $('#productList').fadeIn();
                    $('#productList').html(data);
                }
            });
        } else {
            $('#productList').fadeOut();
        }
    });

    $(document).on('click', '.product_item', function(){
        $('#product').val($(this).text());
        $('#productList').fadeOut();
    });

    // Same logic for location
    $('#location').keyup(function(){
        var query = $(this).val();
        if(query != '') {
            $.ajax({
                url: "<?= base_url('home/fetch_location') ?>",
                method: "POST",
                data: {query: query},
                success: function(data){
                    $('#locationList').fadeIn();
                    $('#locationList').html(data);
                }
            });
        } else {
            $('#locationList').fadeOut();
        }
    });

    $(document).on('click', '.location_item', function(){
        $('#location').val($(this).text());
        $('#locationList').fadeOut();
    });

});
</script>

<style>
/*#companyList, #productList, #locationList {*/
/*    position: absolute;*/
/*    z-index: 999;*/
/*    background-color: white;*/
/*    width: 10%;*/
/*    border: 1px solid #ccc;*/
/*}*/
.company_item, .product_item, .location_item {
    padding: 8px;
    cursor: pointer;
}
.company_item:hover, .product_item:hover, .location_item:hover {
    background-color: #f0f0f0;
}
</style>
        <!-- MIDDLE COLUMN (Larger) -->
<div class="col-lg-6 col-md-12 mb-4 order-2 order-lg-1">
  <div class="shop__grid__view__wrap another-product-style">
    <div class="supplier-premium-wrapper container-fluid">
      <?php if (!empty($suppliers)) : ?>
        <?php foreach ($suppliers as $supplier) : ?>
          <div class="premium-card p-3 border mb-4">

            <!-- Top row: logo + company name -->
            <div class="d-flex align-items-start mb-2">
  <!-- Logo -->
  <div class="premium-img-wrap me-3" style="flex-shrink: 0;">
    <img src="<?= base_url('admin/' . $supplier->logo); ?>" alt="<?= $supplier->company_name ?>" style="max-height: 60px;">
  </div>

  <!-- Text Block -->
  <div class="text-content align-items-center">
    <!-- Company Name (full name, no wrap under logo) -->
    <h2 class="m-0" style="font-size: 20px; font-weight: 800">
      <a href="<?= base_url('supplier_details/'.$supplier->company_name); ?>" class="text-decoration-none text-dark">
        <?= $supplier->company_name ?>
      </a>
    </h2>
       <p class="description"><?= $supplier->description ?></p>
  </div>
</div>

            <!-- Details list -->
            <ul class="details-list list-unstyled mb-3">
              <!--<li class="mb-2"><i class="fas fa-building me-2"></i> <?//= $supplier->company_name ?></li>-->
              <li class="mb-2"><i class="fas fa-user me-2"></i> <?= $supplier->phone ?></li>
              <li class="mb-2"><i class="fas fa-envelope me-2"></i> <?= $supplier->email ?></li>
              <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> <?= $supplier->address ?></li>
              <li class="mb-2"><i class="fas fa-globe me-2"></i>
                <a href="<?= $supplier->website ?>" target="_blank"><?= $supplier->website ?></a>
              </li>
            </ul>

            <!-- Buttons -->
            <div class="d-flex flex-wrap gap-2">
              <a href="<?= base_url('home/enquiry'); ?>" class="enquiry-btn btn btn-outline-dark">Send Enquiry</a>
              <a href="<?= base_url('supplier_details/'.$supplier->company_name); ?>" class="enquiry-btn visit-btn">Visit Page</a>
            </div>

          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p class="text-center text-muted">No suppliers available.</p>
      <?php endif; ?>
    </div>
    
    
    <h2>General Suppliers</h2>
        <div class="supplier-premium-wrapper container-fluid">
      <?php if (!empty($gensuppliers)) : ?>
        <?php foreach ($gensuppliers as $supplier) : ?>
          <div class="premium-card p-3 border mb-4">

            <!-- Top row: logo + company name -->
            <div class="d-flex align-items-start mb-2">
  <!-- Logo -->


  <!-- Text Block -->
  <div class="text-content align-items-center">
    <!-- Company Name (full name, no wrap under logo) -->
    <h2 class="m-0" style="font-size: 20px;">
      <a href="<?= base_url('supplier_details/'.$supplier->company_name); ?>" class="text-decoration-none text-dark">
        <?= $supplier->company_name ?>
      </a>
    </h2>
       <p class="description"><?= $supplier->description ?></p>
  </div>
</div>

            <!-- Details list -->
            <ul class="details-list list-unstyled mb-3">
              <!--<li class="mb-2"><i class="fas fa-building me-2"></i> <?//= $supplier->company_name ?></li>-->
              <li class="mb-2"><i class="fas fa-user me-2"></i> <?= $supplier->phone ?></li>
              <li class="mb-2"><i class="fas fa-envelope me-2"></i> <?= $supplier->email ?></li>
              <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> <?= $supplier->address ?></li>
              
            </ul>

            <!-- Buttons -->
      
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p class="text-center text-muted">No suppliers available.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

        <!-- RIGHT COLUMN (Optional - You can use it later) -->
        <!-- RIGHT COLUMN -->
 <div class="col-lg-3 col-md-6 mb-4 order-1 order-lg-2">
    <div class="scroll-image-box" id="stickyAdBox" style="height: auto; border: 1px solid #ddd; border-radius: 10px; padding: 15px;">
        <div id="imageSlider" style="text-align: center;">
            <p>Loading ads...</p>
        </div>
    </div>
</div>

<?php if (!empty($active_ads)) : ?>
<script>
    const ads = <?php
        $adsArray = [];
        foreach ($active_ads as $ad) {
            $adsArray[] = [
                'image' => base_url('admin/'.$ad->img),
                'url'   => $ad->link,
                'title' => $ad->supplier
            ];
        }
        echo json_encode($adsArray);
    ?>;

    let currentIndex = 0;
    const imgContainer = document.getElementById('imageSlider');

    function showAd(index) {
        const ad = ads[index];
        const imgTag = `<img src="${ad.image}" alt="${ad.title}" style="width: 100%; object-fit: cover; height: 400px; border-radius: 8px;">`;

        if (ad.url) {
            imgContainer.innerHTML = `<a href="${ad.url}" target="_blank">${imgTag}</a>`;
        } else {
            imgContainer.innerHTML = imgTag;
        }
    }

    // Show first ad immediately
    showAd(currentIndex);

    // Rotate ads every 5s
    setInterval(() => {
        currentIndex = (currentIndex + 1) % ads.length;
        showAd(currentIndex);
    }, 5000);
</script>

<script>
const adBox = document.getElementById("stickyAdBox");
const parent = adBox.parentElement;

window.addEventListener("scroll", () => {
  const parentRect = parent.getBoundingClientRect();
  const adHeight = adBox.offsetHeight;

  if (parentRect.top <= 80 && parentRect.bottom > adHeight + 80) {
    // Fix inside section
    adBox.classList.add("fixed-ad");
    adBox.classList.remove("stop-ad");
  } else if (parentRect.bottom <= adHeight + 80) {
    // Stick to bottom of parent
    adBox.classList.remove("fixed-ad");
    adBox.classList.add("stop-ad");
  } else {
    // Normal flow
    adBox.classList.remove("fixed-ad");
    adBox.classList.remove("stop-ad");
  }
});
</script>

<?php endif; ?>



    </div>
</div>
        </section>
        <!-- End Our ShopSide Area -->
        
        
     
