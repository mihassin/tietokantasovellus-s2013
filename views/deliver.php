<?php require_once 'header.php'; ?>
<h1>Toimitus</h1>
<label>Valitse tilauskoodi</label></br>
<select name='id' form='deliform'>
 <?php getDropList($kysely); ?>
</select>
<form method='post' action='deliver-check.php' id='deliform'>
 <label>Toimitusaika *</label></br>
 <input type='text' name='time' value='12:00:00' /></br>
 <label>Alennettu hinta</label></br>
 <input type='text' name='price' /></br></br>
 <input type='submit' value='Merkitse toimitetuksi' />
</form>
<?php require_once 'footer.php'; ?>
