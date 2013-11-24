<?php
if($_SESSION['userRole'] =< 4 && $_SESSION['userRole'] > 1) {
echo "<form action='add-offer.php'>
 <input type="submit" value="Lisää tarjous" />
</form>"; 
} ?>
