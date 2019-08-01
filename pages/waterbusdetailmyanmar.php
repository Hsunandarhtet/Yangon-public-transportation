<?php
require_once( "getquerywaterbus.php" );
require_once ("DataObject.class.php");
$waterbusid = isset( $_GET["waterbusid"] ) ? (int)$_GET["waterbusid"] : 0;
if ( !$waterbusno = WaterBus::getWaterBusDetail( $waterbusid ) ) {
  DataObject::displayPageError();
  exit;
}
require_once('menumyanmar.php');
?>
<section class="waterbusdetail">
  <div class="mainfirst6">
    <div style="margin-top: 10%;">
      <a href="waterbusmyanmar.php" class="smallcategorylink"><h4 class="smallcategory">Water Bus List </a> / <a href="aboutwaterbusmyanmar.php" class="smallcategorylink">About Yangon Water Bus </a> / <a href="jettieslocationmyanmar.php" class="smallcategorylink">Jetties Location</a> </h4>
        <div class="container" style="margin-top: 5%;float: left;">
          <div class="detailbox"  style="margin-left: 23%;">
      <div class="row" >
        <div  class="col-sm-5">
          <p class="headingtext margin-left-30 myanfont">၀န္ေဆာင္မႈ: </p>
        </div>
        <div  class="col-sm-4">
            <p style="line-height: 2.333em" class="myanfont"><?php echo $waterbusno->getValueEncoded( "express_service_mm"    ) ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <p class="headingtext margin-left-30 myanfont">ဆိပ္ကမ္းမ်ား : </b></p>
        </div>
        <div class="col-sm-4">
        <p class="text myanfont">
      <?php 
    	   $length= $waterbusno->getValueEncoded( "waterbusroutemyanmar" ) ; 
          $array=array();
          $array=explode("-", $length);
        for ($i=0; $i < count($array); $i++) { 
    	   echo  "&rArr;  ".$array[$i]."<br>";
        } 
      ?></p>
    </div>
  </div>
  <div style="border-bottom: 1px solid white;width: 50%;margin: 20px 25%"></div>
  <div class="row">
    <div class="col-sm-5">
  <p class="headingtext margin-left-30 myanfont">အခ်ိန္ဇယား: </b></p></div>
  <div class="col-sm-2">
   <p>AM </p>
    <p class="text"><?php 
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
      echo  "&rArr; ".$arrayam[$i]."<br>";
    } 
    ?></p>
    </div>
     <div class="col-sm-2">
   <p>PM</b></p>
    <p class="text"><?php
    for ($i=0; $i < count($arraypm); $i++) { 
      echo  "&rArr; ".$arraypm[$i]."<br> ";
    }?></p>
    </div>
  </div>

  </div>
</div>
</div>
</div>
</section>
<?php echo DataObject::footer(); ?>

