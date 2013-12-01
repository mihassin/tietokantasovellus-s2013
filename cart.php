<?php session_start();
      if(!isset($_SESSION['userId']))
       header('Location: http://mihassin.users.cs.helsinki.fi'); 
      require_once 'views/header.php';
      echo "<h1>Ostoskori</h1>";
      require_once 'libs/listqueries.php';
      require_once 'libs/list-cart.php';
      $uid = $_SESSION['userId'];
      $kysely = getCartByUid($uid);
      $empty = getCartList($kysely);
      require_once 'views/cartbuttons.php';
      getButtons($empty);
      require_once 'views/footer.php'; ?>
