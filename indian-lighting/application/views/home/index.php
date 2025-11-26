  <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <!-- End Offset Wrapper -->
        
        <!-- Banner Section -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>


          <div class="carousel-inner">

            <!--<div class="carousel-item active">-->
            <!--  <div class="banner" style="background-image: url('https://images.pexels.com/photos/265076/pexels-photo-265076.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"></div>-->
            <!--  <div class="carousel-caption d-none d-md-block">-->
            <!--     <h1 class="">INDIAS LARGEST LIGHTING NETWORK</h1>-->
                 
            <!--   </div>-->
            <!--</div>-->
            

            <div class="carousel-item active">
              <div class="banner" style="background-image: url('<?= base_url('static/frontend/images/banner/main_banner.webp'); ?>')"></div>
              <div class="carousel-caption d-none d-md-block">
                 <!--<h1 class="">INDIAS LARGEST LIGHTING NETWORK</h1>-->
                  
              </div>
            </div>


            <!--<div class="carousel-item ">-->
            <!--  <div class="banner" style="background-image: url('https://images.pexels.com/photos/373465/pexels-photo-373465.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"></div>-->
            <!--  <div class="carousel-caption d-none d-md-block">-->
            <!--    <h1 class="">RESPONSIVE WEBSITE</h1>-->
                <!--<h2 class="">PSD TO HTML</h2>-->
                <!--<h3 class="">BOOTSTRAP</h3>-->
            <!--   </div>-->
            <!--</div>-->
           

            

          </div>


          <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
          <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
          <!--  <span class="sr-only">Previous</span>-->
          <!--</a>-->
          <!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
          <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
          <!--  <span class="sr-only">Next</span>-->
          <!--</a>-->
        </div>


 
        
        
        <!-- Start Feature Product -->
        <section class="categories-slider-area  ptb--100 bg__white">
            <div class="container">
                <div class="row flex-row-reverse">
                    <!-- Start Left Feature -->
                   <div class="col-lg-9 col-xl-9 col-md-8 col-xs-12">
  <!-- Start Slider Area -->
              <div class="slider__container slider--one">
                <div class="slider__activation__wrap owl-carousel owl-theme">
            
                  <!-- Start Single Slide -->
                  <div class="slide slider__full--screen slider-height-inherit" style="background: #f5f5f5;">
                    <div class="container">
                      <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                          <!-- Replace with your FlippingBook embed code below -->
<iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/b6961d350d.html" style="border: 1px solid lightgray; width: 100%; height: 600px;"></iframe>                             <!--<iframe src="https://online.flippingbook.com/view/912520918/" width="200%" height="600" frameborder="0" allowfullscreen="true"></iframe>-->
                        </div>
                      </div>
                    </div>
                  </div>
      <!-- End Single Slide -->

      <!-- Add another slide if needed -->
      <!--<div class="slide slider__full--screen slider-height-inherit" style="background: #f5f5f5;">-->
      <!--  <div class="container">-->
      <!--    <div class="row">-->
      <!--      <div class="col-12 d-flex justify-content-center">-->
      <!--        <iframe src="https://online.flippingbook.com/view/your-second-flipbook-id/" width="100%" height="600px" frameborder="0" allowfullscreen="true"></iframe>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

    </div>
  </div>
  <!-- End Slider Area -->
