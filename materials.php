<?php require_once 'libs/listqueries.php';
      $kysely = getMaterials(); 
      require_once 'views/header.php';
      require_once 'views/materials.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      $kysely = "SELECT description as name FROM materials;";
      $_SESSION['pid'] = 3;
      if( ($_SESSION['userRole'] == 4) || ($_SESSION['userRole'] == 3) || ($_SESSION['userRole'] == 2) )
        require_once 'views/listbuttons.php';
      require_once 'views/footer.php'; 
?>
