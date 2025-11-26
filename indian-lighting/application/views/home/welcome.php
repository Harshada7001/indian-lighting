<style>
.aboutus{
    margin-top:4rem;
}

.featurette{
    display:flex;
    justify-content:center;
    
}



    @media screen and (max-width: 768px){
            .marketing img {
        width: 227px;
        height: 227px;
        margin: auto;
        display: flex;
    }
        .popup-content {
    background-color: #8b8b8b80;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    display: flex;
    flex-direction: column;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    justify-content: center;
    align-items: center;
}
        .cus-revi ul {
    display: flex;
    flex-direction: column;
    width: 100%;
}
.cus-revi ul li {
    float: left;
    width: 100%;
}
.fot-ban-inn .lhs:before {
  
 
    height: 36px;
   
    animation: 4000s linear 0s infinite normal both running movehor;
}
.aboutus{
    margin-top:2rem;
}
    }
    .popmenu{
        min-height:361px;
    }
.popup-content ul li{
    width:450px;
}
.popup-content ul{
        display: flex;
    justify-content: space-around;
    align-items: center;
    
    
}
.popup {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 9;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

.popup-content {
    background-color: #8b8b8b80;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    max-width: 1200px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
}

.close-btn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.teamsintro{
    display:flex;justify-content:center;
}
 @media screen and (max-width: 768px){
     .teamsintro{
    display:flex;justify-content:center;flex-direction:column;
}
     .popup-content ul{
        flex-direction:column;
    }
    .popup-content ul li{
    width:269px;
    margin-top:15px;
}
.popmenu{
        min-height:179px;
    }
}
</style>


<?php if (!$is_logged_in): ?>
    <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <ul>
            <li>
                <div class="menu-box menu-box-2 popmenu">
                    <h5>Browse Matrimony </h5>
                    <span class="explor-cta">More details</span>
                    <a href="<?= base_url('home/login'); ?>" class="fclick"></a>
                </div>
            </li>
            <li>
                <div class="menu-box menu-box-1 popmenu">
                    <h5>Browse Community <span>Make reservation</span></h5>
                    <span class="explor-cta">More details</span>
                    <a href="<?= base_url('home/login'); ?>" class="fclick"></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php else: ?>
<?php endif; ?>




    <!-- BANNER & SEARCH -->
    <section>
        <div class="str">
            <div class="hom-head">
                <div class="container">
                    <div class="row">
                        <div class="hom-ban">
                            <div class="ban-tit">
                                <span><i class="no1">Unite with Love<br>Celebrate with Tradition</span>
                                <h1>Shubh<b>Weds </b></h1>
                                <p>Apno Ko Apno Se Milaye </p>
                            </div>
                            <!--<div class="ban-search chosenini">-->
                            <!--    <form>-->
                            <!--        <ul>-->
                            <!--            <li class="sr-look">-->
                            <!--                <div class="form-group">-->
                            <!--                    <label>I'm looking for</label>-->
                            <!--                    <select class="chosen-select">-->
                            <!--                        <option value="">I'm looking for</option>-->
                            <!--                        <option value="Men">Men</option>-->
                            <!--                        <option value="Women">Women</option>-->
                            <!--                    </select>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--            <li class="sr-age">-->
                            <!--                <div class="form-group">-->
                            <!--                    <label>Your Age</label>-->
                            <!--                    <select class="chosen-select">-->
                            <!--                        <option value="">Age</option>-->
                            <!--                        <option value="">18 to 30</option>-->
                            <!--                        <option value="">31 to 40</option>-->
                            <!--                        <option value="">41 to 50</option>-->
                            <!--                        <option value="">51 to 60</option>-->
                            <!--                        <option value="">61 to 70</option>-->
                            <!--                        <option value="">71 to 80</option>-->
                            <!--                        <option value="">81 to 90</option>-->
                            <!--                        <option value="">91 to 100</option>-->
                            <!--                    </select>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--            <li class="sr-reli">-->
                            <!--                <div class="form-group">-->
                            <!--                    <label>Religion</label>-->
                            <!--                    <select class="chosen-select">-->
                            <!--                        <option>Religion</option>-->
                            <!--                        <option>Any</option>-->
                            <!--                        <option>Hindu</option>-->
                            <!--                        <option>Muslim</option>-->
                            <!--                        <option>Jain</option>-->
                            <!--                        <option>Christian</option>-->
                            <!--                    </select>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--            <li class="sr-cit">-->
                            <!--                <div class="form-group">-->
                            <!--                    <label>City</label>-->
                            <!--                    <select class="chosen-select">-->
                            <!--                        <option>Location</option>-->
                            <!--                        <option>Any location</option>-->
                            <!--                        <option>Chennai</option>-->
                            <!--                        <option>New york</option>-->
                            <!--                        <option>Perth</option>-->
                            <!--                        <option>London</option>-->
                            <!--                    </select>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--            <li class="sr-btn">-->
                            <!--                <input type="submit" value="Search">-->
                            <!--            </li>-->
                            <!--        </ul>-->
                            <!--    </form>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- BANNER SLIDER -->
    <section>
        <div class="hom-ban-sli">
            <div>
                <ul class="ban-sli">
                    <li>
                        <div class="image">
                            <img src="images/ban-bg.jpg" alt="" loading="lazy">
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img src="images/banner.jpg" alt="" loading="lazy">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    
    <br>
    <br>
     <!-- ABOUT START -->
    <section >
        <div class="ab-wel" style="margin-top:4rem;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 aboutus">
                        <div class="ab-wel-lhs">
                            <span class="ab-wel-3"></span>
                            <img src="<?= base_url('static/frontend/'); ?>images/1142713_8326.jpg" alt="" loading="lazy" class="ab-wel-1">
                            <img src="<?= base_url('static/frontend/'); ?>images/navratri-interior-decoration.jpg" alt="" loading="lazy" class="ab-wel-2">
                            <span class="ab-wel-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 aboutus">
                        <div class="ab-wel-rhs">
                            <div class="ab-wel-tit">
                                <h2>Welcome to <em>ShubhWeds</em></h2>
                                <p>Best wedding matrimony It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout. </p>
                                <p> <a href="<?= base_url('home/login'); ?>">Click here to</a> Start you matrimony service now.</p>
                            </div>
                            <div class="ab-wel-tit-1">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable.</p>
                            </div>
                            <div class="ab-wel-tit-2">
                                <ul>
                                    <li>
                                        <div>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <h4>Enquiry <em>+91 70143 78070 </em></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <h4>Get Support <em>shubhweds11@gmail.com</em></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
 
 
 
    <!-- END -->

    <!-- BANNER -->
    <section>
        <div class="str">
            <div class="ban-inn ban-home">
                <div class="container">
                    <div class="row">
                        <div class="hom-ban">
                            <div class="ban-tit">
                                <span><i class="no1">#1</i> Wedding Website</span>
                                <h2>Why choose us</h2>
                                <p>Most Trusted and premium Matrimony Service in the World.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="ab-sec2">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.1">
                                <img src="<?= base_url('static/frontend/'); ?>images/icon/prize.png" alt="" loading="lazy">
                                <h4>Genuine profiles</h4>
                                <p>Contact genuine profiles with 100% verified mobile</p>
                            </div>
                        </li>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.3">
                                <img src="<?= base_url('static/frontend/'); ?>images/icon/trust.png" alt="" loading="lazy">
                                <h4>Targeted Matching</h4>
                                <p>Offering partner suggestions based on detailed user profiles and compatibility analysis.</p>
                            </div>
                        </li>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.6">
                                <img src="<?= base_url('static/frontend/'); ?>images/icon/rings.png" alt="" loading="lazy">
                                <h4>Personalized Matching</h4>
                                <p> Offering tailored match suggestions based on user preferences and compatibility.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->



    <!-- COUNTS START -->
    <!--<section>-->
    <!--    <div class="ab-cont">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <ul>-->
    <!--                    <li>-->
    <!--                        <div class="ab-cont-po">-->
    <!--                            <i class="fa fa-heart-o" aria-hidden="true"></i>-->
    <!--                            <div>-->
    <!--                                <h4>2K</h4>-->
    <!--                                <span>Couples pared</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li>-->
    <!--                        <div class="ab-cont-po">-->
    <!--                            <i class="fa fa-users" aria-hidden="true"></i>-->
    <!--                            <div>-->
    <!--                                <h4>4000+</h4>-->
    <!--                                <span>Registerents</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li>-->
    <!--                        <div class="ab-cont-po">-->
    <!--                            <i class="fa fa-male" aria-hidden="true"></i>-->
    <!--                            <div>-->
    <!--                                <h4>1600+</h4>-->
    <!--                                <span>Mens</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li>-->
    <!--                        <div class="ab-cont-po">-->
    <!--                            <i class="fa fa-female" aria-hidden="true"></i>-->
    <!--                            <div>-->
    <!--                                <h4>2000+</h4>-->
    <!--                                <span>Womens</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- END -->

    <!-- MOMENTS START -->
    <!--<section>-->
    <!--    <div class="wedd-tline">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="home-tit">-->
    <!--                    <p>Moments</p>-->
    <!--                    <h2><span>How it works</span></h2>-->
    <!--                    <span class="leaf1"></span>-->
    <!--                    <span class="tit-ani-"></span>-->
    <!--                </div>-->
    <!--                <div class="inn">-->
    <!--                    <ul>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn">-->
    <!--                                <div class="tline-im animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="<?= base_url('static/frontend/'); ?>images/icon/rings.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                                <div class="tline-con animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Register</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn tline-inn-reve">-->
    <!--                                <div class="tline-con animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Find your Match</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                                <div class="tline-im animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="<?= base_url('static/frontend/'); ?>images/icon/wedding-2.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn">-->
    <!--                                <div class="tline-im animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="<?= base_url('static/frontend/'); ?>images/icon/love-birds.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                                <div class="tline-con animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Send Interest</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn tline-inn-reve">-->
    <!--                                <div class="tline-con animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Get Profile Information</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                                <div class="tline-im animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="<?= base_url('static/frontend/'); ?>images/icon/network.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn">-->
    <!--                                <div class="tline-im animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="images/icon/chat.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                                <div class="tline-con animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Start Meetups</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="tline-inn tline-inn-reve">-->
    <!--                                <div class="tline-con animate animate__animated animate__slower"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <h5>Getting Marriage</h5>-->
    <!--                                    <span>Timing: 7:00 PM</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
    <!--                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--                                </div>-->
    <!--                                <div class="tline-im animate animate__animated animate__slow"-->
    <!--                                    data-ani="animate__fadeInUp">-->
    <!--                                    <img src="<?= base_url('static/frontend/'); ?>images/icon/wedding-couple.png" alt="" loading="lazy">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- END -->

    <!-- RECENT COUPLES -->
    <!--<section>-->
    <!--    <div class="hom-couples-all">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="home-tit">-->
    <!--                    <p>trusted brand</p>-->
    <!--                    <h2><span>Recent Couples</span></h2>-->
    <!--                    <span class="leaf1"></span>-->
    <!--                    <span class="tit-ani-"></span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="hom-coup-test">-->
    <!--            <ul class="couple-sli">-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/6.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/7.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/8.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/9.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/10.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/3.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/4.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="hom-coup-box">-->
    <!--                        <span class="leaf"></span>-->
    <!--                        <img src="<?= base_url('static/frontend/'); ?>images/couples/5.jpg" alt="" loading="lazy">-->
    <!--                        <div class="bx">-->
    <!--                            <h4>Dany & July <span>New York</span></h4>-->
    <!--                            <a href="wedding.html" class="sml-cta cta-dark">View more</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- END -->

    <!-- TEAM START -->
    <section>
        <div class="ab-team">
            <div class="container">
                <div class="row">
                    <div class="home-tit mt-5 ">
                        <p>OUR PROFESSIONALS</p>
                        <h2><span>Meet Our Team</span></h2>
                        <span class="leaf1"></span>
                    </div>
                    <ul class="teamsintro" >
                        <li>
                            <div>
                                <img src="<?= base_url('static/frontend/'); ?>images/profiles/team06n.jpg" alt="" loading="lazy">
                                <h4>Shruti Rohit Bhala</h4>
                                <p>Marketing Manager</p>
                                <!--<ul class="social-light">-->
                                <!--    <li><a href="#!"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>-->
                                <!--</ul>-->
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="<?= base_url('static/frontend/'); ?>images/profiles/rs2.jpeg" alt="" loading="lazy">
                                <h4>Rajshree Bhala</h4>
                                <p>Founder of bhala creation</p>
                                <!--<ul class="social-light">-->
                                <!--    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                                <!--</ul>-->
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <div class="home-tit mt-5 ">
                        <p>MEET OUR</p>
                        <h2><span>Expertise</span></h2>
                        <span class="leaf1"></span>
     </div>
<div class="container marketing">

    

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Shri Kedarmal ji Bhala </h2>
        <h2 style="font-size:20px;" class="text-muted">Jaipur </h2>
        
        <p class="lead">President of Jaipur Maheshwari Samaj Involved in various social activity since 1987, having various post on Maheshwar samaj different departments .</p>
      </div>
      <div class="col-md-3">
         <img width="250" height="250" src="<?= base_url('static/frontend/'); ?>images/profiles/team01n.jpg" alt="" loading="lazy">
      
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <h2 class="featurette-heading">Sunil sarda</h2>
        <h2 style="font-size:20px;" class="text-muted">Chennai </h2>
        
        <p class="lead">Served as a president in Preeti Parivar also served as a treasurer . Was Secretary in Shree Maheshwari Club,at present vise president in Shree Maheshwari Club</p>
      </div>
      <div class="col-md-3 order-md-1">
      <img width="250" height="250" src="<?= base_url('static/frontend/'); ?>images/profiles/team-03n.jpg" alt="" loading="lazy">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Anju B Singhal </h2>
        <!--<h2 style="font-size:20px;" class="text-muted">Jaipur </h2>-->
        
        <p class="lead"><b>Education:</b> Bachelor of Arts <br>

<b>Firm name:</b> Radhey Transport Company, Rajvansh Translogistics Pvt. Ltd.<br>

<b>MACCIA Membership:</b> 2012<br>

GC member, MACCIA (from last 10 years)<br>

Chairman, Nashik Branch, MACCIA<br>

Managing committee Member & Co-Chairman (RTO and Traffic Committee): All India Motor Transport Congress Delhi<br>

<b>Founder President:</b> Nashik Transport Association<br>

<b>Member:</b> Indian Bank Association</p>
      </div>
      <div class="col-md-3">
       <img width="250" height="250" src="<?= base_url('static/frontend/'); ?>images/profiles/team05n.jpg" alt="" loading="lazy">

      </div>
    </div>

    <hr class="featurette-divider">
     <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <h2 class="featurette-heading">Jagadish Mahantesh Pattadkal </h2>
        <!--<h2 style="font-size:20px;" class="text-muted">Jaipur </h2>-->
        
        <p class="lead"><b>Age:</b>  65 Years<br>

Education M.Com. DBM, LL.B., CAIIB.<br>

<b>Professional background</b>: Retired Banker and Financial Advisor<br>

<!--<b>Resi Address</b>: Plot No.4A, S. No. 761/4D, Tidake Nagar, Unt Wadi, NASHIK 422008</p>-->
      </div>
      <div class="col-md-3 order-md-1">
      <img width="250" height="250" src="<?= base_url('static/frontend/'); ?>images/profiles/jagdish.jpg" alt="" loading="lazy">

      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     

    <!-- END -->


    <!-- GALLERY START -->
    <!--<section>-->
    <!--    <div class="wedd-gall home-wedd-gall">-->
    <!--        <div class="">-->
    <!--            <div class="gall-inn">-->
    <!--                <div class="home-tit">-->
    <!--                    <p>collections</p>-->
    <!--                    <h2><span>Photo gallery</span></h2>-->
    <!--                    <span class="leaf1"></span>-->
    <!--                    <span class="tit-ani-"></span>-->
    <!--                </div>-->
    <!--                <div class="col-sm-6 col-md-2">-->
    <!--                    <div class="gal-im animate animate__animated animate__slow" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/1.jpg" class="gal-siz-1" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/9.jpg" class="gal-siz-2" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-sm-6 col-md-3">-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/3.jpg" class="gal-siz-2" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/4.jpg" class="gal-siz-1" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-sm-6 col-md-2">-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/5.jpg" class="gal-siz-1" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/6.jpg" class="gal-siz-2" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-sm-6 col-md-3">-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/7.jpg" class="gal-siz-2" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/gallery/8.jpg" class="gal-siz-1" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-2">-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/couples/9.jpg" class="gal-siz-2" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">-->
    <!--                        <img src="<?//= base_url('static/frontend/'); ?>images/couples/11.jpg" class="gal-siz-1" alt="" loading="lazy">-->
    <!--                        <div class="txt">-->
    <!--                            <span>Wedding</span>-->
    <!--                            <h4>Bride & Groom</h4>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- END -->

    <!-- BLOG POSTS START -->
    <!--<section>-->
    <!--    <div class="hom-blog">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="home-tit">-->
    <!--                    <p>Blog posts</p>-->
    <!--                    <h2><span>Blog & Articles</span></h2>-->
    <!--                    <span class="leaf1"></span>-->
    <!--                    <span class="tit-ani-"></span>-->
    <!--                </div>-->
    <!--                <div class="blog">-->
    <!--                    <ul>-->
    <!--                        <li>-->
    <!--                            <div class="blog-box">-->
    <!--                                <img src="<?//= base_url('static/frontend/'); ?>images/blog/1.jpg" alt="" loading="lazy">-->
    <!--                                <span>Wedding - Johnny</span>-->
    <!--                                <h2>Wedding arrangements</h2>-->
    <!--                                <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                    content.</p>-->
    <!--                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="blog-box">-->
    <!--                                <img src="<?//= base_url('static/frontend/'); ?>images/blog/2.jpg" alt="" loading="lazy">-->
    <!--                                <span>Wedding - Johnny</span>-->
    <!--                                <h2>Wedding arrangements</h2>-->
    <!--                                <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                    content.</p>-->
    <!--                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <div class="blog-box">-->
    <!--                                <img src="<?//= base_url('static/frontend/'); ?>images/blog/3.jpg" alt="" loading="lazy">-->
    <!--                                <span>Wedding - Johnny</span>-->
    <!--                                <h2>Invitation cards</h2>-->
    <!--                                <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                    content.</p>-->
    <!--                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- END -->

    <!-- FIND YOUR MATCH BANNER -->
    <section>
        <div class="str count">
            <div class="container">
                <div class="row">
                    <div class="fot-ban-inn">
                        <div class="lhs">
                           <h2>Find your perfect Match now</h2>
                            <p>Find your perfect match now: Join our matrimony site to connect with compatible singles, build meaningful relationships, and embark on your journey to lifelong love.</p>
                            <a href="<?= base_url('home/index'); ?>" class="cta-3">Register Now</a>
                            <a href="<?= base_url('home/contactpage'); ?>" class="cta-4">Help & Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <script>
window.onload = function() {
    var popup = document.getElementById("popup");
    var closeBtn = document.getElementById("closeBtn");
    var lastScrollPosition = 0;

    // Show the popup when the window loads
    popup.style.display = "block";

    // Close the popup when the close button is clicked
    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    // Close the popup when the user clicks outside of it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }

    window.onscroll = function() {
        var scrollPosition = window.scrollY || window.pageYOffset;
        var windowHeight = window.innerHeight;
        var documentHeight = document.body.scrollHeight;

        // Show the popup if scrolling down past 90% of the document height
        if (scrollPosition > lastScrollPosition && scrollPosition + windowHeight >= documentHeight * 0.9) {
            popup.style.display = "block";
        }

        // Update the last scroll position
        lastScrollPosition = scrollPosition;
    }

    // Handle "More details" button click
    var moreDetailsButtons = document.querySelectorAll(".explor-cta");

    moreDetailsButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            
            // Close the popup
            popup.style.display = "none";
            
            // Redirect to the login page with a slight delay
            var redirectUrl = button.nextElementSibling.getAttribute("href");
            setTimeout(function() {
                window.location.href = redirectUrl;
            }, 100); // 100 milliseconds delay
        });
    });
}

    </script>
