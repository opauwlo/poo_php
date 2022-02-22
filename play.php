<?php
require __DIR__ . '/bootstrap.php';

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
print_ship_summary($myShip);
print_ship_summary($yourShip);
battle_ship($myShip, $yourShip);
