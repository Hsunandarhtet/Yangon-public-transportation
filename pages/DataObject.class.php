<?php

require_once "config.php";

abstract class DataObject {
    protected $data = array();

    public function __construct( $data ) {
    foreach ( $data as $key => $value ) {
      if ( array_key_exists( $key, $this->data ) ) $this->data[$key] = $value;
        }
    }

    public function getValue( $field ) {
        if ( array_key_exists( $field, $this->data ) ) {
        return $this->data[$field];
        } else {
        die( "Field not found" );
        }
    }

    public function getValueEncoded( $field ) {
        return htmlspecialchars( $this->getValue( $field ) );
    }

    protected static function connect() {
        try {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch ( PDOException $e ) {
        die( "Connection failed: " . $e->getMessage() );
        }
        return $conn;
    }

    protected static function disconnect( $conn ) {
        $conn = "";
    }
    public static function displayPageError(){
        ?> 
                <div style="margin-top: 20%;">
                    <p style="color: red;font-size: 22px;text-align: center;">Not Found</p>
                </div>
          
    <?php } 

    public static function busheader(){
        ?>
        <script src="../js/jssor.slider-27.0.0.min.js" type="text/javascript"></script>
            <div id="jssor_1" class="slidebox">
                <div class="mainfirst">
                    </div> 
                    <!-- Loading Screen -->
                    <div data-u="slides" class="slideimg">
                        <div>
                            <img data-u="image" src="../image/001b.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="../image/002b.jpg" />
                        </div>
                         <div>
                            <img data-u="image" src="../image/003b.jpg" />
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;z-index: 2;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
    <?php
    }
    public static function trainheader(){
    ?>
    <script src="../js/jssor.slider-27.0.0.min.js" type="text/javascript"></script>
        <div id="jssor_1" class="slidebox">
            <div class="mainfirst">
                </div> 
                <!-- Loading Screen -->
                <div data-u="slides"  class="slideimg">
                    <div>
                        <img data-u="image" src="../image/001t.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="../image/002t.jpg" />
                    </div>
                     <div>
                        <img data-u="image" src="../image/003t.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="../image/004t.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="../image/005t.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="../image/006t.jpg" />
                    </div>
                </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;z-index: 2;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
    <?php
    }
    public static function waterbusheader(){
    ?> 
    <script src="../js/jssor.slider-27.0.0.min.js" type="text/javascript"></script> 
        <div id="jssor_1" class="slidebox">
            <div class="mainfirst"></div>
        <!-- Loading Screen -->
        <div data-u="slides" class="slideimg">

            <div>
                <img data-u="image" src="../image/001w.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/002w.jpg" />
            </div>
             <div>
                <img data-u="image" src="../image/003w.png" />
            </div>
             <div>
                <img data-u="image" src="../image/004w.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/005w.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;z-index: 2;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;z-index: 2" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:70%;height:70%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
  
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
       
    <?php
}
  public static function footer(){
    ?>
  <div style="width: 100%;height: 20%;background: #282a3c;margin: 0;">
        <div class="container">
            <div class="row" style="margin: 3% 0% 3% 10%">
                <div class="col-sm-5 text-center">
                <img src="../image/logo6.png" alt="Yangon Public Trasportation" class="logoimg" />
                   
                </div>
                <div class="col-sm-3 text-center">
                    <p style="font-size: 20px;margin-top: 5%;color: #ccc;">Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 

<i class="fa fa-fw fa-laptop"></i>.</p>
                </div>
               
                
                
            </div>
        </div>
    </div>
    <!-- End of Footer -->
<script>
    new WOW().init();
  </script> 
  <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top">&#9978;</a>
    
</body>
</html>
    <?php
  }
}

?>
