<?php
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$name = pg_escape_string(getConnection(), $_POST['productlist']);
$sql = "DELETE FROM products WHERE product_type_id='1' AND name='{$name}';";
pg_query(getConnection(), $sql);?>
