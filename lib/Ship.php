<?php
class Ship
{
  private $name;
  private $weapon_power = 0;
  private $jedi_factor = 0;
  private $strength = 0;
  private $under_repair;

  public function __construct()
  {
    $this->under_repair = mt_rand(1, 100) <= 30;
  }

  public function is_functional()
  {
    return !$this->under_repair;
  }

  public function get_name_and_specs($short_format = false)
  {
    if ($short_format) {
      return sprintf(
        "\n%s: %d/%d/%d\n",
        $this->name,
        $this->weapon_power,
        $this->jedi_factor,
        $this->strength
      );
    } else {
      return sprintf(
        "%s: w:%d, jf:%d, s:%d",
        $this->name,
        $this->weapon_power,
        $this->jedi_factor,
        $this->strength
      );
    }
  }
  public function does_given_ship_beat_this_one($given_ship)
  {
    return $given_ship->strength > $this->strength;
  }
  public function getName()
  {
    return $this->name;
  }

  public function setStrength($number)
  {
    if (!is_numeric($number)) {
      throw new \Exception('Strength must be a number, duh!');
    }

    $this->strength = $number;
  }

  public function getStrength()
  {
    return $this->strength;
  }
  /**
   * @return int
   */
  public function getWeaponPower()
  {
    return $this->weaponPower;
  }

  /**
   * @return int
   */
  public function getJediFactor()
  {
    return $this->jediFactor;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param int $weaponPower
   */
  public function setWeaponPower($weaponPower)
  {
    $this->weaponPower = $weaponPower;
  }

  /**
   * @param int $jediFactor
   */
  public function setJediFactor($jediFactor)
  {
    $this->jediFactor = $jediFactor;
  }
}
