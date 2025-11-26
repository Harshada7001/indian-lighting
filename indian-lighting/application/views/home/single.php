 <style>
     .row.d-flex {
    display: flex;
    flex-wrap: nowrap; /* Prevent wrapping if space allows */
    gap: 20px; /* Space between columns */
}

.col-sm-2, .col-md-8 {
    flex: 1; /* Allow columns to grow/shrink as needed */
}

.product-flex-gallery {
    display: flex;
    justify-content: center; /* Center the product image */
}

.info-box {
    margin-bottom: 15px;
}

.popup-table {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.owl-carousel .owl-wrapper, .owl-carousel .owl-item img {
    width: 76%;
    height: auto;
}
/* General Styling */
.product-section {
    padding: 40px 0;
}

.product-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
}

.product-price {
    font-size: 27px;
    font-weight: bold;
    color: #b0b0b0;
}

.discount-price {
    font-size: 18px;
    color: #777;
    text-decoration: line-through;
    margin-left: 10px;
}

.discount-badge {
    font-size: 14px;
    color: green;
    font-weight: bold;
}

/* Product Image Carousel */
.owl-carousel {
    width: 100%;
}

.owl-carousel .item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.owl-nav button {
    font-size: 20px !important;
    color: #333 !important;
}

/* Product Details Layout */
.product-flex-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.product-image {
    flex: 1;
    min-width: 300px;
}

.product-info {
    flex: 1;
}

/* Tabs Styling */
.nav-tabs {
    border-bottom: 2px solid #ddd;
}

.nav-tabs .nav-item {
    margin-bottom: -2px;
}

.nav-tabs .nav-link {
    padding: 10px 15px;
    font-weight: bold;
    color: #333;
}

.nav-tabs .nav-link.active {
    border: 2px solid #e74c3c;
    border-bottom-color: transparent;
    background: #fff;
    color: #e74c3c;
}
.owl-carousel, .item, .product-image {
    display: block !important;
    opacity: 1 !important;
    visibility: visible !important;
    height: auto !important;
}
.price-container {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 20px;
}

.selling-price {
    font-size: 20px;
    font-weight: bold;
    text-decoration: line-through;
    margin-right: 10px;
    color: #b0b0b0; /* Greyed out color */
}

.cross-price {
    font-size: 30px;
    color: #d1a11f; /* Green color for the selling price */
    margin-right: 10px;
}

.discount {
    font-size: 20px;
    color: #b0b0b0;
    margin-left: 10px;
}
.s-price{
    margin:3px;
}
.size-options{
    color:#000;
}
/* Responsive Layout */
@media screen and (max-width: 768px) {
    .product-flex-container {
        flex-direction: column;
    }
}
 .product-gallery-custom {
        max-width: 600px;
        margin: auto;
        text-align: center;
        padding: 20px;
    }

    .main-image-custom img {
        width: 100%;
        max-height: 400px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
    }

    .thumbnail-slider-custom {
    display: flex !important;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
    overflow-x: auto; /* Allow horizontal scrolling if needed */
    white-space: nowrap;
    padding: 10px 0;
}

.thumb-item-custom {
    cursor: pointer;
    border: 2px solid transparent;
    transition: 0.3s;
    flex: 0 0 auto; /* Prevents shrinking */
}

.thumb-item-custom img {
    width: 80px; /* Adjust thumbnail size */
    height: auto;
    border-radius: 5px;
}

.thumb-item-custom:hover {
    border-color: gold;
}
 </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

 
 <!--<section class="main-header" style="background-image:url(<?//= base_url('static/frontend/'); ?>assets/images/gallery-2.jpg)">-->
 <!--           <header>-->
 <!--               <div class="container text-center">-->
 <!--                   <h2 class="h2 title">Contact</h2>-->
 <!--                   <ol class="breadcrumb breadcrumb-inverted">-->
 <!--                       <li><a href="index-2.html"><span class="icon icon-home"></span></a></li>-->
 <!--                       <li><a class="active" href="contact.html">Contact</a></li>-->
 <!--                   </ol>-->
 <!--               </div>-->
 <!--           </header>-->
 <!--       </section>-->
        
        
<section class="main-header" style="background-image:url(<?= base_url('static/frontend/'); ?>assets/images/gallery-2.jpg)">
    <div class="container text-center">
        <!--<div class="row">-->
            <!--<div class="col-md-12">-->
                <h1>Product Details</h1>
                <ol class="breadcrumb breadcrumb-inverted">
                    <li><a href="<?=base_url();?>home">Home</a></li>
                    <!--<li class="sep"  style="color:#fff;">/</li>-->
                    <li style="color:#fff;"><a href="<?= base_url();?>home/products">Products</a></li>
                    <!--<li class="sep" style="color:#fff;">/</li>-->
                    <li style="color:#fff;"><?= $productdata->product_name; ?>
                    </li>
                </ol>
            <!--</div>-->
        <!--</div>-->
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<section class="product-section">
    <div class="container">
        <div class="product-flex-container">
            
            <!-- Product Image Carousel -->
           <div class="product-gallery-custom">
    <!-- Main Image Preview -->
    <div class="main-image-custom">
        <img id="mainImageCustom" src="<?= base_url('uploads/' . $productdata->product_img); ?>" alt="Product Image">
    </div>

    <!-- Thumbnail Slider -->
    <div class="thumbnail-slider-custom owl-carousel">
        <?php 
        $images = [
            $productdata->product_img, 
            $productdata->product_img2, 
            $productdata->product_img3, 
            $productdata->product_img4
        ];
        foreach ($images as $img) {
            if (!empty($img)) { 
                echo '<div class="thumb-item-custom">
                          <img src="' . base_url('uploads/' . $img) . '" onclick="changeImageCustom(this)" alt="Thumbnail">
                      </div>';
            }
        }
        ?>
    </div>
