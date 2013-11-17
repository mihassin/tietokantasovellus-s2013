<?php

$registerOkay = TRUE;
$emailLegit = TRUE;
$phoneLegit = TRUE;
$pwLongEnuf = TRUE;

require_once 'libs/checkEmail.php';

if(strlen($_POST['email'] < 5) {
	$registerOkay = FALSE;
	$emailLegit = FALSE;
}
 
else
{
	if(emailExists($_POST['email'])) {
		$registerOkay = FALSE;
		$emailLegit = FALSE;
	}
}

if(strlen($_POST['phone'] < 6) {
$registerOkay = FALSE;
$phoneLegit = FALSE;
}

if(strlen($_POST['password'] < 5) {
$registerOkay = FALSE;
$pwLongEnuf = FALSE;
}

require_once 'views/header.php';
if($registerOkay == FALSE)
{
	if($emailLegit == FALSE) echo 'Antamasi sähköpostiosoite on jo käytössä!</br>';
	if($phoneLegit == FALSE) echo 'Tarkista puhelinnumerosi!</br>';
	if($pwLongEnuf == FALSE) echo 'Salasana liian lyhyt! (Pituus oltava vähintään 5 merkkiä)</br>';
	require_once 'views/newuserAgain.php';
}
else
{
addAccount($_POST['first'],$_POST['second'],$_POST['email'],$_POST['phone'],$_POST['password']);
echo "Käyttäjätunnus luotu</br>Voit kirjautua sisään antamallasi sähköpostiosoitteella!";
}
require_once 'views/footer.php';?>

