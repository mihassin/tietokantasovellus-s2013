<?php require_once 'header.php' ?>
<h1>Lisää tarjous</h1>
 <label>Valitse tuote</label></br>
 <select name="productlist" form="offerform">
  <?php getDropList($kysely); ?>
 </select>
 <form method="post" action="add-offerCheck.php" id="offerform">
  </br>
  <label>Tarjous hinta</label></br>
  <input type="text" name="price" /></br>
  <input type="submit" value="Lisää tarjous" />
 </form>
<?php require_once 'footer.php' ?>
