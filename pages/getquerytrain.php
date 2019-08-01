<?php

require_once "DataObject.class.php";
class Train extends DataObject {

  protected $data = array(
    "trainid" => "",
    "trainno" => "",
    "trainno_myanmar" => "",
    "trainroute" => "",
    "trainroute_myanmar" => "",
    "traintime_hour" => "", "traintime_minute" => "", "traintime" => "", "traincost" => ""
      );
  public static function getTrainNo() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_train ;

    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );      $st->execute();
      $trainno = array();
      foreach ( $st->fetchAll() as $row ) {
        $trainno[] = new Train( $row );
      }
      parent::disconnect( $conn );
      return array( $trainno);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  public static function getTrainNumber($trainid) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . TBL_train . " WHERE trainid = :trainid";
    try {
      $conn->query("set character_set_results='utf8'");
      $st = $conn->prepare( $sql );
      $st->bindValue( ":trainid", $trainid, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Train( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  }
  
  ?>