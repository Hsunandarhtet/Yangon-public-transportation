<?php 
require_once ("DataObject.class.php");
require_once('menumyanmar.php');
echo DataObject::trainheader();
require_once( "getquerytrainlocation.php" );
list($stationlocation) = RailwayStationLocation::getRailwayStationLocation(); 
?>
<section class="trainListBG">
<div class="mainfirst6">
<a href="trainmyanmar.php" class="smallcategorylink"><h4 class="smallcategory">Train List / </a><a href="aboutwaterbusmyanmar.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocmyanmar.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_tablemyanmar.php" class="smallcategorylink">Station's Time Table </a></h4>
 <div class="container" style="margin-top: 5%;float: left;">

<?php

foreach ( $stationlocation as $stationlocation ) {
?>
  <div class="row wow fadeInLeft" data-wow-delay="0.3s">
      <button class="accordion myanfont">
          <?php echo $stationlocation->getValueEncoded( "stationlocationname_myanmar" ) ?>
      </button> 
  
    <div class="panel">
      <?php echo "<iframe src='".$stationlocation->getValueEncoded( "stationlocation_map" )."' width='550' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>" ?>
    </div>
</div>
 <?php } ?> 
</div>
  </div>
  </section>
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

  <?php echo DataObject::footer(); ?>

  
 
