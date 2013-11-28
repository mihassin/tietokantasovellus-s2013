<?php
require_once 'libs/checkAccess.php';
require_once 'libs/dropList.php';
$kysely = "SELECT name FROM products WHERE product_type_id='1'";
require_once 'views/add-offer.php'; ?>
