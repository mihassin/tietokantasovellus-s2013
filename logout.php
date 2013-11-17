<?php
session_start();
unset($_SESSION['userId']);
unset($_SESSION['userRole']);
header('Location: http://mihassin.users.cs.helsinki.fi');
exit;
?>
