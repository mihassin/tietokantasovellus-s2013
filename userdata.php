<?php

class UserData{

  private $first;
  private $second;
  private $email;
  private $phone;

  public static function annaYhteys() {
  static $yhteys = null; //Muuttuja, jonka sisältö säilyy annaYhteys-kutsujen välillä.

  if ($yhteys === null) {
    //Tämä koodi suoritetaan vain kerran, sillä seuraavilla
    //funktion suorituskerroilla $yhteys-muuttujassa on sisältöä.
    $yhteys = new PDO('pgsql:');
    $yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }

  return $yhteys;
}

  public static function getUserData() {
    $sql = "SELECT first, second, email, phone FROM users";
    $kysely = annaYhteys()->prepare($sql); $kysely->execute();

    $tulokset = array();
    foreach($kysely->fetchAll() as $tulos) {
      $kayttaja = new UserData();

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
