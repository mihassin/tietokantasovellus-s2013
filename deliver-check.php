<?php 
require_once 'libs/checkAccess.php';
require_once 'libs/db_connect.php';
$yhteys = getConnection();

$id = pg_escape_string($yhteys, $_POST['id']);
$t = pg_escape_string($yhteys, $_POST['time']);
$price = pg_escape_string($yhteys, $_POST['price']);

$time = date("Y-m-d");
$time = $time . " " . $t;

$query = pg_query($yhteys, "SELECT order_time, total_price FROM orders WHERE id={$id};");
$prevprice = pg_fetch_result($query, 0 , 1);
$prevtime = pg_fetch_result($query, 0 , 0);

if(strtotime($time) < strtotime($prevtime)) {
 header('Location: http://mihassin.users.cs.helsinki.fi/deliver.php');
 exit();
}

if(!empty($price)) {
 if((!is_numeric($price)) || ($price <= 0) || ($price >= $prevprice)) {
  header('Location: http://mihassin.users.cs.helsinki.fi/deliver.php');
  exit();
 }
 else {
  $sql = "UPDATE orders SET deliver_time='{$time}', delivered=TRUE, total_price={$price} WHERE id={$id};";
 }
}

else
 $sql = "UPDATE orders SET deliver_time='{$time}', delivered=TRUE WHERE id={$id};";

pg_query($yhteys, $sql);
header('Location: http://mihassin.users.cs.helsinki.fi/orders.php');
pg_close($yhteys);
exit();
?>
