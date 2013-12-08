<?php session_start();
      require_once 'libs/db_connect.php';
      $yhteys = getConnection();
      
      $id = pg_escape_string($yhteys, $_POST['productlist']);

      $tot = 0;
      $mats = "";

      $sql = "UPDATE cart_map SET price={$tot}, added_mats='{$mats}' WHERE id={$id};";

      //pg_query($yhteys, $sql);
      pg_close($yhteys);
      header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
      exit();
?>
