<?php
require_once 'libs/checkAccess.php';
require_once 'libs/dropList.php';
$pid = $_SESSION['pid'];
if($pid == 3)
 $kysely = "SELECT id, description as name FROM materials";
else
 $kysely = "SELECT id, name FROM products WHERE product_type_id='{$pid}'";

require_once 'views/add-offer.php'; ?>
