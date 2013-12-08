<?php 
function getDropList($kysely) {
 require_once 'db_connect.php';
 $yhteys = getConnection();
 $kysely = pg_query($yhteys, $kysely);
 $rows = pg_num_rows($kysely);

 $res = pg_fetch_all($kysely);
 
 for($i = 0; $i<$rows ; $i++) {
  $tmp = $res[$i];
  $id = tmp['id'];
  $name = $tmp['name'];
  $str = "<option value='{$id}'>{$name}</option>";
  echo $str;
 }
}?>
