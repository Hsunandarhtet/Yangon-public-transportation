<?php 
require_once ("DataObject.class.php");
require_once('menu.php');
require_once( "getquerytrainlocation.php" );
list($stationlocation) = RailwayStationLocation::getRailwayStationLocation();
?>
<section class="trainListBG">
<div class="mainfirst6">
<a href="train.php" class="smallcategorylink"><h4 class="smallcategory"  style="margin-top: 10%;">Train List / </a><a href="abouttrain.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocation.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_table.php" class="smallcategorylink">Station's Time Table </a></h4>
 <div class="container" style="margin-top: 5%;float: left;">

<?php

foreach ( $stationlocation as $stationlocation ) {
?>
<a href="station_time_table_detail.php?stationlocation_id=<?php echo $stationlocation->getValueEncoded( "stationlocation_id" ) ?>">
  <div class="row wow fadeInLeft" data-wow-delay="0.3s">
    
      <button class="accordion"  style="margin-top: 15px;">
          <?php echo $stationlocation->getValueEncoded( "stationlocation_name" ) ?>
      </button> 
  </div>
  </a>
 <?php } ?>
 </div>
</div>
</section>
<?php echo DataObject::footer(); ?>


  