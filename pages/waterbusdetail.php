<?php
require_once( "getquerywaterbus.php" );
require_once ("DataObject.class.php");
$waterbusid = isset( $_GET["waterbusid"] ) ? (int)$_GET["waterbusid"] : 0;
if ( !$waterbusno = WaterBus::getWaterBusDetail( $waterbusid ) ) {
  DataObject::displayPageError();
  exit;
}
require_once('menu.php');
 ?>
<section class="waterbusdetail">
  <div class="mainfirst6">
    <div style="margin-top: 10%;">
      <a href="waterbus.php" class="smallcategorylink"><h4 class="smallcategory">Water Bus List </a> / <a href="aboutwaterbus.php" class="smallcategorylink">About Yangon Water Bus </a> / <a href="jettieslocation.php" class="smallcategorylink">Jetties Location</a> </h4>
        <div class="container" style="margin-top: 5%;float: left;">
          <div class="detailbox"  style="margin-left: 23%;">

            <div class="row" >
              <div  class="col-sm-5">
                <h3 class="headingtext margin-left-30">Service: </h3>
              </div>
              <div  class="col-sm-4">
                <h4 style="line-height: 2.333em"><?php echo $waterbusno->getValueEncoded( "express_service" ) ?></h4>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-5">
                <h3 class="headingtext margin-left-30">Jetties : </b></h3>
              </div>
              <div class="col-sm-4">
                <h4 class="text">
              <?php 
                $length= $waterbusno->getValueEncoded( "waterbusroute" ) ; 
                $array=array();
                $array=explode(",", $length);
              for ($i=0; $i < count($array); $i++) { 
    	         echo  "&rArr;  ".$array[$i]."<br>";
              } 
              ?></h4>
              </div>
            </div>

          <div style="border-bottom: 1px solid white;width: 50%;margin: 20px 25%"></div>

            <div class="row">
              <div class="col-sm-5">
                <h3 class="headingtext margin-left-30">Time : </b></h3>
              </div>
                  <div class="col-sm-2">
                    <h3>AM </h3>
                    <h4 class="text">
                    <?php 
                      $length= $waterbusno->getValueEncoded( "waterbustime" ) ; 
                      $array=array();
                      $arrayam=array();
                      $arraypm=array();
                      $array=explode("/", $length);
                      $am=$array[0];
                      $pm=$array[1];
                      $arrayam=explode(",",$am);
                      $arraypm=explode(",",$pm);
                    for ($i=0; $i < count($arrayam); $i++) { 
                      echo  "<i class='fa fa-fw fa-clock'></i> ".$arrayam[$i]."<br>";
                    } 
                    ?>
                    </h4>
                  </div>
                  <div class="col-sm-2">
                    <h3>PM</b></h3>
                    <h4 class="text">
                    <?php
                    for ($i=0; $i < count($arraypm); $i++) { 
                      echo  "&rArr; ".$arraypm[$i]."<br> ";
                    }?></h4>
                  </div>
                 
              </div>
            </div>
          </div>
        </div>
</section>
<?php echo DataObject::footer(); ?>

