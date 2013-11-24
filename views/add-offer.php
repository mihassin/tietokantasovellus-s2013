<?php require_once 'header.php' ?>
<h1>Lisää tarjous</h1>
 <select name="productlist" form="offerform">
  <option value="a">a</option>
 </select>
 <form action="add-offerCheck.php" id="offerform">
  <label>Tarjous hinta</label>
  <input type="text" name="price" />
  <input type="submit" value="Lisää tarjous" />
 </form>
<?php require_once 'footer.php' ?>
