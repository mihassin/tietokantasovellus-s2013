<?php session_start();
require_once 'libs/db_connect.php';
require_once 'libs/cart-total.php';
require_once 'libs/check-data.php';
$yhteys = getConnection();

$uid = $_SESSION['userId'];

$addr = pg_escape_string($yhteys, $_POST['address']);

if(empty($addr) || (strlen($addr) < 6)) {
	pg_close($yhteys);
	header('Location: http://mihassin.users.cs.helsinki.fi/order.php');
	exit();
}

$addr = checkData($addr);
$time = date("Y-m-d H:i:s");

$tot_price = getTotal($_SESSION['userId']);

$kysely = "INSERT INTO orders VALUES (DEFAULT, {$uid}, '{$addr}','{$time}', FALSE ,{$tot_price});";
pg_query($yhteys, $kysely);

$kysely = "UPDATE cart_map SET ordered=TRUE WHERE user_id={$uid} AND ordered=FALSE;";
pg_query($yhteys, $kysely);
pg_close($yhteys);
header('Location: http://mihassin.users.cs.helsinki.fi/');
exit();
?>
