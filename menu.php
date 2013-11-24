<?php require_once 'libs/listqueries.php';
      $kysely = getMenu();
      require_once 'views/header.php';
      require_once 'views/menu.php'; 
      require_once 'libs/listing.php'; 
      getList($kysely); ?>
<form action='add-offer.php'>
 <input type="submit" value="Lisää tarjous" />
</form>
<?php      
      require_once 'views/footer.php'; 
?>
