<?php session_start();
      if(!isset($_SESSION['userId'])) {
       header('Location: http://mihassin.users.cs.helsinki.fi');
       exit();
      }

     require_once 'libs/dropList.php';
     require_once 'libs/listqueries.php';
     $uid = $_SESSION['userId'];
     require_once 'views/addMaterialsToItems.php';
?>
