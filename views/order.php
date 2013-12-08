<?php require_once 'header.php' ?>
 <h1>Tilaus</h1>
 <form method='post' action='order-check.php'>
  <label>Osoite</label> *</br>
  <input type='text' name='address' /></br></br>
  Tilauksen yhteishinta on <?php echo $tot_price . " yksikköä.</br></br>"; ?>
  <input type='submit' value='Lähetä tilaus' />
 </form>
<?php require_once 'footer.php' ?>
