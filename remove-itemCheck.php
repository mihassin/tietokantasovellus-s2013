<?php
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$name = pg_escape_string(getConnection(), $_POST['productlist']);
$pid = $_SESSION['pid'];
$sql = "DELETE FROM products WHERE product_type_id='{$pid}' AND name='{$name}';";
pg_query(getConnection(), $sql);
header('Location: http://mihassin.users.cs.helsinki.fi/');?>
