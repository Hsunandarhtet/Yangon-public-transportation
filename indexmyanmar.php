<?php 
include('menumyanmar.php');
?>
<!--First Div -->
<div class="container fullwidth" style="top: 0;left: 0;right: 0;">
    <div class='row text-center'>
        <section class='sec5'>
            <div class="mainfirst6">
                <div class="wow fadeInDown">
                    <img src="image/logo6.png" class="first_div_logo">
                    <h4><span class="typing"></span></h4>
                </div>
            </div>
        </section>
    </div>
</div>
<!--End First Div -->

<!--Second Div -->
<div class="container background_color_white fullwidth">
    <div class='row'>
        <div class='col-sm-7 wow fadeInLeft' data-wow-delay="0.3s">
            <p class="second_div_text">
            <span class="second_div_comma bluecolor">&#8220;</span>
            Describing the informations of Yangon Public Transportation(Bus, Train and Yangon Water Bus).
            <span  class="second_div_comma_right bluecolor">&#8221;</span>
            </p>
        </div>
        <div class='col-sm-4  wow fadeInRight' style='position: relative;'  data-wow-delay="0.5s">
            <img src='image/busicon.png' style='margin-top: 20%' class='bussmallimg'><br>
            <img src='image/waterbusicon.png' style='margin-left:30%;margin-top: 10%' class='bussmallimg'><br>
            <img src='image/trainicon.png' style='margin-left:0%;margin-top: 10%' class='bussmallimg'><br>
        </div>
    </div>
</div>
<!--Second Div -->

<!--Third Div -->
<section class='sec4'>
    <div class='container fullwidth'  style="background: rgba(255, 255, 255, 0.30);">
        <div class='row' style="margin-top: 25%;margin-bottom: 10%;">
            <a href="pages/busmyanmar.php"  class="text_decoration blackcolor">
                <div class='col-sm-4  wow fadeInDown'  data-wow-delay="0.2s">
                    <img src='image/busicon.png' class="icon-icon">
                    <p class="third_div_text"><b>BUS Connection</b><br><i><b>YBS</b></i> Bus Number List</p>
                </div>
            </a>
            <a href="pages/trainmyanmar.php" class="text_decoration blackcolor">
                <div class='col-sm-4 wow fadeInDown' data-wow-delay="0.4s">
                <img src='image/trainicon.png' class="icon-icon"'>
                <p  class="third_div_text"><b>Train Connection</b><br>Train Schedule List</p>
                </div>
            </a>
            <a href="pages/waterbusmyanmar.php"  class="text_decoration blackcolor">
                <div class='col-sm-4 wow fadeInDown' data-wow-delay="0.6s">
                    <img src='image/waterbusicon.png' class="icon-icon">
                    <p class="third_div_text"><b>Water bus Connection</b><br>Water Bus Schedule List</p>
                </div>
            </a>
        </div>
    </div>
</section>
<!--End Third Div -->

<!--Fourth Div -->
<div class='container background_color_white fullwidth'>
    <div class='row text-center wow fadeInLeft'>
        <p class="second_div_text" style="margin-top: 2% !important;margin-bottom: 0% !important;">
            <span class="second_div_comma bluecolor">&#8220;</span>
            Describing the informations of <a href="pages/railwaystationlocation.php" 
            class="pupplecolor" style="text-decoration: none;">Railway Stations Location</a> and <a href="pages/jettieslocation.php" class="pupplecolor" style="text-decoration: none;">Jetties Location.</a>
            <span class="second_div_comma_right bluecolor">&#8221;</span>
        </p>
        
    </div>
</div>
<!--End Fourth Div -->

<!--Fifth Div -->
<section class="sec6" >
    <div class="container fullwidth"  style="background:rgba(0,0,0,0.4);">
        <div class="row text-center" style="margin-top: 20%;font-size: 20px;"><p>Get in touch with me by filling contact form below</p>
        </div>
            
                <div id="form-main"  style="margin-bottom: 5%" >
                        <div id="form-div">
                            <form class="form" id="form1" action="contactprocess.php" method="post">
                                <input type="text" class="feedback-input" placeholder="Name" name="username" required/>
                                <input type="email" class="feedback-input" name="email" placeholder="Email" required/>
                                <textarea class="feedback-input" name="comment" placeholder="Comment" required></textarea>
                                <div class="submit">
                                    <input type="submit" value="SEND" id="button-blue" />
                                    <div class="ease"></div>
                                </div>
                            </form>
                        </div>
                </div>
            
    </div>
</section>
<!--End Fifth Div -->

<div style="width: 100%;height: 20%;background: #282a3c;margin: 0;">
        <div class="container">
            <div class="row" style="margin: 3% 0% 3% 10%">
                <div class="col-sm-5 text-center">
                <img src="image/logo6.png" alt="Yangon Public Trasportation" class="logoimg" />
                   
                </div>
                <div class="col-sm-3 text-center">
                    <p style="font-size: 20px;margin-top: 5%;color: #ccc;">Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 

<i class="fa fa-fw fa-laptop"></i>.</p>
                </div>
               
                
                
            </div>
        </div>
    </div>
    <!-- End of Footer -->
<script>
    new WOW().init();
  </script> 
  <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top">&#9978;</a>
</body>
</html>