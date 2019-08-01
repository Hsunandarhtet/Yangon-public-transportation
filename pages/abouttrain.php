<?php 
require_once ("DataObject.class.php");
require_once('menu.php');
echo DataObject::trainheader();
 ?>

  <section class="traindetail" >
<div class="mainfirst6" >
<div class="container">
<div class="row text-center" style="margin-top: 9%;position: relative;">
<p class="aboutHeader">About Train</p>
</div>
<div class="row">
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.3s">
<h4 class="abouttitle text-center">Yangon Train Route</h4><br>

<p class="aboutbody">- The loop network consists of 39 station.<br>- The loop begins from Yangon Central Railway Station to Mingalardon Railway Station near Yangon International Airport, via Insein to the west and Okkalapa in the east.</p>

<img src="../image/trainmap2.png" style="padding: 20px 50px ;padding-bottom: 10px;width: 80%;height: 400px;">

</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.4s">
<h4 class="abouttitle text-center">Travel Time</h4><br>
<p class="aboutbody">The entire circular trip takes approximately three hours to complete, is a way to see a cross section of life in Yangon.<br>The route will be plied from 3:45 A.M to 10:15 P.M.</p>
<img src="../image/trainmap.jpg" style="padding: 20px 50px ;padding-bottom: 10px;width: 80%;height: 400px;">
</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.5s">
<h4 class="abouttitle text-center">Ticket's Cost</h4><br>
<p class="aboutbody">-The cost of a ticket for a distance of 15 miles was 100 kyats.<br>-The cost of a ticket for over 15 miles was 200 kyats.</p>
</div>

</div>
</div>
</div>
</div>
</section>

  <?php echo DataObject::footer(); ?>