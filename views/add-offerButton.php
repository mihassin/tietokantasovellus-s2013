<?php
if(($_SESSION['userRole'] == 4) || ($_SESSION['userRole'] == 3) || ($_SESSION['userRole'] == 2)) {
echo "<form action='add-offer.php'>
 <input type='submit' value='Lisää tarjous' />
</form>"; 
} ?>
