<?php
require_once 'libs/checkAccess.php';
require_once 'libs/dropList.php';
$kysely = "SELECT id, description as name FROM product_types;";
require_once 'views/add-item.php'; ?>
