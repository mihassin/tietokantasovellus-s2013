<?php $kysely = "SELECT name, price FROM products WHERE product_type_id='2'"; 
      require_once 'views/header.php';
      require_once 'views/drinks.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely);
      require_once 'views/footer.php'; 
?>
