<?php require_once 'header.php' ?>
<h1>Lisää tuote</h1>
 <label>Valitse tuotetyyppi</label></br>
 <select name="product-type-list" form="addform">
  <?php getDropList($kysely); ?>
 </select>
 <form method="post" action="add-itemCheck.php" id="addform">
  </br>
  <label>Tuotenimi</label></br>
  <input type="text" name="name" /></br>
  <label>Tuotekuvaus</label></br>
  <input type="text" name="description" /></br>
  <label>Hinta</label></br>
  <input type="text" name="price" /></br></br>
  <input type="submit" value="Lisää tuote" />
 </form>
<?php require_once 'footer.php' ?>
