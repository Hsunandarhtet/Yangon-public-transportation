<?php

require_once "DataObject.class.php";

class Bus extends DataObject {

  protected $data = array(
    "busid" => "",
    "busno" => "",
    "busnoEng" => "",
    "busroute" => "",
    "busrouteEng" => "",
    "buslocationimg" => "","buscolor" => ""
      );
public static function getBusNo() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_bus_myanmar;

    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $busno = array();
      foreach ( $st->fetchAll() as $row ) {
        $busno[] = new Bus( $row );
      }
      parent::disconnect( $conn );
      return array( $busno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  public static function getBusNumber($busid) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . TBL_bus_myanmar . " WHERE busid = :busid";
    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );
      $st->bindValue( ":busid", $busid, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Bus( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  }

?>
