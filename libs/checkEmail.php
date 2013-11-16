<?php
require_once 'db_connection.php';
function emailExists($email) {
	$yhteys = getConnection();
	$claimMail = pg_escape_string($yhteys, $email);
	$kysely = "SELECT id FROM users WHERE email='{$claimMail}'";
	$res = pg_query($yhteys, $query);

	if(pg_num_rows($res) > 0) return TRUE;
	else return FALSE;
}
?>
