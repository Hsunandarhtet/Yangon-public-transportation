<?php
require_once ("DataObject.class.php");
require_once('menu.php');
require_once( "getquerywaterbus.php" );
if ( isset( $_POST["submitButtonnone"] )) {
waterbuschooseheader();
displaynone();
} 
else if ( isset( $_POST["submitButtonexpress"] )) {
waterbuschooseheader();
displayexpress();
}
else{
waterbuschooseheader();
displayall();
}

function waterbuschooseheader(){
?>
<section class="waterbuslListBG">
  <div class="mainfirst6">
    <a href="aboutwaterbus.php" class="smallcategorylink"><h4 class="smallcategory" style="margin-top: 10%;">About Yangon Water Bus / </a><a href="jettieslocation.php" class="smallcategorylink">Jetties Location</a></h4>
    <form style="margin-left: 20%;margin-top: 15%;" method="post" action="waterbus.php">
              <div class="col-sm-3">
                <div class="submit">
                  <input type="submit" value=" All " id="button-blue" name="submitButtonall" />
                  <div class="ease"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="submit">
                  <input type="submit" value="All Stops Service" id="button-blue" name="submitButtonnone"/>
                  <div class="ease"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="submit">
                  <input type="submit" value="Express service" id="button-blue" name="submitButtonexpress"/>
                  <div class="ease"></div>
                </div>
              </div>
          </form>
    
    <div class="main-box" style="margin-top: 3%">
    <?php }

    function displayall(){ 
    ?>
    <?php
    list($waterbusno) = WaterBus::getWaterBus();
    foreach ( $waterbusno as $waterbusno ) {
    ?>
    <a href="waterbusdetail.php?waterbusid=<?php echo $waterbusno->getValueEncoded( "waterbusid" ) ?>">
          <div class="box-style imagebox">
            <div class="textbox">     
              <h6 class="boxwb">
              <?php echo $waterbusno->getValueEncoded( "express_service" ) ?></h6><h2></h2>
               <?php 
                  $length= $waterbusno->getValueEncoded( "waterbusroute" ) ; 
                  $array=array();
                  $array=explode(",", $length);
                  $len=count($array);
                  echo "<p>From</p>  <span class='span-fontsize'>".$array[0]." ~ <p>to</p> <span class='span-fontsize'> ".$array[$len-1];
                ?>
      
            </div>
		    </div>
    </a>
    <?php
    }
    ?></div>
    </div>
</section>
<?php echo DataObject::footer();  } 

    function displaynone(){ 
    list($waterbusno) = WaterBus::getWaterBusnone();
    foreach ( $waterbusno as $waterbusno ) {
    ?>
    <a href="waterbusdetail.php?waterbusid=<?php echo $waterbusno->getValueEncoded( "waterbusid" ) ?>">
          <div class="box-style imagebox">
            <div class="textbox">
            <h6 class="boxwb"><?php echo $waterbusno->getValueEncoded( "express_service" ) ?></h6><h2></h2>
            <?php 
              $length= $waterbusno->getValueEncoded( "waterbusroute" ) ; 
              $array=array();
              $array=explode(",", $length);
              $len=count($array);
              echo "<p>From</p>  <span class='span-fontsize'>".$array[0]." ~ <p>to</p> <span class='span-fontsize'> ".$array[$len-1];
            ?>
            </div>
          </div>
    </a>

    <?php
    }?>
    </div>
  </div>
</section>
<?php echo DataObject::footer();  
}
 
    function displayexpress(){ 
    list($waterbusno) = WaterBus::getWaterBusexpress();
    foreach ( $waterbusno as $waterbusno ) {
    ?>
    <a href="waterbusdetail.php?waterbusid=<?php echo $waterbusno->getValueEncoded( "waterbusid" ) ?>">
          <div class="box-style imagebox">
            <div class="textbox">
            <h6 class="boxwb"><?php echo $waterbusno->getValueEncoded( "express_service" ) ?></h6><h2></h2>
               <?php 
                  $length= $waterbusno->getValueEncoded( "waterbusroute" ) ; 
                  $array=array();
                  $array=explode(",", $length);
                  $len=count($array);
                  echo "<p>From</p>  <span class='span-fontsize'>".$array[0]." ~ <p>to</p> <span class='span-fontsize'> ".$array[$len-1];
                ?>
      
            </div>
          </div>
    </a>
    <?php
    }?>
    </div>
  </div>
</section>
<?php echo DataObject::footer();  
}?>
    