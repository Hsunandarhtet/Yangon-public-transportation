<?php
require_once('menu.php');
require_once ("DataObject.class.php");
require_once( "getquerytrain.php" );
list($trainno) = Train::getTrainNo();
?>

<section class="trainListBG">
<div class="mainfirst6">
 <a href="train.php" class="smallcategorylink"><h4 class="smallcategory"  style="margin-top: 10%;">Train List / </a><a href="abouttrain.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocation.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_table.php" class="smallcategorylink">Station's Time Table </a></h4>

<div class="main-box" style="margin-top: 3%">
       <p class="aboutHeader text-center">Train List</p>
<?php

foreach ( $trainno as $trainno ) {
?>
<a href="traindetail.php?trainid=<?php echo $trainno->getValueEncoded( "trainid" ) ?>">
          <div class="box-style imagebox">
            <div class="textbox">
            <h2></h2>
              <p>Train Number</p><h2><?php echo $trainno->getValueEncoded( "trainno" ) ?><br></h2>

               <?php 
      $length= $trainno->getValueEncoded( "trainroute" ) ; 
      $array=array();
      $array=explode(",", $length);
      $len=count($array);
      echo "<p>From</p>  <span class='span-fontsize'>".$array[0]." ~ <p>to</p> <span class='span-fontsize'> ".$array[$len-1];?>
      <span class='span-fontsize' style="float: right;"><?php echo $trainno->getValueEncoded( "traintime_hour" ) ?> : <?php echo $trainno->getValueEncoded( "traintime_minute" ) ?> <?php echo $trainno->getValueEncoded( "traintime" ) ?>
            </div>
    </div>
    </a>
<?php
}
?>
    
    </div>
    </div>
</section>
<?php echo DataObject::footer(); ?>

