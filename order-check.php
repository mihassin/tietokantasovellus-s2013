<?php session_start();
require_once 'libs/db_connect';
$yhteys = getConnection();

$uid = $_SESSION['userId'];

$addr = pg_escape_string($yhteys, $_POST['address']);
$time = pg_escape_string($yhteys, $_POST['deliver']);
$tot_price = pg_escape_string($yhteys, $_POST['price']);

$kysely = "INSERT INTO orders VALUES (DEFAULT, {$uid}, '{$addr}','{$time}',{$tot_price});";
echo $kysely;

pg_query($yhteys, $kysely);
pg_close($yhteys);
header('Location: http://mihassin.users.cs.helsinki.fi/');
exit();
?>
