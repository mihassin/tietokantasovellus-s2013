<?php
class UserData{

  private $id;
  private $role_type_id;
  private $first;
  private $second;
  private $email;
  private $phone;

  public static function getUserData() {
    $sql = "SELECT first, second, email, phone FROM users";
    $kysely = getDB()->prepare($sql); $kysely->execute();

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
