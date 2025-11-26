


<style>
    .plans-ban{
        margin-top:6px;
    }
</style>
  <?php //print_r($intrest);die();?>
    <?php //print_r($records);die();?>

  <section>
        <div class="db">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="db-nav">
                            <!--<div class="db-nav-pro"><img src="<?//= base_url('static/frontend/'); ?>images/profiles/12.jpg" class="img-fluid" alt=""></div>-->
                            <div class="db-nav-pro">
                                <img src="<?= base_url('uploads/') . $records[0]->photo1; ?>" class="img-fluid" alt="">
                            </div>

                            <div class="db-nav-list">
                                <ul>
                                    <li><a href="<?= base_url('home/user_dashboard/'); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                                    <li><a href="<?= base_url('home/user_profile/'); ?>"><i class="fa fa-male" aria-hidden="true"></i>Profile</a></li>
                                    <!--<li><a href="<?//= base_url('home/user_interests/'); ?>" ><i class="fa fa-handshake-o" aria-hidden="true"></i>Interests</a></li>-->
                                    <li><a href="<?= base_url('home/user_intrestedinme/'); ?>" ><i class="fa fa-handshake-o" aria-hidden="true"></i>Interested in Me</a></li>

                                    <!--<li><a href="user-chat.html"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat list</a></li>-->
                                    <li><a href="<?= base_url('home/user_plan/'); ?>" class="act"><i class="fa fa-money" aria-hidden="true"></i>Plan</a></li>
                                    <li><a href="<?= base_url('home/user_setting/'); ?>"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a></li>
                                    <li><a href="<?= base_url('home/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                       <section>
        <div class="plans-ban">
            <div class="container">
                <div class="row">
                    <span class="pri">Pricing</span>
                    <h1>Let Started <br> Get your Plan Now</h1>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                    <span class="nocre">No credit card required</span>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- PRICING PLANS -->
    <section>
        <div class="plans-main">
            <div class="container">
                <div class="row">
                    <ul style="display:flex;justify-content:center;">
                        <!--<li>-->
                        <!--    <div class="pri-box">-->
                        <!--        <h2>Free</h2>-->
                        <!--        <p>Printer took a type and scrambled </p>-->
                        <!--        <a href="sign-up.html" class="cta">Get Started</a>-->
                        <!--        <span class="pri-cou"><b>$0</b>/mo</span>-->
                        <!--        <ol>-->
                        <!--            <li><i class="fa fa-close close" aria-hidden="true"></i> 5 Premium Profiles view /mo-->
                        <!--            </li>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i>Free user profile can view</li>-->
                        <!--            <li><i class="fa fa-close close" aria-hidden="true"></i>View contact details</li>-->
                        <!--            <li><i class="fa fa-close close" aria-hidden="true"></i>Send interest</li>-->
                        <!--            <li><i class="fa fa-close close" aria-hidden="true"></i>Start Chat</li>-->
                        <!--        </ol>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <li>
                            <div class="pri-box pri-box-pop">
                                <span class="pop-pln">Plan </span>
                                <h2>1 Year Plan </h2>
                                <!--<p>Printer took a type and scrambled </p>-->
                                <a href="sign-up.html" class="cta">Get Started</a>
                                <span class="pri-cou"><b><i class="fa-solid fa-indian-rupee-sign"></i>-1000 </b>/yr</span>
                                <ol>
                                    <!--<li><i class="fa-solid fa-check"></i>20 Premium Profiles view /mo</li>-->
                                    <!--<li><i class="fa-solid fa-circle-check"></i>Free user profile can view</li>-->
                                    <li><i class="fa-solid fa-circle-check"></i>View contact details</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Send interest</li>
                                </ol>
                            </div>
                        </li>
                        <!--<li>-->
                        <!--    <div class="pri-box">-->
                        <!--        <h2>Platinum</h2>-->
                        <!--        <p>Printer took a type and scrambled </p>-->
                        <!--        <a href="sign-up.html" class="cta">Get Started</a>-->
                        <!--        <span class="pri-cou"><b>$549</b>/mo</span>-->
                        <!--        <ol>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i> 50 Premium Profiles view /mo</li>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i>Free user profile can view</li>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i>View contact details</li>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i>Send interest</li>-->
                        <!--            <li><i class="fa fa-check" aria-hidden="true"></i>Start Chat</li>-->
                        <!--        </ol>-->
                        <!--    </div>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


   




