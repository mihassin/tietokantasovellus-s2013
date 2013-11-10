<?php

  try {
    $yhteys = new PDO("pgsql:dbname=users");
  } catch(PDOException $e) {
    die("ERROR: " . $e->getMessage());
  }

  $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
