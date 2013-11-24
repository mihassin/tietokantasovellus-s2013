<?php 
function getDropList() {
 require_once 'db_connect.php';
 $yhteys = getConnection();
 $kysely = "SELECT name FROM products WHERE product_type_id='1'";
 $kysely = pg_query($yhteys, $kysely);
 $rows = pg_num_rows($kysely);

 $res = pg_fetch_all($kysely);
 
 for($i = 0; $i<$rows ; $i++) {
  $tmp = $res[$i];
  $name = $tmp['name'];
  $str = "<option value='{$name}'>{$name}</option>";
  echo $str;
 }
}?>
