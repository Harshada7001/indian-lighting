 <!-- Start Footer Area -->
<footer class="htc__foooter__area gray-bg">
  <div class="container">
    <div class="footer__container clearfix">
      <div class="row justify-content-center">
        
        <!-- Start Footer Widget: Logo + Contact -->
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <div class="ft__widget">
            <div class="ft__logo pb--30">
              <img src="<?= base_url('static/frontend/images/logo/ILA Logo_(1).png'); ?>">
            </div>
            <div class="footer-address">
              <ul>
                <li>
                  <div class="address-icon">
                    <i class="zmdi zmdi-email"></i>
                  </div>
                  <div class="address-text">
                    <a href="#">info@indianlightingacademy.com</a>
                  </div>
                </li>
                <li>
                  <div class="address-icon">
                    <i class="zmdi zmdi-globe"></i>
                  </div>
                  <div class="address-text">
                    <p>www.indianlightingacademy.com</p>
                  </div>
                </li>
                <li>
                  <div class="address-icon">
                    <i class="zmdi zmdi-comment"></i>
                  </div>
                  <div class="address-text">
                    <a href="<?= base_url('contact'); ?>">Contact Us</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Start Footer Widget: Links -->
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <div class="ft__widget">
            <h2 class="ft__title">Information</h2>
            <ul class="footer-categories">
             <li><a href="<?= base_url(); ?>">Home</a></li>
                                          <li><a href="<?= base_url('home/spplier_list'); ?>">Suppliers</a></li>
                                          <li><a href="<?= base_url('product_gallery'); ?>">Product Gallery</a></li>
                                          <li><a href="<?= base_url('home/media_gallery'); ?>">Media Gallery</a></li>
                                          <li><a href="<?= base_url('home/ila_gurukul'); ?>">ILA Gurukul</a></li>
                                          <li><a href="<?= base_url('home/online_store'); ?>">Component store</a></li>
                                          <li><a href="<?= base_url('home/lighting_stock_exchange'); ?>">Lighting Stock Exchange</a></li>
                                          <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!-- Start Copyright -->
    <div class="htc__copyright__area">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="copyright__inner">
            <p>@ 2025 <a href="#">Indian Lighting Academy</a> All Rights Reserved.</p>
            <div class="footer__menu">
             <p>Designed and Developed By<a href="https://spandigitsocial.com/">  SpanDigit Social</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Copyright -->

  </div>
</footer>
        <!-- End Footer Area -->

    <!-- Body main wrapper end -->
   
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?= base_url('static/frontend/js/vendor/jquery-v1.12.4.min.js'); ?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('static/frontend/js/popper.js'); ?>"></script>
    <script src="<?= base_url('static/frontend/js/bootstrap.min.js'); ?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('static/frontend/js/plugins.js'); ?>"></script>
    <script src="<?= base_url('static/frontend/js/slick.min.js'); ?>"></script>
    <script src="<?= base_url('static/frontend/js/owl.carousel.min.js'); ?>"></script>
    <!-- Waypoints.min.js. -->
    <script src="<?= base_url('static/frontend/js/waypoints.min.js'); ?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('static/frontend/js/main.js'); ?>"></script>



</body>
</html>