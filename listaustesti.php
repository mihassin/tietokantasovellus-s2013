<?php
  require_once "db_connection.php";
  require_once "userdata.php";

  $lista = UserData::getUserData();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Listaustesti</title>
  </head>
  <body>
    <h1>Käyttäjät</h1>
    <table>
      <td>
        <th>Etunimi</th>
        <th>Sukunimi</th>
        <th>Sähköposti</th>
        <th>Puhelin numero</th>
      </td>
      <?php foreach($lista as $kayttaja): ?>
      <td>
        <tr>
          <?php echo $kayttaja->getEtu(); ?>
        </tr>
        <tr>
           <?php echo $kayttaja->getSuku(); ?>
        </tr>
        <tr>
           <?php echo $kayttaja->getEmail(); ?>
        </tr>
        <tr>
           <?php echo $kayttaja->getPhone(); ?>
        </tr>
      </td>
      <?php endforeach; ?>
    </table>
  </body>
</html>
