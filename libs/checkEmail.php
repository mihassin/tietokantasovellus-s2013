<?php
require_once 'db_connect.php';
function emailExists($email) {
	$yhteys = getConnection();
	$claimMail = pg_escape_string($yhteys, $email);
	$kysely = "SELECT id FROM users WHERE email='{$claimMail}'";
	$res = pg_query($yhteys, $query);

	if(pg_num_rows($res) > 0) return TRUE;
	else return FALSE;
}

function addAccount($etu, $suku, $sposti, $puh, $sala) {
$yhteys = getConnection();

$id = pg_num_rows($yhteys, "SELECT id FROM users")+1;
$role = 1;
$first = $pg_escape_string($yhteys,$etu);
$second = $pg_escape_string($yhteys,$suku);
$email = $pg_escape_string($yhteys,$sposti);
$phone = $pg_escape_string($yhteys,$puh);
$pw = $pg_escape_string($yhteys,$sala);

$kysely = "INSERT INTO users VALUES ({$id}, {$role}, '{$first}', '{$second}', '{$email}', '{$phone}', md5('{$pw}'), substring(md5(random()::TEXT) from 1 for 8));";
$lisaa = pg_query($yhteys, $kysely);

$kysely = "UPDATE users SET pw_hash=md5('{$pw}' || users.pw_salt) WHERE email='{$email}'";
$lisaa = pg_query($yhteys, $kysely);
}
?>
