<?php 
require_once 'libs/checkAccess.php'
require_once 'libs/db_connect.php';
$yhteys = getConnection();
$name = pg_escape_string($yhteys, $_POST['productlist']);
$price = pg_escape_string($yhteys, $_POST['price']);
echo $name . "</br>" . $price;
$kysely = "UPDATE products SET price='{$price}' WHERE name='{$name}';";
echo $kysely;
pg_query($kysely);
?>
