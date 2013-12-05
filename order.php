<?php session_start();
      if( !isset($_SESSION['userId']) ) {
       header('Location: http://mihassin.users.cs.helsinki.fi');
       exit();
      }
      
      $tot_price = 1;
      require_once 'views/order.php';
?>
