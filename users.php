<?php require_once 'libs/checkAccess.php';
      require_once 'libs/listqueries.php';
      $kysely = getUsers(); 
      require_once 'views/header.php';
      require_once 'views/users.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/footer.php'; 
?>
