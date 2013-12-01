<?php session_start();
      require_once 'libs/db_connect.php';
      $yhteys = getConnection();
      $uid = $_SESSION['userId']; // user id
      $str = pg_escape_string($yhteys, $_POST['orderlist']);
      $query = pg_query($yhteys, "SELECT id FROM products WHERE name='{$str}';");
      $pid = pg_fetch_result($query, 0, 0); //product id
      $sql = "DELETE FROM cart_map WHERE user_id='{$uid}' AND product_id='{$pid}';";

      pg_query($yhteys, $sql);
      header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');?>
