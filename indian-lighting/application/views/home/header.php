<!DOCTYPE html><html class="no-js" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Indian Lighting Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('static/frontend/images/logo/ILA-Logo-2.png'); ?>">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/bootstrap.min.css'); ?>">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/owl.theme.default.min.css'); ?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/core.css'); ?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/shortcode/shortcodes.css'); ?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/style.css'); ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/responsive.css'); ?>">
    <!-- User style -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/css/custom.css'); ?>">


    <!-- Modernizr JS -->
    <script src="<?= base_url('static/frontend/js/vendor/modernizr-3.11.7.min.js'); ?>">
        
    </script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white clearfix">
           <div class="header-wrapper">
  <div class="header-left">
    <img src="<?= base_url('static/frontend/images/logo/ILA Logo_(1).png'); ?>">
  </div>

  <div class="header-title">
    <h1>Indian Lighting Academy</h1>
  </div>

  <div class="header-buttons">
         <a href="<?= base_url('home/adminlogin'); ?>" class="btn-login">Admin Login</a>
    <a href="<?= base_url('home/login'); ?>" class="btn-login">Member Login</a>
    <a href="<?= base_url('home/register'); ?>" class="btn-register">Register</a>
  </div>
</div>

            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
  <div class="row align-items-center">
    
    <!-- Logo Column -->
    <div class="col-md-3 col-lg-2 col-6">
      <div class="logo">
        <!--<a href="index.html">-->
        <!--  <img src="<?//= base_url('static/frontend/images/logo/ila.png'); ?>">-->
        <!--</a>-->
      </div>
    </div>
    
    <!-- Menu Column -->
    <div class="col-md-9 col-lg-10 d-none d-lg-block">
      <nav class="mainmenu__nav d-none d-lg-block">
        <ul class="main__menu d-flex justify-content-end align-items-center">
          <li class="drop"><a href="<?= base_url(); ?>">Home</a></li>
          <li class="drop"><a href="<?= base_url('home/spplier_list'); ?>">Suppliers</a></li>
          <li class="drop"><a href="<?= base_url('product_gallery'); ?>">Product Gallery</a></li>
          <li class="drop"><a href="<?= base_url('home/media_gallery'); ?>">Media Gallery</a></li>
          <li class="drop"><a href="<?= base_url('home/ila_gurukul'); ?>">ILA Gurukul</a></li>
          <li class="drop"><a href="<?= base_url('home/online_store'); ?>">Component Store</a></li>
          <li class="drop"><a href="<?= base_url('home/lighting_stock_exchange'); ?>">Lighting Stock Exchange</a></li>
          <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
        </ul>
      </nav>
    

                            <div class="mobile-menu clearfix d-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                         <li><a href="<?= base_url(); ?>">Home</a></li>
                                          <li><a href="<?= base_url('home/spplier_list'); ?>">Suppliers</a></li>
                                          <li><a href="<?= base_url('product_gallery'); ?>">Product Gallery</a></li>
                                          <li><a href="<?= base_url('home/media_gallery'); ?>">Media Gallery</a></li>
                                          <li><a href="<?= base_url('home/ila_gurukul'); ?>">ILA Gurukul</a></li>
                                          <li><a href="<?= base_url('home/online_store'); ?>">Component store</a></li>
                                          <li><a href="<?= base_url('home/lighting_stock_exchange'); ?>">Lighting Stock Exchange</a></li>
                                          <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
                                     </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <!--<div class="col-md-6 col-lg-2 col-7">  -->
                        <!--    <ul class="menu-extra">-->
                        <!--        <li class="search search__open d-none d-md-block d-lg-block"><span class="ti-search"></span></li>-->
                        <!--        <li><a href="login-register.html"><span class="ti-user"></span></a></li>-->
                        <!--        <li class="cart__menu"><span class="ti-shopping-cart"></span></li>-->
                        <!--        <li class="toggle__menu d-none d-lg-block"><span class="ti-menu"></span></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->