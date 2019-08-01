<?php class WaterBusLocation extends DataObject {

  protected $data = array(
    "waterbuslocationid" => "",
    "jetties" => "",
    "jettiesmyanmar" => "",
    "waterbuslocationimg" => "",
    "waterbuslocationmap" => ""
      );
  public static function getWaterBusLocation() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_water_bus_location ;

    try {
       $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $waterbuslocation = array();
      foreach ( $st->fetchAll() as $row ) {
        $waterbuslocation[] = new WaterBusLocation( $row );
      }
      parent::disconnect( $conn );
      return array( $waterbuslocation);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
  
}
   ?>