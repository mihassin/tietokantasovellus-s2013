<?php session_start();
      if(!isset($_SESSION['userId']))
       header('Location: http://mihassin.users.cs.helsinki.fi'); 
      require_once 'views/header.php';
      echo "<h1>Ostoskori</h1>";
      require_once 'libs/listqueries.php';
      require_once 'libs/list-cart.php';
      $uid = $_SESSION['userId'];
      $kysely = getCartByUid($uid);
      getCartList($kysely);
      require_once 'views/cartbuttons.php';
      require_once 'views/footer.php'; ?>
