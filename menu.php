<?php require_once 'libs/listqueries.php';
      $kysely = getMenu();
      require_once 'views/header.php';
      require_once 'views/menu.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/add-offerButton.php';
      require_once 'views/footer.php'; 
?>
