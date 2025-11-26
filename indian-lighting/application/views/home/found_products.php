<!-- Start Bradcaump area -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/2.jpg'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Products</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Products List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Our ShopSide Area -->
<section class="product-grid-wrapper">
  <div class="container">
    <div class="row">
      <!-- Sidebar (Optional) -->
      <div class="col-lg-3 col-md-12 mb-4">
        <h4 class="mb-3">Product Categories</h4>
        <ul class="sidebar__list">
          <?php if (!empty($category)): ?>
            <?php foreach ($category as $cat): ?>
              <li><a href="#"><?= htmlspecialchars($cat->category_name); ?></a></li>
            <?php endforeach; ?>
          <?php else: ?>
            <li><a href="#">No categories found</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Product Cards -->
      <div class="col-lg-9 col-md-12">
        <?php if (!empty($results)) : ?>
          <?php foreach ($results as $product) : ?>
            <div class="product-card">
              <div class="product-details">
                <h4><a href="<?= base_url('product_detail/') . $product->product_id; ?>"><?= htmlspecialchars($product->product_name); ?></a></h4>
                <p><?= $product->product_description ?></p>
                <div class="product-price">₹<?= $product->price ?></div>
                <a href="<?= base_url('home/enquiry'); ?>" class="enquiry-btn">
                  Enquiry <i class="fas fa-paper-plane"></i>
                </a>
                 <a href="<?= base_url('product_detail/') . $product->product_id; ?>" class="enquiry-btn">Visit Page</a>
              </div>
              <div class="product-img">
          <a href="<?= base_url('product_detail/') . $product->product_id; ?>"> <img src="<?= base_url('admin/admin/' . $product->product_image); ?>" alt="<?= $product->product_name ?>"></a>   
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p>No products available.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>



        <!-- End Our ShopSide Area -->