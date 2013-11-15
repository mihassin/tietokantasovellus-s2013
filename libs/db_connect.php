<?php
function getConnection() {
require_once 'secret.php';
$constr = getNfo();
$connection = pg_connect($constr)
or die('Yhteys epäonnistui: ' . pg_last_error());
return $connection;
}
?>
