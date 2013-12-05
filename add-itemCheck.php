<?php
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();

$price = pg_escape_string($yhteys, $_POST['price']);
$price = str_replace(",", ".", $price);

if((price <= 0) && (!is_numeric($price)) ) {
 header('Location: http://mihassin.users.cs.helsinki.fi/add-item.php');
 exit(); 
}

$str = pg_escape_string($yhteys, $_POST['product-type-list']);
$query = pg_query($yhteys, "SELECT id FROM product_types WHERE description='{$str}';");
$type = pg_fetch_result($query, 0, 0);

$name = pg_escape_string($yhteys, $_POST['name']); //lisukkeiden description ja tuotteiden name

$description = pg_escape_string($yhteys, $_POST['description']); //vain tuotteilla 

if($_SESSION['pid']==3) {
 $name = strtolower($name); //lisukkeet pienellä
 $kysely = "INSERT INTO materials values (DEFAULT, {$type}, '{$name}', {$price});";
}else {
 $name = ucfirst(strtolower($name));//tuotteet suurella
 $kysely = "INSERT INTO products values (DEFAULT, {$type}, '{$name}','{$description}', {$price});";
}

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/');
pg_close($yhteys);
exit();
?>
