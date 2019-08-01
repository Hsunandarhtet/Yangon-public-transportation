<?php 
require_once ("DataObject.class.php");
require_once('menumyanmar.php');
require_once( "getquerytrainlocation.php" );
if (isset($_POST["right"])) {
	upperphase();
	right();
}
else{
upperphase();
left();
}
function upperphase(){
$stationlocation_id = isset( $_GET["stationlocation_id"] ) ? (int)$_GET["stationlocation_id"] : 0;
if ( !$stationlocation = RailwayStationLocation::getStationTimeTable( $stationlocation_id ) ) {
  displayPageHeader( "Error" );
  echo "<div>Not found.</div>";
 
  exit;
}
?>
<section class="traindetail">
    <div class="mainfirst6">
		<div style="margin-top: 10%;">
			<a href="trainmyanmar.php" class="smallcategorylink"><h4 class="smallcategory">Train List / </a><a href="aboutwaterbusmyanmar.php" class="smallcategorylink">About Train / </a><a href="railwaystationlocmyanmar.php" class="smallcategorylink">Railway Station Location / </a><a href="station_time_tablemyanmar.php" class="smallcategorylink">Station's Time Table </a></h4>
				<div class="container" style="margin-top: 0%;float: left;">
				<div class="row text-center" style="padding:2% 0;">
				<form style="margin-left: 25%;" method="post" action="station_time_table_detail.php?stationlocation_id=<?php echo $stationlocation->getValueEncoded( 'stationlocation_id' ) ?>">
        			<div class="col-sm-6">
      					<div class="submit">
        					<input type="submit" value="LEFT(To Yangon)" id="button-blue" name="left" />
        					<div class="ease"></div>
      					</div>
      				</div>
      				<div class="col-sm-6">
      					<div class="submit">
        					<input type="submit" value="RIGHT(To Insein/Hlawga)" id="button-blue" name="right"/>
        					<div class="ease"></div>
      					</div>
      				</div>
    						</form>
    						</div>
  					<div class="detailbox"  style="margin-left: 23%;">
    					<div class="row"  style="line-height: 2.333em;padding-left: 2%;font-size: 20px;">
    						<div class="col-sm-4 text-center" ><h4 style="font-size: 22px;color: #6ff;">Train Number</h4></div>
    						<div class="col-sm-4 text-center" ><h4 style="font-size: 22px;color: #6ff;">Time</h4></div>
    						<div class="col-sm-4 text-center" ><h4 style="font-size: 22px;color: #6ff;">To</h4></div>
    						<br>
 <?php } ?>
    						<?php  
    						function left(){

$stationlocation_id = isset( $_GET["stationlocation_id"] ) ? (int)$_GET["stationlocation_id"] : 0;
if ( !$stationlocation = RailwayStationLocation::getStationTimeTable( $stationlocation_id ) ) {
  displayPageHeader( "Error" );
  echo "<div>Not found.</div>";
 
  exit;
}
      $length= $stationlocation->getValueEncoded( "station_time_table_left" ) ; 
      $array=$array2=$array3=array();
      $array=explode("/", $length);
      $count3=0;
      for ($i=0; $i < count($array); $i++) { 
       $text=$array[$i];
       $array2=explode(",", $text);
       $array3=array_merge($array3,$array2);
    } 
      for ($i=0; $i < count($array3); $i++) { 
      	$count3+=1;
      	if ($count3%3==0) {
      	echo "<div class='col-sm-4 wow fadeInDown'>". $array3[$i]."</div><br>";
      	}
      	else{
      echo "<div class='col-sm-4 wow fadeInDown'>".$array3[$i]."</div>";

}
    } 
    ?>
    					</div>
    				</div>
    			</div>
    	</div>	
	</div>
</section>
<?php echo DataObject::footer(); }?>

<?php  
    						function right(){

$stationlocation_id = isset( $_GET["stationlocation_id"] ) ? (int)$_GET["stationlocation_id"] : 0;
if ( !$stationlocation = RailwayStationLocation::getStationTimeTable( $stationlocation_id ) ) {
  displayPageHeader( "Error" );
  echo "<div>Not found.</div>";
  exit;
}
      $length= $stationlocation->getValueEncoded( "station_time_table_right" ) ; 
      $array=$array2=$array3=array();
      $array=explode("/", $length);
      $count3=0;
      for ($i=0; $i < count($array); $i++) { 
       $text=$array[$i];
       $array2=explode(",", $text);
       $array3=array_merge($array3,$array2);
    } 
      for ($i=0; $i < count($array3); $i++) { 
      	$count3+=1;
      	if ($count3%3==0) {
      	echo "<div class='col-sm-4 wow fadeInDown'>". $array3[$i]."</div><br>";
      	}
      	else{
      echo "<div class='col-sm-4 wow fadeInDown'>".$array3[$i]."</div>";

}
    } 
    ?>
    					</div>
    				</div>
    			</div>
    	</div>	
	</div>
</section>
<?php echo DataObject::footer(); }?>


  