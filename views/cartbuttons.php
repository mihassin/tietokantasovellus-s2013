<?php 
function getButtons($empty, $addItem, $addDrink, $removeItem) {
  //tuote
 echo "</br><select name='productlist' form='additemform'>";
 require_once 'libs/dropList.php';
 getDropList($addItem);
 echo "</select>
 <form method='post' action='add-item-cartCheck.php' id='additemform'>
 </br>
 <input type='submit' value='Lisää tuote' />
 </form></br>";

 //juoma
 echo "<select name='drinklist' form='adddrinkform'>";
 getDropList($addDrink);
 echo "</select>
 <form method='post' action='add-drink-cartCheck.php' id='adddrinkform'>
 </br>
 <input type='submit' value='Lisää juoma' />
 </form></br>";
 
 if(!$empty) {
  echo "<select name='orderlist' form='removeform'>";
  getDropList($removeItem);
  echo "</select>
  <form method='post' action='remove-item-cartCheck.php' id='removeform'>
  </br>
  <input type='submit' value='Poista tuote' />
  </form>";
  echo "<form action='order.php'>
  <input type='submit' value='Tilaa' />
  </form>";
 }
}
?>
