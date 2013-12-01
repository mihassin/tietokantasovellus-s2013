<?php session_start();
      if(!isset($_SESSION['userId']))
       header('Location: http://mihassin.users.cs.helsinki.fi'); 
      require_once 'views/header.php';
      echo "<h1>Ostoskori</h1>";
      require_once 'libs/list-cart.php';
      $uid = $_SESSION['userId'];
      $kysely = "SELECT products.name as tuote, cart_map.amount as kpl, products.price as price" 
      $kysely .= " FROM products, cart_map" 
      $kysely .= " WHERE products.id = cart_map.product_id AND cart_map.ordered = FALSE AND cart_map.user_id = '{$uid}';";
      echo $kysely;
      //getCartList($kysely);
      require_once 'views/cartbuttons.php';
      require_once 'views/footer.php'; ?>
