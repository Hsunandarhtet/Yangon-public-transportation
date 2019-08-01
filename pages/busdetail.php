<?php
require_once ("DataObject.class.php");
require_once( "getquery.php" );
$busid = isset( $_GET["busid"] ) ? (int)$_GET["busid"] : 0;
if ( !$busno = Bus::getBusNumber( $busid ) ) {
 DataObject::displayPageError();
  exit;
}
require_once('menu.php');
 ?>
<section class="busdetail">
    <div class="mainfirst6">
      <div style="margin-top: 8%;">
        <div class="container" style="margin-top: 5%;float: left;">
          <div class="detailbox" style="margin-left: 20%;">
            <div class="row" >
              <div  class="col-sm-5">
                <h4 class="headingtext margin-left-30">Bus Number: </h4>
              </div>
              <div  class="col-sm-4">
                <h4 style="line-height: 2.333em"><?php echo $busno->getValueEncoded( "busid" ) ?></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <h4 class="headingtext margin-left-30">Bus Route: </b></h4>
              </div>
              <div class="col-sm-5">
                <h4 class="text">
                  <?php 
                      $length=$busno->getValueEncoded( "busrouteEng" ); 
                      $array=array();
                      $array=explode(",", $length);
                      for ($i=0; $i < count($array); $i++) { 
                      echo  "<i class='fa fa-fw fa-bus'></i>  ".$array[$i]."<br>";
                   } ?>
                </h4>
              </div>
            </div>
            <?php 
              if($busno->getValueEncoded( 'buslocationimg' ) !=Null){
                ?>
                <div class="row text-center" >
                  <img src="<?php echo $busno->getValueEncoded( 'buslocationimg' ) ?> " style="margin: 8%; width:70%; height:50%;"/ >
                </div>
              <?php } 
              ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php echo DataObject::footer(); ?>

