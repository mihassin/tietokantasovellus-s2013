<?php session_start();

if(!is_numeric($_POST['amount'])) {
 header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
 exit();
}

require_once 'libs/db_connect.php';
$yhteys = getConnection();

$amount = pg_escape_string($yhteys, $_POST['amount']); // määrä
if($amount <= 0) {
 header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
 exit();
}

$str = pg_escape_string($yhteys, $_POST['drinklist']);
$query = pg_query($yhteys, "SELECT id, price FROM products WHERE name='{$str}';");
$pid = pg_fetch_result($query, 0, 0); //product id
$tot_price = $amount * pg_fetch_result($query, 0, 1);

$uid = $_SESSION['userId']; // user id

$kysely = "INSERT INTO cart_map VALUES (DEFAULT, {$uid}, {$pid}, {$amount}, FALSE, '',{$tot_price});"; 

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
pg_close($yhteys);
exit();
?>
