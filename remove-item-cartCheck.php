<?php session_start();
      require_once 'libs/db_connect.php';
      $yhteys = getConnection();
      $uid = $_SESSION['userId']; // user id
      $id = pg_escape_string($yhteys, $_POST['orderlist']);
      $sql = "DELETE FROM cart_map WHERE user_id='{$uid}' AND id='{$id}' AND ordered=FALSE;";

      pg_query($yhteys, $sql);
      pg_close($yhteys);
      header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
      exit();
?>
