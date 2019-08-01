<?php class RailwayStationLocation extends DataObject {

  protected $data = array(
    "stationlocation_id" => "",
    "stationlocation_name" => "",
    "stationlocationname_myanmar" => "",
    "stationlocation_map" => "",
    "station_time_table_left" => "",
    "station_time_table_right" => ""
      );
  public static function getRailwayStationLocation() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_station_location ;

    try {
       $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $stationlocation = array();
      foreach ( $st->fetchAll() as $row ) {
        $stationlocation[] = new RailwayStationLocation( $row );
      }
      parent::disconnect( $conn );
      return array( $stationlocation);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
    public static function getStationTimeTable($stationlocation_id) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . TBL_station_location . " WHERE stationlocation_id = :stationlocation_id";
    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );
      $st->bindValue( ":stationlocation_id", $stationlocation_id, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new RailwayStationLocation( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
}
   ?>