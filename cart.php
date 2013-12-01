<?php session_start();
      if(!isset($_SESSION['userId'])
       header('Location: http://mihassin.users.cs.helsinki.fi'); 
      require_once 'header.php';
      echo "<h1>Ostoskori</h1>";
      require_once 'views/cartbuttons.php';
      require_once 'footer.php'; ?>
