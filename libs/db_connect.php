<?php
function connect2db() {
$connection = pg_connect("dbname=mihassin user=mihassin")
or die('Yhteys epäonnistui: ' . pg_last_error());
return $connection;
}
