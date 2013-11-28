<?php
echo "<select name='productlist' form='removeform'>";
  $kysely = "SELECT name FROM products WHERE product_type_id='1'";
  require_once 'libs/dropList.php';
  getDropList($kysely);
echo "</select>
<form method='post' action='remove-itemCheck.php' id='removeform'>
  </br>
 <input type='submit' value='Poista tuote' />
</form>
<form action='add-item.php'>
 <input type='submit' value='Lisää tuote' />
</form>";
echo "<form action='add-offer.php'>
 <input type='submit' value='Lisää tarjous' />
</form>"; ?>
