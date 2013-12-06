<?php 
function checkData($data) {
 trim($data);
 stripslashes($data);
 htmlspecialchars($data);
 return $data;
}
?>
