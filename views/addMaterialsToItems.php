<?php require_once 'header.php' ?>
 <h1>Lisukkeiden lisäys</h1>
 <p>Jokaiseen pizza tuotteeseen voi halutessaan lisätä korkeintaan 4 lisuketta.</p>
 <p>Jokaisen lisätyn lisukkeen hinta lasketaan tuotteen lopulliseen hintaan.</p>
 <p>Tuote</p></br>
 <select name='productlist' form='matsform' >
  <?php getDropList(getCartItemsByUid($uid)); ?>
 </select>
 <p>Lisuke 1:</p></br>
 <select name='mat1' form='matsform'>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 2:</p></br>
 <select name='mat2' form='matsform'>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 3:</p></br>
 <select name='mat3' form='matsform'>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 4:</p></br>
 <select name='mat4' form='matsform'>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select></br></br>
 <form method='post' action='check-mats.php' id='matsform'>
  <input type='submit' value='Lisää lisukkeet' />
  <input type='submit' value='Palaa ostoskoriin' formaction='cart.php' />
 </form>
<?php require_once 'footer.php' ?>
