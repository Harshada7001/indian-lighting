<style>
   .owl-carousel .owl-wrapper, .owl-carousel .owl-item img {
    width: 76%;
    height: auto;
} 
    
</style>
<ul class="sidebutton">
     
<li>
    <a href="<?= base_url('home/boqdetail'); ?>">
        BOQ <br>
        <span class="d-cart-icon-count" style="    background-color: black; color: white; rotate: 90deg;border-radius: 50%;  width: 17px; 
        height: 17px; display: flex; justify-content: center; align-items: center;font-size:11px; margin:5px;">
            <?= $boqCount ?>
        </span>
    </a>
</li>
  <li><a href="#"> Bulk Order </a></li>
    <li><a href="#">Group Order </a></li>
    <li><a href="<?=base_url();?>home/contact">Get in touch</a></li>
    <li style="background-color: #16a519; font-size:5px;"><a style="color:#fff;" href="https://api.whatsapp.com/send?phone=16172337781" target="_blank"><span><i style="font-size: 19px;background-color: #16a519;color:#fff; margin:4px;" class="fa-brands fa-whatsapp fa-beat"></i></span>Connect</a></li>
</ul>
<div class="container project-view" style="padding: 126px 24px 176px 0;
    background: black;
}">
    
	<div class="row">
        <div class="col-md-8 project-images">
            <img style="width:70%;height:70%;" src="<?= base_url('static/frontend/'); ?>images/2s1.jpg" alt="" class="img-responsive" />
            <!--<img src="images/portfolio/view/p1_b.jpg" alt="" class="img-responsive" />-->
            <!--<img src="images/portfolio/view/p1_c.jpg" alt="" class="img-responsive" />-->
        </div>
        <div class="col-md-4">
            <div class="project-info">
                <h2>Avant 1</h2>

                <div class="details">
                    <div class="info-text">
                        <span class="title">Category name</span>
                        <span class="val">Avant</span>
                    </div>

                    <div class="info-text">
                        <span class="title">Color</span>
                        <span class="val">Brushed nickel</span>
                    </div>

                    <div class="info-text">
                        <span class="title">Dimension</span>
                        <span class="val">660mm/26</span>
                    </div>

                    <div class="info-text">
                        <span class="title">Blades</span>
                        <span class="val">3X ABS</span>
                    </div>

                    <div class="info-text">
                        <span class="title">Airflow CMF</span>
                        <span class="val">3000</span>
                    </div>
                </div>

                <p>Minimalist collection Blissfull and clean design Global aesthetics Sharp collection</p>

                <p>
                    <h4></h4>
                    <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
                </p>
                </p>
                <a style="padding:12px; background:#fff;color:#000;" href="<?=base_url();?>home/product">Buy Now</a>
                <a style="padding:12px; background:#fff;color:#000;" href="<?=base_url();?>home/productdetailshow">View more details</a>
                        
                        
            </div>
        </div>
    </div>
</div>
