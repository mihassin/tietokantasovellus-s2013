<?php session_start();
require_once 'libs/db_connect.php';
require_once 'libs/cart-total.php';
$yhteys = getConnection();

$uid = $_SESSION['userId'];

$addr = pg_escape_string($yhteys, $_POST['address']);
$time = pg_escape_string($yhteys, $_POST['deliver']);

$tot_price = getTotal($_SESSION['userId']);

$kysely = "INSERT INTO orders VALUES (DEFAULT, {$uid}, '{$addr}','{$time}',{$tot_price});";
pg_query($yhteys, $kysely);

$kysely = "UPDATE cart_map SET ordered=TRUE WHERE user_id={$uid} AND ordered=FALSE;";
pg_query($yhteys, $kysely);
pg_close($yhteys);
header('Location: http://mihassin.users.cs.helsinki.fi/');
exit();
?>