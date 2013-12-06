<?php session_start();
require_once 'libs/db_connect.php';
$uid = $_SESSION['userId'];
$yhteys = getConnection();
$kysely = "DELETE FROM cart_map WHERE user_id={$uid} AND ordered=FALSE;";
pg_query($yhteys, $kysely);
pg_close($yhteys);
header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
exit();
?>
