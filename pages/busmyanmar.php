<?php 
require_once ("DataObject.class.php");
require_once('menumyanmar.php');
require_once( "getquery.php" );
list($busno) = Bus::getBusNo();
?>

<section class="busListBG">
  <div class="mainfirst6">
    <a href="aboutybsmyanmar.php" class="smallcategorylink"><h4 class="smallcategory" style="margin-top: 8%;">About Yangon Bus Service </a></h4>

      <div class="main-box" style="margin-top: 3%;">
       <p class="aboutHeader text-center">YBS List</p>
      <?php
        foreach ( $busno as $busno ) {
      ?>
      <a href="busdetailmyanmar.php?busid=<?php echo $busno->getValueEncoded( "busid" ) ?>">
        <div class="box-style imagebox wow fadeInRight"  data-wow-delay="0.3s">
          <div class="textbox">
            <h2></h2>
              <p class="myanfont">ယာဥ္နံပါတ္ </p><h2 style="text-align: center;">
              <!--Getting bus's color -->
              <div id="busno_background"
              <?php 
                if ($busno->getValueEncoded( "buscolor" )=="north") {
                  echo  ' class="north"';}
                else if($busno->getValueEncoded( "buscolor" )=="east"){
                  echo ' class="east"' ;}
                else if($busno->getValueEncoded( "buscolor" )=="south"){
                  echo ' class="south"' ;}
                else if($busno->getValueEncoded( "buscolor" )=="west"){
                  echo ' class="west"' ;}
                else if($busno->getValueEncoded( "buscolor" )=="in"){
                  echo ' class="in"' ;}
                else if($busno->getValueEncoded( "buscolor" )=="out"){
                  echo ' class="out"' ;}
              ?>
              >
              <?php echo $busno->getValueEncoded( "busid" ) ?>
              </div><br>
              </h2>
              <!--get start bus stop and end bus stop--> 
              <?php 
                $length= $busno->getValueEncoded( "busroute" ) ; 
                $array=array();
                $array=explode("-", $length);
                $len=count($array);
                echo "<p>From</p>  <span class='span-fontsize myanfont'>".$array[0]." ~ <p>to</p> <span class='span-fontsize myanfont'> ".$array[$len-1];
              ?>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <!--- end of main-box -->
  </div>
  <!-- end of mainfirst6-->
</section>
<?php echo DataObject::footer(); ?>
 
   