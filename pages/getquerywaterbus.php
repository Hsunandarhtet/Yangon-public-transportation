<?php

require_once "DataObject.class.php";
class WaterBus extends DataObject {

  protected $data = array(
    "waterbusid" => "",
    "express_service" => "",
    "express_service_mm" => "",
    "waterbusroute" => "",
    "waterbusroutemyanmar" => "",
    "waterbustime" => ""
      );
  public static function getWaterBus() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_water_bus ;

    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $waterbusno = array();
      foreach ( $st->fetchAll() as $row ) {
        $waterbusno[] = new WaterBus( $row );
      }
      parent::disconnect( $conn );
      return array( $waterbusno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
public static function getWaterBusMyanmar() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_water_bus_myanmar ;

    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $waterbusno = array();
      foreach ( $st->fetchAll() as $row ) {
        $waterbusno[] = new WaterBus( $row );
      }
      parent::disconnect( $conn );
      return array( $waterbusno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
  public static function getWaterBusDetail($waterbusid) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . TBL_water_bus . " WHERE waterbusid = :waterbusid";
    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );
      $st->bindValue( ":waterbusid", $waterbusid, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new WaterBus( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
public static function getWaterBusnone() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_water_bus ." WHERE express_service= :express_service";

    try {
       $conn->query("set character_set_results='utf8'");
       
      $st = $conn->prepare( $sql );  
       $st->bindValue( ":express_service","-", PDO::PARAM_STR ); 
         $st->execute();
       $waterbusno = array();
      foreach ( $st->fetchAll() as $row ) {
        $waterbusno[] = new WaterBus( $row );
      }
      parent::disconnect( $conn );
      return array( $waterbusno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
  public static function getWaterBusexpress() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_water_bus ." WHERE express_service= :express_service";

    try {
       $conn->query("set character_set_results='utf8'");
       
      $st = $conn->prepare( $sql );  
       $st->bindValue( ":express_service","Express Service", PDO::PARAM_STR ); 
         $st->execute();
       $waterbusno = array();
      foreach ( $st->fetchAll() as $row ) {
        $waterbusno[] = new WaterBus( $row );
      }
      parent::disconnect( $conn );
      return array( $waterbusno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
  }
  

  ?>