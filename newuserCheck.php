<?php
require_once 'libs/db_connect.php';
$registerOkay = TRUE;
$emailLegit = TRUE;
$phoneLegit = TRUE;
$pwLongEnuf = TRUE;

if( strlen($_POST['email'] < 5) ) {
	$registerOkay = FALSE;
	$emailLegit = FALSE;
}
$yhteys = getConnection();
else
{
	$claimMail = pg_escape_string($yhteys, $_POST['email']);
	$kysely = "SELECT id FROM users WHERE email='{$claimMail}'";
	$res = pg_query($yhteys, $query);

	if(pg_num_rows($res) > 0) {
		$registerOkay = FALSE;
		$emailLegit = FALSE;
	}
}

if( strlen($_POST['phone'] < 6) ) {
$registerOkay = FALSE;
$phoneLegit = FALSE;
}

require_once 'views/header.php';
if(!$registerOkay)
{
	if($emailLegit == FALSE) echo 'Antamasi sähköpostiosoite on jo käytössä!</br>';
	if($phoneLegit == FALSE) echo 'Tarkista puhelinnumerosi!</br>';
	if($pwLongEnuf == FALSE) echo 'Salasana liian lyhyt! (Pituus oltava vähintään 5 merkkiä)</br>';
	require_once 'views/newuserAgain.php';
}
else
{
$role = 1;
$first = $pg_escape_string($yhteys,$_POST['first']);
$second = $pg_escape_string($yhteys,$_POST['second']);
$email = $pg_escape_string($yhteys,$_POST['email']);
$phone = $pg_escape_string($yhteys,$_POST['phone']);
$pw = $pg_escape_string($yhteys,$_POST['password']);

$kysely = "INSERT INTO users VALUES ({$id}, {$role}, '{$first}', '{$second}', '{$email}', '{$phone}', md5('{$pw}'), substring(md5(random()::TEXT) from 1 for 8));";
$lisaa = pg_query($yhteys, $kysely);

$kysely = "UPDATE users SET pw_hash=md5('{$pw}' || users.pw_salt) WHERE email='{$email}'";
$lisaa = pg_query($yhteys, $kysely);

echo "Käyttäjätunnus luotu</br>Voit kirjautua sisään antamallasi sähköpostiosoitteella!";
}
require_once 'views/footer.php';?>

