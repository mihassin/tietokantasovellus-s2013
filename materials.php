<?php require_once 'libs/listqueries.php';
      $kysely = getMaterials(); 
      require_once 'views/header.php';
      require_once 'views/materials.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/footer.php'; 
?>
