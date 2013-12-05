<?php session_start();
      if( !isset($_SESSION['userId']) ) {
       header('Location: http://mihassin.users.cs.helsinki.fi');
       exit();
      }
      
      require_once 'libs/cart-total.php';
      $tot_price = getTotal($_SESSION['userId']);
      require_once 'views/order.php';
?>
