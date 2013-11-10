<?php
  require_once "db_connection.php";
  require_once "userdata.php";

  $lista = UserData::getUserData();
?>
<!DOCTYPE html>
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

    </table>
  </body>
</html>
