<?php
if(!is_numeric($_POST['price'])) {
 header('Location: http://mihassin.users.cs.helsinki.fi/add-offer.php');
}
 
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();
$name = pg_escape_string($yhteys, $_POST['productlist']);
$price = pg_escape_string($yhteys, $_POST['price']);

if($_SESSION['pid'] == 3) 
 $kysely = "UPDATE materials SET price='{$price}' WHERE description='{$name}';";
else
 $kysely = "UPDATE products SET price='{$price}' WHERE name='{$name}';";

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/');
?>
