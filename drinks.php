<?php require_once 'libs/listqueries.php';
      $kysely = getDrinks(); 
      require_once 'views/header.php';
      require_once 'views/drinks.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/footer.php'; 
?>
