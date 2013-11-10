<?php

function annaYhteys() {
  static $yhteys = null; //Muuttuja, jonka sisältö säilyy annaYhteys-kutsujen välillä.

  if ($yhteys === null) {
    $yhteys = new PDO('pgsql:');
    $yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }

  return $yhteys;
}

class Kayttaja {
  private $first;
  private $second;
  private $email;
  private $phone;

  public static function getKayttajat() {
    $sql = "SELECT first,second,email,phone from users";
    $kysely = annaYhteys()->prepare($sql); $kysely->execute();

    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $kayttaja = new Kayttaja();
      foreach($tulos as $kentta => $arvo) {
        $kayttaja->$kentta = $arvo;
      }
      $tulokset[] = $kayttaja;
    }
    return $tulokset;
  }

  public function getEtu() {
    return $this->first;
  }
  public function getSuku() {
    return $this->second;
  }
  public function getEmail() {
    return $this->email;
  }
  public function getPhone() {
    return $this->phone;
  }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Listaustesti</title>
  </head>
  <body>
    <h1>Käyttäjät</h1>
    <table border="1">
      <tr>
        <th>Etunimi</th>
        <th>Sukunimi</th>
        <th>Sähköposti</th>
        <th>Puhelin numero</th>
      </tr>
      <?php foreach($lista as $asia) { ?>
      <tr>
        <td><?php echo $asia->getEtu(); ?></td>
        <td><?php echo $asia->getSuku(); ?></td>
        <td><?php echo $asia->getEmail(); ?></td>
        <td><?php echo $asia->getPhone(); ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
