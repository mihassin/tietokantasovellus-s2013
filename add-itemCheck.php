<?php
if(!is_numeric($_POST['price'])) {
 header('Location: http://mihassin.users.cs.helsinki.fi/add-offer.php');
}
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();

$str = pg_escape_string($yhteys, $_POST['product-type-list']);
$query = pg_query($yhteys, "SELECT id FROM product_types WHERE description='{$str}';");
$type = pg_fetch_result($query, 0, 0);

$name = pg_escape_string($yhteys, $_POST['name']);
$description = pg_escape_string($yhteys, $_POST['description']);
$price = pg_escape_string($yhteys, $_POST['price']); 

$kysely = "INSERT INTO products values (DEFAULT, {$type}, '{$name}','{$description}', {$price});";

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/');
?>
