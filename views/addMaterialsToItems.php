<?php require_once 'header.php' ?>
 <h1>Lisukkeiden lisäys</h1>
 <p>Jokaiseen pizza tuotteeseen voi halutessaan lisätä korkeintaan 4 lisuketta.</p>
 <p>Jokaisen lisätyn lisukkeen hinta lasketaan tuotteen lopulliseen hintaan.</p>
 <p>Tuote</p></br>
 <select>
  <?php getDropList(getCartItemsByUid($uid)); ?>
 </select>
 <p>Lisuke 1:</p></br>
 <select>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 2:</p></br>
 <select>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 3:</p></br>
 <select>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select>
 <p>Lisuke 4:</p></br>
 <select>
  <option />
  <?php getDropList(getMaterials()); ?>
 </select></br></br>
 <form method='post' action='check-mats.php' id='matsform'>
  <input type='submit' value='Lisää lisukkeet' />
 </form>
<?php require_once 'footer.php' ?>
