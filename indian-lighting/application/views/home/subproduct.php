<style>
    @media (min-width: 1200px) {
    section {
        padding-top: 0px;
        padding-bottom: 20px;
    }
}
.products .figure-block .image {
    width: 100%;
    overflow: hidden; /* Ensures cropped content stays hidden */
    position: relative; /* Useful for layering elements like overlays */
}
.products .figure-block .image img {
    width: 100%; /* Makes the image responsive to the container width */
    height: 200px; /* Sets a fixed height for uniformity */
    object-fit: cover; /* Ensures the image fills the space without distortion */
    border-radius: 5px; /* Optional: adds rounded corners */
    display: block; /* Avoids inline spacing issues */
}

</style>
<!-- subheader -->
 <section class="main-header" style="background-image:url(<?= base_url('static/frontend/'); ?>assets/images/gallery-2.jpg)">

            <header>
                <div class="container">
                    <h1 class="h2 title">Shop</h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="<?= base_url('home/index/'); ?>"><span class="icon icon-home"></span></a></li>
                        <li>Product Sub-category</li>
                    </ol>
                </div>
            </header>
        </section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="container">
    <div class="row">
        <div class="col-md-4">
            <!--<label for="categoryFilter" style="font-size:25px;">Search products</label>-->
      
    <!--        <select id="categoryFilter" class="form-control" style="  padding: 9px;-->
    <!--border-radius: 0px;-->
    <!--width: 62%;">-->

<div id="content" class="no-top no-bottom">
   
<section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
        <div class="container">
  <!-- For demo purpose -->

  <!-- End -->

<div class="container py-5">
  <!-- For demo purpose -->

  <!-- End -->

<style>
        
  .divider {
        border-bottom: 1px solid black;
        margin: 0px 0;
    } 
    .products article {
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
    background-color: #fff;
    position: relative;
    transition: all .5s;
    margin-bottom: 1px;
    overflow: hidden;
    margin: 20px;
}
.img-responsive {
    display: flex
;
    max-width: 100%;
    height: auto;
     margin: 0px; 
}
        
    </style>
    
 
  <div class="p-5 rounded shadow mb-5">
 
    <div id="myTabContent" class="tab-content">
      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
     <div class="container">
    <div class="row">    
<?php
    
    
    // print_r($product1);die;
    foreach ($productdata as $product) :
       $img_u= $product->product_img;
    //  if ($product->category_id=8){
?>
<div class="col-md-3 col-sm-6 item all">
    <div class="picframe">
        <a class="dcg-url" href="<?= base_url('subcategory/product_detail/' . $product->product_id); ?>">
            <span class="overlay" style="z-index:-1;">
            <span class="pf_text">
            <span class="project-name"><?= $product->product_name; ?></span>
            </span>
            </span>
        </a>
    </div>
    
</div>
<?php endforeach; ?>


</div></div>
  

    

        
    </div>
 
  </div>


 
</div>


  </div>
  
</section>


            <!--    <?php //foreach ($subcategories as $suategory): ?>-->
            <!--        <option value="<?//= $suategory['id'] ?>"><?//= $suategory['subcategory_name'] ?></option>-->
            <!--    <?php //endforeach; ?>-->
            <!--</select>-->
        </div>
    </div>
</div>
        <div class="row">

            <div class="col-md-12">
                <ul class="products row">

                    <?php foreach ($productdata as $product): 
                      $img_u= $product->product_img;
        
        // echo $img_u;
                    ?>
                                                     <?php //echo $product->subcategory_id;?>

                    <li class="col-xl-4 col-lg-4 col-md-4 product" data-category="<?= $product->subcategory_id ?>">

                        <div class="p-inner">
                            <div class="p-images">
                                <a href="<?= base_url('subcategory/product_detail/' . $product->product_id); ?>">
  <?php
            if($img_u==''){
            
            ?>
            <!--<img class="dcg-image"src="<//?= base_url('uploads/noimg.jpeg'); ?>" alt="" width="300" height="300">-->
            
            <?php } ?>
            
                                <article>
                                     <div class="figure-block">
                                            <div class="image">
                                    <img src="<?= base_url('uploads/' . $product->product_img); ?>"
                                        class="pi-1 img-responsive" alt="">
                                    </div>
                                </a>
                            <div class="divider"></div>
                            <div class="text">
                            <span class="description clearfix"> <a href="<?= base_url('subcategory/product_detail/' . $product->product_id); ?>">
                                <h4 style="text-align:center; background-color:#fff;">
                                    <?= $product->product_name; ?>
                                </h4></span>
                            </a> </div>
                            </div>
                            </article>
              
                            <!--  <div class="p-rating">
                                              <i class="fa fa-star checked"></i>
                                              <i class="fa fa-star checked"></i>
                                              <i class="fa fa-star checked"></i>
                                              <i class="fa fa-star checked"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <div class="price">$420</div>-->
                            <!--<a href="#" class="btn btn-line">Add to BOQ</a>-->
                            <!--<button style="display:flex;margin:auto;" type="button" class="btn btn-primary"-->
                            <!--    onclick="add_boq('<?//= $product->product_id; ?>', '<?//= $product->product_name; ?>')">-->
                            <!--    Add To BOQ-->
                            <!--</button>-->
 <!--                            <button style="display:flex;margin:auto;" type="button" class="btn btn-primary"-->
 <!--                               onclick="add_boq(<?php //if (isset($product[0]['id'])) { echo $product[0]['id'];}?>);">-->
	<!--Add To BOQ</button>-->
<!--<button style="display:flex;margin:15px auto;" type="button" autofocus class="btn btn-primary" onclick="add_cart(<?//php echo $product->product_id; ?>);">-->
<!--                                Add To BOQ-->
<!--                            </button>-->
 <!-- <button class="cart-proceed" onclick="add_cart(<?php //if (isset($product[0]['id'])) { echo $product[0]['id'];}?>);apply_coupon();" type="submit">-->
	<!--Add To Cart</button>-->
                            <!-- Modal -->
                            

            </div>
            </li>
            <?php endforeach; ?>

        </div>
    </div>



</div>
</div>


