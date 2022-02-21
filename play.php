<?php
require __DIR__ . '/lib/Ship.php';
function print_ship_summary($ship)
{
  echo $ship->get_name_and_specs(true);
  echo '<hr>';
  echo $ship->get_name_and_specs(false);
  echo '<hr>';
}
function battle_ship($yourShip, $otherShip)
{
  if ($yourShip->does_given_ship_beat_this_one($otherShip)) {
    echo 'You Lose! ' . $otherShip->name . ' is stronger!';
  } else {
    echo '<hr>';
    echo 'You Win! ' . $yourShip->name . ' is stronger!';
  }
}
$myShip = new Ship();
$myShip->name = 'Enterprise';
$myShip->weapon_power = 8;
$myShip->jedi_factor = 4;
$myShip->strength = 1;

$yourShip = new Ship();
$yourShip->name = 'Defiant';
$yourShip->weapon_power = 10;
$yourShip->jedi_factor = 3;
$yourShip->strength = 2;

print_ship_summary($myShip);
print_ship_summary($yourShip);
battle_ship($myShip, $yourShip);
