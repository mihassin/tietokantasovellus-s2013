<?php require_once 'header.php' ?>
 <h1>Tilaus</h1>
 <form>
  <label>Osoite</label></br>
  <input type='text' name='address' /></br>
  <label>Toimitus aika</label></br>
  <input type='text' name='deliver' /></br>
  Tilauksen yhteishinta on <?php echo $tot_price . "</br>"; ?>
  <input type='submit' value='Lähetä tilaus' />
 </form>
<?php require_once 'footer.php' ?>
