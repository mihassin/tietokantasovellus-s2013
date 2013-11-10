<?php

class DB {

  private $yhteys;

  public static function getDB() {
     $yhteys = new PDO("pqsql:")
    return $yhteys;
  }
}
?>
