<?php require_once 'libs/listqueries.php';
      $kysely = getMaterials(); 
      require_once 'views/header.php';
      require_once 'views/materials.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      $kysely = "SELECT name FROM products WHERE product_type_id='2';";
       require_once 'views/listbuttons.php';
      require_once 'views/footer.php'; 
?>
