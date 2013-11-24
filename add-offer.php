<?php session_start();

if(!isset($_SESSION['userId']) || ($_SESSION['userRole'] == 1)) {
        header('Location: http://mihassin.users.cs.helsinki.fi');
} 

require_once 'libs/dropList.php';
require_once 'views/add-offer.php'; ?>
