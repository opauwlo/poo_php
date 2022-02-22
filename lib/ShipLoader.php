<?php
class ShipLoader {
  public function getShips() {
    $shipsData = $this->queryForShips();

    foreach ($shipsData as $shipData) {
      $ship = new Ship($shipData['name']);
      $ship->setWeaponPower($shipData['weapon_power']);
      $ship->setJediFactor($shipData['jedi_factor']);
      $ship->setStrength($shipData['strength']);

      $ships[] = $ship;
    }
    
    return $ships;
  }
  private function queryForShips() {
    $pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('SELECT * FROM ship');
    $statement->execute();
    $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $shipsArray;
  }

}