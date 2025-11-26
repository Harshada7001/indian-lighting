<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/2.jpg'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Supplier List</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Supplier List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Our ShopSide Area -->
        <section class="htc__shop__sidebar fancy-section ptb--120" style="margin-top:-10%">
             <div class="section-bg-shapes"></div>
            <div class="container" style="margin-top:-5%">
                <div class="row">
            
            <!--                        <?php if (!empty($category)): ?>-->
            <!--    <?php foreach ($category as $cat): ?>-->
            <!--                        <li><a href="#"><?= htmlspecialchars($cat->category_name); ?></a></li>-->
            <!--                         <?php endforeach; ?>-->
            <!--<?php else: ?>-->
            <!--    <li>No category found.</li>-->
            <!--<?php endif; ?>-->
            <!--                    </ul>-->
            <!--                </div>-->
             
            <!--            </div>-->
            <!--        </div>-->
                    <div class="col-lg-9 col-xl-9 col-md-12 col-12 smt-30">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                                <div class="producy__view__container">
                                    <!-- Start Short Form -->
                                    <!--<div class="product__list__option">-->
                                    <!--    <div class="order-single-btn">-->
                                    <!--        <select class="select-color selectpicker">-->
                                    <!--          <option>Sort by newness</option>-->
                                    <!--          <option>Match</option>-->
                                    <!--          <option>Updated</option>-->
                                    <!--          <option>Title</option>-->
                                    <!--          <option>Category</option>-->
                                    <!--          <option>Rating</option>-->
                                    <!--        </select>-->
                                    <!--    </div>-->
                                    <!--    <div class="shp__pro__show">-->
                                    <!--        <span>Showing 1 - 4 of 25 results</span>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!-- End Short Form -->
                                    <!-- Start List And Grid View -->
                                    <ul class="view__mode nav" role="tablist">
                                        <!--<li role="presentation" class="grid-view"><a href="#grid-view" role="tab" data-bs-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>-->
                                        <!--<li role="presentation" class="list-view"><a href="#list-view" class="active"  role="tab" data-bs-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>-->
                                    </ul>
                                    <!-- End List And Grid View -->
                                </div>
                            </div>
                        </div>
                        <div class="shop__grid__view__wrap another-product-style">
          
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

                            <!-- application/views/product_list.php -->

<div class="supplier-split-section container-fluid py-5">
  <?php if (!empty($results)) : ?>
    <?php foreach ($results as $supplier) : ?>
      <div class="supplier-split-row d-flex flex-wrap align-items-start">
        
        <!-- Left Image -->
        <div class="supplier-left-img">
          <img src="<?= base_url('admin/' . $supplier->logo); ?>" alt="<?= $supplier->company_name ?>">
        </div>

        <!-- Divider -->
        <div class="vertical-divider"></div>

        <!-- Right Content -->
        <div class="supplier-right-content">
          <h2><a href="<?= base_url('supplier_details/'.$supplier->company_name); ?>"><?= $supplier->company_name ?></a></h2>
          <p class="desc"><?= $supplier->description ?></p>
         <ul class="info-list">
          <li><i class="fa-solid fa-city"></i> <strong>City:</strong> <?= $supplier->company_name ?></li>
          <li><i class="fa-solid fa-user-circle"></i> <strong>Contact:</strong> <?= $supplier->phone ?></li>
          <li><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> <?= $supplier->email ?></li>
          <li><i class="fa-solid fa-map-marker-alt"></i> <strong>Address:</strong> <?= $supplier->address ?></li>
          <li><i class="fa-solid fa-globe"></i> <strong>Website:</strong> <a href="<?= $supplier->website ?>" target="_blank"><?= $supplier->website ?></a></li>
        </ul>


        

        </div>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <p class="text-center text-muted">No suppliers available.</p>
  <?php endif; ?>
</div>

<?php //print_r($gensuppliers)?>


<div class="supplier-split-section container-fluid py-5">
  <?php if (!empty($gensuppliers)) : ?>
  <center><h2>General Suppliers</h2></center>
    <?php foreach ($gensuppliers as $supplier) : ?>
      <div class="supplier-split-row d-flex flex-wrap align-items-start">
        
        <!-- Left Image -->
        <div class="supplier-left-img">
       
        </div>

        <!-- Divider -->
        <div class="vertical-divider"></div>

        <!-- Right Content -->
        <div class="supplier-right-content">
          <h2><a href="<?= base_url('supplier_details/'.$supplier->company_name); ?>"><?= $supplier->company_name ?></a></h2>
          <p class="desc"><?= $supplier->description ?></p>
         <ul class="info-list">
          <li><i class="fa-solid fa-city"></i> <strong>City:</strong> <?= $supplier->city ?></li>
          <li><i class="fa-solid fa-user-circle"></i> <strong>Contact:</strong> <?= $supplier->phone ?></li>
 
          <li><i class="fa-solid fa-map-marker-alt"></i> <strong>Address:</strong> <?= $supplier->address ?></li>
         
        </ul>


      

        </div>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <!--<p class="text-center text-muted">No suppliers available.</p>-->
  <?php endif; ?>
</div>
     
                 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our ShopSide Area -->