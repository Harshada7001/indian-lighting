<style>
    .divider {
        border-bottom: 1px solid black;
        margin: 0px 0;
    }
    .products .figure-block .image img {
    width: 100%; /* Ensures the image fills the container width */
    height: 200px; /* Sets a fixed height */
    object-fit: cover; /* Maintains aspect ratio and ensures the image fills the area */
    border-radius: 5px; /* Optional: adds rounded corners */
    display: block; /* Ensures consistent rendering */
}

</style>
 <section class="main-header" style="background-image:url(<?= base_url('static/frontend/'); ?>assets/images/gallery-2.jpg)">

            <header>
                <div class="container">
                    <h1 class="h2 title">Shop</h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="<?= base_url('home/index/'); ?>"><span class="icon icon-home"></span></a></li>
                        <li>Products</li>
                     
                    </ol>
                </div>
            </header>
        </section>

<!--<ul class="sidebutton">-->
     
<!--<li>-->
<!--    <a href="<?//= base_url('home/boqdetail'); ?>">-->
<!--        BOQ <br>-->
<!--        <span class="d-cart-icon-count" style="    background-color: black; color: white; rotate: 90deg;border-radius: 50%;  width: 17px; -->
<!--        height: 17px; display: flex; justify-content: center; align-items: center;font-size:11px; margin:5px;">-->
<!--            <?//= $boqCount ?>-->
<!--        </span>-->
<!--    </a>-->
<!--</li>-->
<!--  <li><a href="#"> Bulk Order </a></li>-->
<!--    <li><a href="#">Group Order </a></li>-->
<!--    <li><a href="<?//=base_url();?>home/contact">Get in touch</a></li>-->
<!--    <li style="background-color: #16a519; font-size:5px;"><a style="color:#fff;" href="https://api.whatsapp.com/send?phone=16172337781" target="_blank"><span><i style="font-size: 19px;background-color: #16a519;color:#fff; margin:4px;" class="fa-brands fa-whatsapp fa-beat"></i></span>Connect</a></li>-->
<!--</ul>-->
<section id="section-products" class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
               
                <h2 class="style-6">Our Products</h2>
            </div>
        </div>
        
        <?php if (!empty($productdata)) { ?>
            <div class="row">
                <?php foreach ($productdata as $product) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article>
                            <div class="figure-block">
                                <div class="image">
                                    <a href="<?= base_url('subcategory/product_detail/' . $product->product_id); ?>">
                                        <img src="<?= base_url('uploads/' . $product->product_img); ?>" alt="Product Image">
                                    </a>
                                </div>

                                <!-- Thin black line -->
                                <div class="divider"></div>

                                <div class="text">
                                    <h2 class="title h4 uppercase"><a href="<?= base_url('subcategory/product_detail/' . $product->product_id); ?>"><?= $product->product_name; ?></a></h2>
                                    <span class="description clearfix"><?= $product->product_description ?></span>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>No products available at the moment.</p>
        <?php } ?>
    </div>
</section>

<!-- Add the CSS for the divider line -->
  
            
            
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
     <script>
        document.getElementById('contact_form').addEventListener('submit', function (e) {
            var isValid = true;

            // Name validation
            var name = document.getElementById('name');
            var nameError = document.getElementById('name_error');
            if (name.value.trim() === '') {
                nameError.classList.add('visible');
                isValid = false;
            } else {
                nameError.classList.remove('visible');
            }

            // Email validation
            var email = document.getElementById('email');
            var emailError = document.getElementById('email_error');
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email.value)) {
                emailError.classList.add('visible');
                isValid = false;
            } else {
                emailError.classList.remove('visible');
            }

            // Phone validation
            var phone = document.getElementById('phone');
            var phoneError = document.getElementById('phone_error');
            var phonePattern = /^\+?1?[-.\s]?(\d{3})[-.\s]?(\d{3})[-.\s]?(\d{4})$/;
            if (!phonePattern.test(phone.value)) {
                phoneError.classList.add('visible');
                isValid = false;
            } else {
                phoneError.classList.remove('visible');
            }

            // Message validation
            var message = document.getElementById('message');
            var messageError = document.getElementById('message_error');
            if (message.value.trim() === '') {
                messageError.classList.add('visible');
                isValid = false;
            } else {
                messageError.classList.remove('visible');
            }

            // Prevent form submission if any field is invalid
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>

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
    