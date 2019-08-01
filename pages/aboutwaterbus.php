<?php 
require_once ("DataObject.class.php");
require_once('menu.php');
echo DataObject::waterbusheader();
?>
<section class="waterbusdetail">
<div class="mainfirst6">
<div class="container">
<div class="row" style="margin-top: 9%;position: relative;">
<p class="aboutHeader text-center">About Water Bus<br>
<img src="../image/waterbus.png" width="150px" height="150px" style="border-radius: 50%"></p>
</div>
<div class="row">
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.1s">
<h4 class="abouttitle text-center">Started Date</h4>
<p class="aboutbody text-center">October 6,2017</p>
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.2s">
<h4 class="abouttitle text-center">Purpose</h4><br>
<p  class="aboutbody">- To reduce traffic jams and improve the city's transport system.<br>- To imporve the people's situation at a minimum cost to the people.</p>
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.3s">
<h4 class="abouttitle text-center">Yangon River Route</h4><br>
<p class="aboutbody">From Insein to Botahtaung with jetties in Insein,Shwe Padauk,Latha(Lanthit), Pansoedan(Nanthida) and Botahtaung.</p>
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.4s">
<h4 class="abouttitle text-center">Travel Time</h4><br>
<p class="aboutbody">The Travel time from start to finish is about one-and-a-half(1:30) hours.<br>The route will be plied from 6 A.M to 6:30 P.M.</p>
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.5s">
<h4 class="abouttitle text-center">Ticket's Cost</h4><br>
<p class="aboutbody text-center">300 Kyats per person</p>
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.6s">
<h4 class="abouttitle text-center">Recycling Lunch Box's Cost</h4><br>
<p class="aboutbody text-center">450 Kyats per box<br>
<img src="../image/lunchbox1.jpg" style="border-radius: 10%;padding-left: 15px;padding-bottom: 10px;width: 50%;height: 50%;">
<img src="../image/lunchbox2.jpg" style="border-radius: 10%;padding-left: 15px;padding-bottom: 10px;width: 50%;height: 50%;"></p>
</div>
</div>
</div>
</div>
</div>
</section>

  <?php echo DataObject::footer(); ?>