<?php session_start();

if(!is_numeric($_POST['amount'])) {
 header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
}

require_once 'libs/db_connect.php';
$yhteys = getConnection();

$str = pg_escape_string($yhteys, $_POST['drinklist']);
$query = pg_query($yhteys, "SELECT id FROM products WHERE name='{$str}';");
$pid = pg_fetch_result($query, 0, 0); //product id

$uid = $_SESSION['userId']; // user id

$amount = pg_escape_string($yhteys, $_POST['amount']); // määrä

$kysely = "INSERT INTO cart_map VALUES (DEFAULT, {$uid}, {$pid}, {$amount}, FALSE);"; 

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
?>
