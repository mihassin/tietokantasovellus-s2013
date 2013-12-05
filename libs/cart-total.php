<?php
require_once 'db_connect.php';
require_once 'listqueries.php';

function getTotal($uid) {
 $total = 0;
 $kysely = getCartByUid($uid);
 $res = pg_query(getConnection(), $kysely);
 $rows = pg_num_rows($res);

 for($i = 0; $i<$rows; $i++) {
  $tmp = $res[$i];
  $total = $total + $tmp['price'];
 }
 return $total;
}
?>
