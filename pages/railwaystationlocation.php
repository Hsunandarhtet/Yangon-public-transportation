<?php 
require_once ("DataObject.class.php");
require_once('menu.php');
echo DataObject::trainheader();
require_once( "getquerytrainlocation.php" );
list($stationlocation) = RailwayStationLocation::getRailwayStationLocation();
?>
<section class="trainListBG">
<div class="mainfirst6">
<a href="train.php" class="smallcategorylink"><h4 class="smallcategory">Train List / </a><a href="abouttrain.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocation.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_table.php" class="smallcategorylink">Station's Time Table </a></h4>
 <div class="container" style="margin-top: 5%;float: left;">

<?php

foreach ( $stationlocation as $stationlocation ) {
?>
  <div class="row wow fadeInLeft" data-wow-delay="0.3s">
    
      <button class="accordion">
          <?php echo $stationlocation->getValueEncoded( "stationlocation_name" ) ?>
      </button> 
  
    <div class="panel">
      <?php echo "<iframe src='".$stationlocation->getValueEncoded( "stationlocation_map" )."' width='550' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>" ?>
    </div>
</div>
 <?php } ?>
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


  