</div>

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
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
        <div class="only-banner ptb--30 bg__white">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mb-4 mb-md-0"> <!-- ADD THIS CLASS -->
                <div class="only-banner-img">
                  <a href="<?= base_url('product_gallery'); ?>">
                    <img src="<?= base_url('static/frontend/images/new-product/Product-Gallery.webp'); ?>">
                    <div class="overlay-text">View Details<span class="arrow">→</span></div>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="only-banner-img">
                  <a href="javascript:void(0);" onclick="showOnlineStore()">
                    <img src="<?= base_url('static/frontend/images/new-product/Media-Gallery.webp'); ?>">
                    <div class="overlay-text">View Details <span class="arrow">→</span></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Start Our Product Area -->
        <section id="onlineStoreSection" class="htc__product__area bg__white" style="display: none;">
                <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>Online Store</h3>
                            </div>
                            <div class="product-categories-menu">
                                <ul>
                                    <?php if (!empty($category)): ?>
                <?php foreach ($category as $cat): ?>
                                    <li><a href="#"><?= htmlspecialchars($cat->category_name); ?></a></li>
                                     <?php endforeach; ?>
            <?php else: ?>
                <li>No category found.</li>
            <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="product-style-tab">
                            <!--<div class="product-tab-list">-->
                                <!-- Nav tabs -->
                            <!--    <ul class="tab-style nav" role="tablist">-->
                            <!--        <li>-->
                            <!--            <a class="active" href="#home1" data-bs-toggle="tab">-->
                            <!--                <div class="tab-menu-text">-->
                            <!--                    <h4>latest </h4>-->
                            <!--                </div>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#home2" data-bs-toggle="tab">-->
                            <!--                <div class="tab-menu-text">-->
                            <!--                    <h4>best sale </h4>-->
                            <!--                </div>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#home3" data-bs-toggle="tab">-->
                            <!--                <div class="tab-menu-text">-->
                            <!--                    <h4>top rated</h4>-->
                            <!--                </div>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#home4" data-bs-toggle="tab">-->
                            <!--                <div class="tab-menu-text">-->
                            <!--                    <h4>on sale</h4>-->
                            <!--                </div>-->
                            <!--            </a>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <div class="tab-content another-product-style jump" style="margin-top:-30px">
                                <div class="tab-pane active" >
        <div class="product-slider-active owl-carousel">
            <?php 
            
            if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="product">
                        <div class="product__inner">
                            <div class="pro__thumb">
                           <a href="<?= base_url('product_detail/') . $product->product_id; ?>">
                                    <img src="<?= base_url('admin/' . $product->product_image); ?>" alt="<?= $product->product_name; ?>" height="250" width="250">
                                </a>
                            </div>
                        </div>
                        <div class="product__details">
                            <h2><a href="<?= base_url('product_detail/') . $product->product_id; ?>"><?= htmlspecialchars($product->product_name); ?></a></h2>
                            <!-- You can add price here -->
                            <ul class="product__price">
                                <!--<li class="new__price">₹<?//= number_format($product->price, 2); ?></li>-->
                                <li class="new__price">Supplier Name:<?= $product->supplier_id; ?></li>
                                 <li class="new__price">Category Name:<?= $product->category_id; ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>
    </div>
                                <!--<div class="tab-pane active" id="home1">-->
                                <!--    <div class="product-slider-active owl-carousel">-->
                                <!--        <div class="product">-->
                                <!--            <div class="product__inner">-->
                                <!--                <div class="pro__thumb">-->
                                <!--                    <a href="#">-->
                                <!--                        <img src="<?= base_url('static/frontend/images/product/1.png'); ?>">-->
                                <!--                    </a>-->
                                <!--                </div>-->
                                                <!--<div class="product__hover__info">-->
                                                <!--    <ul class="product__action">-->
                                                <!--        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
                                                <!--        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
                                                <!--        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                <!--            </div>-->
                                <!--            <div class="product__details">-->
                                <!--                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
                                                <!--<ul class="product__price">-->
                                                <!--    <li class="old__price">$16.00</li>-->
                                                <!--    <li class="new__price">$10.00</li>-->
                                                <!--</ul>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                        
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="tab-pane" id="home2">-->
                                <!--    <div class="product-slider-active owl-carousel">-->
                                        
                                <!--        <div class="product">-->
                                <!--            <div class="product__inner">-->
                                <!--                <div class="pro__thumb">-->
                                <!--                    <a href="#">-->
                                <!--                        <img src="<?= base_url('static/frontend/images/product/8.png'); ?>">-->
                                <!--                    </a>-->
                                <!--                </div>-->
                                                <!--<div class="product__hover__info">-->
                                                <!--    <ul class="product__action">-->
                                                <!--        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
                                                <!--        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
                                                <!--        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                <!--            </div>-->
                                <!--            <div class="product__details">-->
                                <!--                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
                                                <!--<ul class="product__price">-->
                                                <!--    <li class="old__price">$16.00</li>-->
                                                <!--    <li class="new__price">$10.00</li>-->
                                                <!--</ul>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="tab-pane" id="home3">-->
                                <!--    <div class="product-slider-active owl-carousel">-->
                                <!--        <div class="product">-->
                                <!--            <div class="product__inner">-->
                                <!--                <div class="pro__thumb">-->
                                <!--                    <a href="#">-->
                                <!--                        <img src="<?= base_url('static/frontend/images/product/2.png" alt="product images'); ?>">-->
                                <!--                    </a>-->
                                <!--                </div>-->
                                                <!--<div class="product__hover__info">-->
                                                <!--    <ul class="product__action">-->
                                                <!--        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
                                                <!--        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
                                                <!--        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                <!--            </div>-->
                                <!--            <div class="product__details">-->
                                <!--                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
                                                <!--<ul class="product__price">-->
                                                <!--    <li class="old__price">$16.00</li>-->
                                                <!--    <li class="new__price">$10.00</li>-->
                                                <!--</ul>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                        
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="tab-pane" id="home4">-->
                                <!--    <div class="product-slider-active owl-carousel">-->
                                <!--        <div class="product">-->
                                <!--            <div class="product__inner">-->
                                <!--                <div class="pro__thumb">-->
                                <!--                    <a href="#">-->
                                <!--                        <img src="<?= base_url('static/frontend/images/product/9.png'); ?>"></a>-->
                                <!--                </div>-->
                                                <!--<div class="product__hover__info">-->
                                                <!--    <ul class="product__action">-->
                                                <!--        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
                                                <!--        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
                                                <!--        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                <!--            </div>-->
                                <!--            <div class="product__details">-->
                                <!--                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
                                                <!--<ul class="product__price">-->
                                                <!--    <li class="old__price">$16.00</li>-->
                                                <!--    <li class="new__price">$10.00</li>-->
                                                <!--</ul>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                       
                                <!--        <div class="product">-->
                                <!--            <div class="product__inner">-->
                                <!--                <div class="pro__thumb">-->
                                <!--                    <a href="#">-->
                                <!--                        <img src="<?= base_url('static/frontend/images/product/2.png'); ?>">-->
                                <!--                    </a>-->
                                <!--                </div>-->
                                                <!--<div class="product__hover__info">-->
                                                <!--    <ul class="product__action">-->
                                                <!--        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
                                                <!--        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
                                                <!--        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                <!--            </div>-->
                                <!--            <div class="product__details">-->
                                <!--                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
                                                <!--<ul class="product__price">-->
                                                <!--    <li class="old__price">$16.00</li>-->
                                                <!--    <li class="new__price">$10.00</li>-->
                                                <!--</ul>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <!--<div class="only-banner ptb--30 bg__white">-->
        <!--    <div class="container">-->
        <!--        <div class="only-banner-img">-->
        <!--           <img src="<?//= base_url('static/frontend/images/new-product/small_banner.webp'); ?>">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Start Our Product Area -->
        <!--<section class="htc__product__area pb--100 bg__white">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-3">-->
        <!--                <div class="product-categories-all">-->
        <!--                    <div class="product-categories-title">-->
        <!--                        <h3>BAGS & SHOES</h3>-->
        <!--                    </div>-->
        <!--                    <div class="product-categories-menu">-->
        <!--                        <ul>-->
        <!--                            <li><a href="#">awesome Rings</a></li>-->
        <!--                            <li><a href="#">Hot Earrings</a></li>-->
        <!--                            <li><a href="#">Jewelry Sets</a></li>-->
        <!--                            <li><a href="#">Beads Jewelry</a></li>-->
        <!--                            <li><a href="#">Men's Watches</a></li>-->
        <!--                            <li><a href="#">Women’s Watches</a></li>-->
        <!--                            <li><a href="#">Popular Bracelets</a></li>-->
        <!--                            <li><a href="#"> Pendant Necklaces</a></li>-->
        <!--                            <li><a href="#">Children's Watches</a></li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-9">-->
        <!--                <div class="product-style-tab">-->
        <!--                    <div class="product-tab-list">-->
                                <!-- Nav tabs -->
        <!--                        <ul class="tab-style nav" role="tablist">-->
        <!--                            <li>-->
        <!--                                <a class="active" href="#home5" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>latest </h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home6" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>best sale </h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home7" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>top rated</h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home8" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>on sale</h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                    <div class="tab-content another-product-style jump">-->
        <!--                        <div class="tab-pane active" id="home5">-->
        <!--                            <div class="product-slider-active owl-carousel">-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/1.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/2.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/3.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/4.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/5.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home6">-->
        <!--                            <div class="product-slider-active owl-carousel">-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/4.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/5.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/6.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/7.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/8.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/9.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home7">-->
        <!--                            <div class="product-slider-active owl-carousel">-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/2.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/1.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/5.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/4.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/3.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/7.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home8">-->
        <!--                            <div class="product-slider-active owl-carousel">-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/9.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/5.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/3.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/4.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/2.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product">-->
        <!--                                    <div class="product__inner">-->
        <!--                                        <div class="pro__thumb">-->
        <!--                                            <a href="#">-->
        <!--                                                <img src="images/product/7.png" alt="product images">-->
        <!--                                            </a>-->
        <!--                                        </div>-->
        <!--                                        <div class="product__hover__info">-->
        <!--                                            <ul class="product__action">-->
        <!--                                                <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="product__details">-->
        <!--                                        <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                        <ul class="product__price">-->
        <!--                                            <li class="old__price">$16.00</li>-->
        <!--                                            <li class="new__price">$10.00</li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- End Our Product Area -->
        <!--<div class="only-banner bg__white">-->
        <!--    <div class="container">-->
        <!--        <div class="only-banner-img">-->
        <!--            <img src="<?//= base_url('static/frontend/images/new-product/ad-banner2.jpeg'); ?>">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Start Our Product Area -->
        <!--<section class="htc__product__area ptb--100 bg__white">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-3">-->
        <!--                <div class="product-categories-all">-->
        <!--                    <div class="product-categories-title">-->
        <!--                        <h3>kids & MOTHER</h3>-->
        <!--                    </div>-->
        <!--                    <div class="product-categories-menu">-->
        <!--                        <ul>-->
        <!--                            <li><a href="#">awesome Rings</a></li>-->
        <!--                            <li><a href="#">Hot Earrings</a></li>-->
        <!--                            <li><a href="#">Jewelry Sets</a></li>-->
        <!--                            <li><a href="#">Beads Jewelry</a></li>-->
        <!--                            <li><a href="#">Men's Watches</a></li>-->
        <!--                            <li><a href="#">Women’s Watches</a></li>-->
        <!--                            <li><a href="#">Popular Bracelets</a></li>-->
        <!--                            <li><a href="#"> Pendant Necklaces</a></li>-->
        <!--                            <li><a href="#">Children's Watches</a></li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-9">-->
        <!--                <div class="product-style-tab">-->
        <!--                    <div class="product-tab-list">-->
                                <!-- Nav tabs -->
        <!--                        <ul class="tab-style nav product-tab-list-btn" role="tablist">-->
        <!--                            <li>-->
        <!--                                <a class="active" href="#home9" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>latest </h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home10" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>best sale </h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home11" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>top rated</h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#home12" data-bs-toggle="tab">-->
        <!--                                    <div class="tab-menu-text">-->
        <!--                                        <h4>on sale</h4>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                        <div class="all-product-btn">-->
        <!--                            <a href="shop-sidebar.html">all</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="tab-content another-product-style">-->
        <!--                        <div class="tab-pane active" id="home9">-->
        <!--                            <div class="product-slider-active2">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/3.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/4.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/5.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home10">-->
        <!--                            <div class="product-slider-active2">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/4.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/5.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/6.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home11">-->
        <!--                            <div class="product-slider-active2">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/2.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/1.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/5.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane" id="home12">-->
        <!--                            <div class="product-slider-active2">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/9.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/8.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-4 single__pro col-xl-4 cat--1 col-md-4 col-sm-6 col-xs-12">-->
        <!--                                        <div class="product">-->
        <!--                                            <div class="product__inner">-->
        <!--                                                <div class="pro__thumb">-->
        <!--                                                    <a href="#">-->
        <!--                                                        <img src="images/product/7.png" alt="product images">-->
        <!--                                                    </a>-->
        <!--                                                </div>-->
        <!--                                                <div class="product__hover__info">-->
        <!--                                                    <ul class="product__action">-->
        <!--                                                        <li><a data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>-->
        <!--                                                        <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>-->
        <!--                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>-->
        <!--                                                    </ul>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                            <div class="product__details">-->
        <!--                                                <h2><a href="product-details.html">Simple Black Clock</a></h2>-->
        <!--                                                <ul class="product__price">-->
        <!--                                                    <li class="old__price">$16.00</li>-->
        <!--                                                    <li class="new__price">$10.00</li>-->
        <!--                                                </ul>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- End Our Product Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">COMING SOON</h2>
                        </div>
                    </div>
                </div>
                <div class="blog__wrap clearfix mt--60 xmt-30">
                  <div class="row justify-content-center"> <!-- CENTERED ROW -->
                    
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-xl-4"> <!-- CARD 1 -->
                      <div class="blog foo">
                        <div class="blog__inner">
                          <div class="blog__thumb">
                            <a href="<?= base_url('stock-exchange'); ?>">
                              <img src="<?= base_url('static/frontend/images/feature-img/Coming Soon_Component Store.png'); ?>">
                            </a>
                          </div>
                          <!--<div class="blog__hover__info">-->
                          <!--  <div class="blog__hover__action">-->
                          <!--     <a href="<?//= base_url('stock-exchange'); ?>">  -->
                          <!--       <p class="blog__des">ILA Gurukul</p>-->
                          <!--    </a>-->
                              <!--<div class="blog__btn">-->
                              <!--  <a class="read__more__btn" href="#">read more</a>-->
                              <!--</div>-->
                          <!--  </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-xl-4"> <!-- CARD 1 -->
                      <div class="blog foo">
                        <div class="blog__inner">
                          <div class="blog__thumb">
                            <a href="<?= base_url('home/online_store'); ?>">
                              <img src="<?= base_url('static/frontend/images/feature-img/Coming Soon_ILA Gurukul.webp'); ?>">
                            </a>
                          </div>
                          <!--<div class="blog__hover__info">-->
                          <!--  <div class="blog__hover__action">-->
                          <!--       <a href="<?//= base_url('home/online_store'); ?>">-->
                          <!--    <p class="blog__des">Online Store</p>-->
                          <!--    </a>-->
                              <!--<div class="blog__btn">-->
                              <!--  <a class="read__more__btn" href="<?//= base_url('home/online_store'); ?>">read more</a>-->
                              <!--</div>-->
                          <!--  </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                    <!-- End Single Blog -->
                
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-xl-4"> <!-- CARD 2 -->
                      <div class="blog foo mrg-top-md">
                        <div class="blog__inner">
                          <div class="blog__thumb">
                            <a href="<?= base_url('home/lighting_stock_exchange'); ?>">
                              <img src="<?= base_url('static/frontend/images/feature-img/Coming Soon_Lighting Stock Exchange.webp'); ?>">
                            </a>
                          </div>
                          <!--<div class="blog__hover__info">-->
                          <!--  <div class="blog__hover__action">-->
                          <!--<a href="<?//= base_url('home/lighting_stock_exchange'); ?>">-->
                              <!--<p class="blog__des">Lighting Stock Exchange</p></a>-->
                              <!--<div class="blog__btn">-->
                              <!--  <a class="read__more__btn" href="<?//= base_url('home/lighting_stock_exchange'); ?>">read more</a>-->
                              <!--</div>-->
                          <!--  </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                    <!-- End Single Blog -->
                
                  </div>
                </div>
            </div>
        </section>
        
     
     
            <script>
  function showOnlineStore() {
    document.getElementById("onlineStoreSection").style.display = "block";

    // Optional: Scroll to the section
    document.getElementById("onlineStoreSection").scrollIntoView({
      behavior: "smooth"
    });
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

