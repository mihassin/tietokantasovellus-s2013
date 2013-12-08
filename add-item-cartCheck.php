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

$str = pg_escape_string($yhteys, $_POST['productlist']);
$query = pg_query($yhteys, "SELECT price FROM products WHERE id='{$str}';");
$tot_price = $amount * pg_fetch_result($query, 0, 0);

$uid = $_SESSION['userId']; // user id

$kysely = "INSERT INTO cart_map VALUES (DEFAULT, {$uid}, {$str}, {$amount}, FALSE, '',{$tot_price});"; 

pg_query($kysely);
header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
pg_close($yhteys);
exit();
?>
