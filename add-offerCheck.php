<?php 
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();

$price = pg_escape_string($yhteys, $_POST['price']);
$price = str_replace(",", ".", $price);

if(($price <= 0) || (!is_numeric($price)) ) {
 header('Location: http://mihassin.users.cs.helsinki.fi/add-offer.php');
 exit(); 
}

$name = pg_escape_string($yhteys, $_POST['productlist']);

if($_SESSION['pid'] == 3) 
 $kysely = "UPDATE materials SET price='{$price}' WHERE id='{$name}';";
else
 $kysely = "UPDATE products SET price='{$price}' WHERE id='{$name}';";

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/');
pg_close($yhteys);
exit();
?>
