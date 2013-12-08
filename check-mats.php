<?php session_start();
      require_once 'libs/db_connect.php';
      require_once 'libs/listqueries.php';
      $yhteys = getConnection();
      
      $id = pg_escape_string($yhteys, $_POST['productlist']);
      $mat1 = pg_escape_string($yhteys, $_POST['mat1']);
      $mat2 = pg_escape_string($yhteys, $_POST['mat2']);
      $mat3 = pg_escape_string($yhteys, $_POST['mat3']);
      $mat4 = pg_escape_string($yhteys, $_POST['mat4']);
      
      $query = pg_query($yhteys, getSingleCartRecordById($id));

      $amount = pg_fetch_result($query, 0, 0);
      $tot = pg_fetch_result($query, 0, 1);
      $mats = "";
      $none = TRUE;
      
      if(!empty($mat1)) {
        $none = FALSE;
        $query = pg_query($yhteys, getMatById($mat1));
        $tot = $tot + ($amount * pg_fetch_result($query, 0, 1));
        $mats = $mats . pg_fetch_result($query, 0 , 0);
      }

      if(!empty($mat2)) {
        $none = FALSE;
	$query = pg_query($yhteys, getMatById($mat2));
        $tot = $tot + ($amount * pg_fetch_result($query, 0, 1));
        $mats = $mats . " " .pg_fetch_result($query, 0 , 0);
      }

      if(!empty($mat3)) {
        $none = FALSE;
	$query = pg_query($yhteys, getMatById($mat3));
        $tot = $tot + ($amount * pg_fetch_result($query, 0, 1));
        $mats = $mats . " " .pg_fetch_result($query, 0 , 0);
      }

      if(!empty($mat4)) {
        $none = FALSE;
	$query = pg_query($yhteys, getMatById($mat4));
        $tot = $tot + ($amount * pg_fetch_result($query, 0, 1));
        $mats = $mats . " " .pg_fetch_result($query, 0 , 0);
      }

      if(!$none) {
       $sql = "UPDATE cart_map SET price={$tot}, added_mats='{$mats}' WHERE id={$id};";
       pg_query($yhteys, $sql);
      }

      pg_close($yhteys);
      header('Location: http://mihassin.users.cs.helsinki.fi/cart.php');
      exit();
?>
