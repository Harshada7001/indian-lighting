<style>
    @media (max-width: 768px) {
    .ht__bradcaump__wrap {
        height: 76px!important;
    }
}
</style>

 <!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/Product Gallery Main Banner.webp'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <!--<div class="row">-->
                    <!--    <div class="col-12">-->
                    <!--        <div class="bradcaump__inner text-center">-->
                    <!--            <h2 class="bradcaump-title">Product Gallery</h2>-->
                    <!--            <nav class="bradcaump-inner">-->
                    <!--              <a class="breadcrumb-item" href="index.html">Home</a>-->
                    <!--              <span class="brd-separetor">/</span>-->
                    <!--              <span class="breadcrumb-item active">Product Gallery</span>-->
                    <!--            </nav>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- Start BLog Area -->
        <div class="htc__blog__area ptb--120">
            <div class="container">
                
                <div class="row">
                    
                
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
<div class="col-lg-9 col-xl-9 col-md-8 col-xs-12 product-gallery">
  <h2 class="mb-4 text-center">Product Gallery</h2>
  <div class="row">
    <?php if (!empty($suppliers)): ?>
      <?php foreach ($suppliers as $index => $ad): ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="card">
            <button type="button" class="zoom-btn" data-img="<?= base_url('admin/' . $ad->ads); ?>" onclick="openModal(this)" aria-label="Zoom Image">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" viewBox="0 0 24 24">
                <path d="M21.707 20.293l-5.387-5.387A7.928 7.928 0 0016 9a8 8 0 10-8 8 7.928 7.928 0 005.906-2.68l5.387 5.387a1 1 0 001.414-1.414zM4 9a5 5 0 115 5 5.006 5.006 0 01-5-5z"/>
              </svg>
            </button>
            <img src="<?= base_url('admin/' . $ad->ads); ?>" alt="<?= htmlspecialchars($ad->ads); ?>" class="card-img-top">
            <div class="card-body text-center">
              <h6 class="mb-0"><?= htmlspecialchars($ad->company_name); ?></h6>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center">No Ads available.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Modal -->
<div id="imgModal" class="img-modal">
  <span class="close-btn" onclick="closeModal()">×</span>
  <img class="modal-content" id="modalImage">
</div>






                
                
    <!--       <div class="col-lg-9 col-xl-9 col-md-8 col-xs-12">-->
    <!--            <div class="blog__wrap blog--page clearfix">-->
    <!--        <?php// if (!empty($gallery)): ?>-->
    <!--            <?php //foreach ($gallery as $product): ?>-->
    <!--                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">-->
    <!--                    <div class="blog foo">-->
    <!--                        <div class="blog__inner">-->
    <!--                            <div class="blog__thumb">-->
    <!--                                <a href="#">-->
    <!--                                    <img src="<?//= base_url('admin/'.$product->product_img); ?>" alt="<?//= $product->product_name; ?>" class="img-fluid" />-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="blog__details text-center mt-2">-->
    <!--                                <h5><?//= $product->product_name; ?></h5>-->
    <!--                                <p><strong>Price:</strong> ₹<?//= number_format($product->price, 2); ?></p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            <?php //endforeach; ?>-->
    <!--        <?php //else: ?>-->
    <!--            <p>No products found.</p>-->
    <!--        <?php //endif; ?>-->
    <!--    </div>-->
    <!--</div>-->
</div>
            </div>

                <!-- Start Load More BTn -->
                <!--<div class="row mt--60">-->
                <!--    <div class="col-md-12">-->
                <!--        <div class="htc__loadmore__btn">-->
                <!--            <a href="#">load more</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- End Load More BTn -->
            </div>
        </div>
        <!-- End BLog Area -->
        
        <script>
function openModal(btn) {
  const imgSrc = btn.getAttribute('data-img');
  document.getElementById('modalImage').src = imgSrc;
  document.getElementById('imgModal').style.display = 'block';

  // Hide header
  document.querySelector('header').style.display = 'none';
}

function closeModal() {
  document.getElementById('imgModal').style.display = 'none';

  // Show header back
  document.querySelector('header').style.display = '';
}

</script>

