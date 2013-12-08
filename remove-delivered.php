<?php 
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();
$sql = "DELETE FROM orders WHERE delivered=TRUE;";

pg_query($yhteys, $sql);

pg_close($yhteys);
header("Location: http://mihassin.users.cs.helsinki.fi/orders.php");
exit();
?>
