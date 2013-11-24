<?php
require_once 'db_connect.php';

function emailExists($email) {
 $yhteys = getConnection();
 $escapedEmail = pg_escape_string($yhteys, $email);
 $query = "SELECT id FROM users where email='{$escapedEmail}'";
 $result = pg_query($yhteys, $query);
 return pg_num_rows($result);
}
?>
