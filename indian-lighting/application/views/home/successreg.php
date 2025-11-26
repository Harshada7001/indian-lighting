
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
<!--    <li><a href="<?=base_url();?>home/contact">Get in touch</a></li>-->
<!--    <li style="background-color: #16a519; font-size:5px;"><a style="color:#fff;" href="https://api.whatsapp.com/send?phone=16172337781" target="_blank"><span><i style="font-size: 19px;background-color: #16a519;color:#fff; margin:4px;" class="fa-brands fa-whatsapp fa-beat"></i></span>Connect</a></li>-->
<!--</ul>-->
<div class="textcenter" style="">
    <h1>
        Thank You! for Registration. 
    </h1>
    <br>
<p>Please check your email for confirmation. Once the confirmation is done, you will be able to log in.</p>
<p>You will be redirected in <span id="counter">0</span> seconds.</p>
    <br>
  <a href="<?=base_url();?>home/login_controller" class="back-button">Login</a>

  <!--<a href="javascript:history.back()" class="back-button">Go Back</a>-->
</div>
<style>
    .textcenter{
        
        margin-top:3rem;
           flex-direction: column;
        display: flex; 
        justify-content: center;
    align-items: center;
    height:100vh;
    }
    .textcenter h1{
        font-size:2.5rem;
        color:#ebb702;
            font-weight: 500;
    }
    .textcenter p{
        font-size:1.2rem;
    }
    .textcenter a{
            background: #fd7e14;
    padding: 5px 26px; 
    color: black;
    }
@media only screen and  (max-width:768px){
        .textcenter h1{
        font-size:5rem;
        color:#d5b702;
    }
    }
    
</style>


            
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
            var counter = 0;
            var interval = setInterval(function(){
                counter++;
                $("#counter").text(counter);
                if(counter >= 10){
                    clearInterval(interval);
                    window.location.href = "https://spandigitproject.me/matrimony/";
                }
            }, 1000); // increment every second
        });
    </script>
            
            