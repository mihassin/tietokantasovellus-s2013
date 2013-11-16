<?php $kysely = "SELECT name, price FROM products WHERE product_type_id='1'"; 
      require_once 'views/header.php';
      require_once 'views/menu.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/footer.php'; 
?>
