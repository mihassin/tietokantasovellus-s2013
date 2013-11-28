<?php
if(!is_numeric($_POST['price'])) {
 header('Location: http://mihassin.users.cs.helsinki.fi/add-offer.php');
}
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();

$str = pg_escape_string($yhteys, $_POST['product-type-list']);
$query = pg_query($yhteys, "SELECT id FROM product_types WHERE description='{$str}';");
$type = pg_fetch_result($query, 1, 0);
echo $type;

$id = 1 + pg_num_rows(pg_query($yhteys, "SELECT id FROM users"));
$name = pg_escape_string($yhteys, $_POST['name']);
$description = pg_escape_string($yhteys, $_POST['description']);
$price = pg_escape_string($yhteys, $_POST['price']); 

$kysely = "INSERT INTO products values ({$id}, {$type}, '{$name}','{$description}', {$price});";
echo $kysely;

pg_query($kysely);
?>
