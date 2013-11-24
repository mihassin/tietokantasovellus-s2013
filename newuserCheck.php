<?php
session_start();

if(isset($_SESSION['userId'])) {
        header('Location: http://mihassin.users.cs.helsinki.fi');
}

require_once 'libs/db_connect.php';
$yhteys = getConnection();

$newUserOkay = TRUE;
$firstOkay = TRUE;
$secondOkay = TRUE;
$emailOkay = TRUE;
$phoneOkay = TRUE;
$pwOkay = TRUE;

if((strlen($_POST['email']) < 5)) {
 $newUserOkay = FALSE;
 $emailOkay = FALSE; 
}

else {
 $escapedEmail = pg_escape_string($yhteys, $_POST['email']);
 $query = "SELECT id FROM users where email='{$escapedEmail}'";
 $result = pg_query($yhteys, $query);
        if(pg_num_rows($result) > 0) {
            $newUserOkay = FALSE;
            $emailOkay = FALSE;
        }
}

if(strlen($_POST['phone']) < 3) {
 $newUserOkay = FALSE;
 $phoneOkay = FALSE; 
}

if(strlen($_POST['first']) < 2) {
 $newUserOkay = FALSE;
 $firstOkay = FALSE; 
}

if(strlen($_POST['second']) < 2) {
 $newUserOkay = FALSE;
 $secondOkay = FALSE; 
}

if(strlen($_POST['password']) < 6) {
 $newUserOkay = FALSE;
 $pwOkay = FALSE; 
}

require_once 'views/header.php';

if(!$newUserOkay) {
 require_once 'views/newuserAgain.php';
}

else {
 $id = 1 + pg_num_rows(pg_query($yhteys, "SELECT id FROM users"));
 $first = pg_escape_string($_POST['first']);
 $second = pg_escape_string($_POST['second']);
 $email = pg_escape_string($_POST['email']);
 $phone = pg_escape_string($_POST['phone']);
 $pw = pg_escape_string($_POST['password']);

 $kysely = "INSERT INTO users VALUES ({$id}, 1, '{$first}', '{$second}', '{$email}', '{$phone}', md5('{$pw}'), substring(md5(random()::TEXT) from 1 for 8));";
 $lisaa = pg_query($yhteys, $kysely);

 $kysely = "UPDATE users SET pw_hash=md5('{$pw}' || users.pw_salt) WHERE id={$id};";
 $lisaa = pg_query($yhteys, $kysely);

echo '<h1>Tunnus lisätty!</h1>
<li><a href="index.php">Palaa etusivulle</a></li>';
}

require_once 'views/footer.php';
pg_free_result($lisaa);
pg_close($yhteys);?>
