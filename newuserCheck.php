<?php
session_start();

if(isset($_SESSION['userId'])) {
        header('Location: http://mihassin.users.cs.helsinki.fi');
}

require_once 'libs/db_connect.php';
$yhteys = getConnection();

$newUserOkay = FALSE;

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
 echo $kysely;

 $lisaa = pg_query($yhteys, $kysely);

 $kysely = "UPDATE users SET pw_hash=md5('{$pw}' || users.pw_salt) WHERE id={$id};";
 echo $kysely;

 $lisaa = pg_query($yhteys, $kysely);
echo '<h1>Tunnus lisätty!</h1>
<li><a href="index.php">Palaa etusivulle</a></li>';
}

require_once 'views/footer.php';
pg_free_result($lisaa);
pg_close($yhteys);?>
