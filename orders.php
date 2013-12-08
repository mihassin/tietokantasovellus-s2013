<?php require_once 'libs/checkAccess.php';
      require_once 'libs/listqueries.php';
      $kysely = getOrders();
      require_once 'views/header.php';
      echo "<h1>Tilaukset</h1>";
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/orders.php';
      require_once 'views/footer.php'; 
?>
