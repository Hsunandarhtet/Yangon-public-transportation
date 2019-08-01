<?php
require_once( "getquerytrain.php" );
require_once ("DataObject.class.php");
$trainid = isset( $_GET["trainid"] ) ? (int)$_GET["trainid"] : 0;
if ( !$trainno = train::gettrainNumber( $trainid ) ) {
   DataObject::displayPageError();
  exit;
}
require_once('menu.php');
 ?>
<section class="traindetail">
  <div class="mainfirst6">
    <div style="margin-top: 10%;">
      <a href="train.php" class="smallcategorylink"><h4 class="smallcategory" >Train List / </a><a href="abouttrain.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocation.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_table.php" class="smallcategorylink">Station's Time Table </a></h4>
<br>
<div class="container" style="margin-top: 5%;float: left;">
  <div class="detailbox"  style="margin-left: 23%;">
    <div class="row" >
      <div  class="col-sm-5">
        <h4 class="headingtext margin-left-30">Train NO : </h4>
      </div>
    <div  class="col-sm-4">
        <h4 style="line-height: 2.333em"><?php echo $trainno->getValueEncoded( "trainno" ) ?></h4>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <h4 class="headingtext margin-left-30">Time : </b></h4>
      </div>
      <div class="col-sm-4">
        <h4 class="text"><?php echo $trainno->getValueEncoded( "traintime_hour" ) ?> : <?php echo $trainno->getValueEncoded( "traintime_minute" ) ?> <?php echo $trainno->getValueEncoded( "traintime" ) ?></h4>
      </div>
    </div>
  <div style="border-bottom: 1px solid white;width: 50%;margin: 20px 25%"></div>
  <div class="row">
    <div class="col-sm-5">
  <h3 class="headingtext margin-left-30">Route : </b></h3></div>
  <div class="col-sm-4">
   <h4 class="text"><?php 
      $length= $trainno->getValueEncoded( "trainroute" ) ; 
      $array=array();
      $array=explode(",", $length);
    for ($i=0; $i < count($array); $i++) { 
      echo  "<i class='fa fa-fw fa-map-marker'></i>  ".$array[$i]."<br>";
    } ?></h4>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</section>
<?php echo DataObject::footer(); ?>



