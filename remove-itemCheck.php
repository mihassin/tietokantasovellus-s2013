<?php
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();
$name = pg_escape_string($yhteys, $_POST['productlist']);
$pid = $_SESSION['pid'];

if($pid == 3)
 $sql = "DELETE FROM materials WHERE id='{$name}';";
else
 $sql = "DELETE FROM products WHERE product_type_id='{$pid}' AND id='{$name}';";

pg_query($yhteys, $sql);
header('Location: http://mihassin.users.cs.helsinki.fi/');
pg_close($yhteys);
exit();
?>
