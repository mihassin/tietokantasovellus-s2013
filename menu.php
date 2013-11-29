<?php require_once 'libs/listqueries.php';
      $kysely = getMenu();
      require_once 'views/header.php';
      require_once 'views/menu.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      if( ($_SESSION['userRole'] == 4) || ($_SESSION['userRole'] == 3) || ($_SESSION['userRole'] == 2) ) {
       $kysely = "SELECT name FROM products WHERE product_type_id='1';";
       require_once 'views/listbuttons.php';
      }
      require_once 'views/footer.php'; 
?>