</div>

            <!-- Product Details -->
            <div class="product-info">
                <h1 class="product-title"><?= $productdata->product_name; ?></h1>
                <div class="product-price">
   <?php
    $sellingPrice =(float) $productdata->selling_price;
    $crossPrice = (float) $productdata->cross_price;
    if ($crossPrice > 0) {
        $discountPercentage = round((($sellingPrice - $crossPrice) / $sellingPrice) * 100);
    }
?>
<!--<span class="price-container">-->
<!--    <span class="cross-price">₹ <?//= number_format($crossPrice, 2); ?></span>-->
<!--    <span class="s-price"> M.R.P: </span>-->
<!--    <span class="selling-price"><?//= number_format($sellingPrice, 2); ?></span>-->
    
<!--    <?php //if (isset($discountPercentage) && $discountPercentage > 0): ?>-->
<!--        <span class="discount">-->
<!--            (<?//= $discountPercentage; ?>% OFF)-->
<!--        </span>-->
<!--    <?php// endif; ?>-->
<!--</span>-->


                </div>
                
                <hr>

                <p><strong>Manufacturer:</strong> <?= $productdata->pro_manufac; ?></p>
                <p><strong>Materials:</strong> <?= $productdata->pro_material; ?></p>
                <p><strong>Color:</strong> <?= $productdata->pro_color; ?></p>
                <!--<p><strong>Size:</strong> <?//= $productdata->pro_size; ?></p>-->
                <p><strong>Indoor/Outdoor Usage:</strong> <?= $productdata->pro_indoor; ?></p>
                <p><strong>Availability:</strong> <span style="color: green;">In Stock</span></p>
                
                <hr>

                <!--<p><strong>Choose Size:</strong></p>-->
                <!--<div class="size-options">-->
                <!--    <button class="btn btn-outline-dark">S</button>-->
                <!--    <button class="btn btn-outline-dark active">M</button>-->
                <!--    <button class="btn btn-outline-dark">XL</button>-->
                <!--    <button class="btn btn-outline-dark">XXL</button>-->
                <!--</div>-->

                <!--<hr>-->

                <!--<div class="product-buttons">-->
                <!--    <a href="#" class="btn btn-primary">Buy Now</a>-->
                <!--    <a href="#" class="btn btn-outline-secondary">Add to Cart</a>-->
                <!--</div>-->
            </div>
        </div>
    
        <!-- Product Tabs -->
        <ul class="nav nav-tabs" id="productTabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#specification">Specification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#description">Description</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="specification" class="tab-pane fade show active">
                <ul>
                    <?php foreach (explode("\n", $productdata->product_specification) as $point): ?>
                        <li><?= $point; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="description" class="tab-pane fade">
                <?= nl2br($productdata->product_description); ?>
            </div>
        </div>
    </div>
</section>


<div id="content" class="no-top no-bottom">
            <section >
                <div class="container">
                     <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Get In Touch</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Get In Touch</h3>
                              <form name="contactForm" id="contact_form" method="post" action="<?php echo base_url('home/contact'); ?>">
        <div class="row">
            <div class="col-md-6">
                <div id="name_error" class="error">Please enter your name.</div>
                <div>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div id="email_error" class="error">Please enter a valid email address.</div>
                <div>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div id="phone_error" class="error">Please enter a valid phone number.</div>
                <div>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                </div>
            </div>
            <div class="col-md-6">
                <div id="message_error" class="error">Please enter your message.</div>
                <div>
                    <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                </div>
                <p id="submit">
                    <input type="submit" id="send_message" value="Submit Form" class="btn btn-line">
                </p>
                <!--<div id='mail_success' class='success'>Your message has been sent successfully.</div>-->
                <!--<div id='mail_fail' class='error'>Sorry, error occurred this time sending your message.</div>-->
            </div>
        </div>
    </form>
    
    
    
       <style>
        .error {
            display: none;
            color: red;
        }
        .visible {
            display: block;
        }
    </style>
    

                        </div>

                        <div class="col-md-6">

                             <section style="height: 44vh;" id="de-map" class="no-top" aria-label="map-container">
                <div class="map-container map-fullwidth">
					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3787.062133430126!2d73.76588871442717!3d19.988672986565456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd5cb34f93427b%3A0x6b7f5d631d72e011!2sSatpur%2C%20Nashik%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sid!4v1643546740295!5m2!1sen!2sid" width="600" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46972.76873257187!2d-71.27264615006128!3d42.06012250249336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e373d2e34d75cd%3A0x9b53923d8f78dd3b!2s56%20Leonard%20St%20%235%2C%20Foxborough%2C%20MA%2002035%2C%20USA!5e0!3m2!1sen!2suk!4v1645901501836!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>
            </section>
                        </div>

                    </div>
                </div>
            </section>

        </div>
<script>
    $(document).ready(function() {
        $(".thumbnail-slider-custom").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 4 }
            }
        });
    });

    function changeImageCustom(element) {
        document.getElementById("mainImageCustom").src = element.src;
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   