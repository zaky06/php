<?php

class Unit {
  protected $health;
  protected $agility;
  private $max_health;

  public function __construct(int $health, int $agility)
  {
    if ($health <= 0 || $agility <= 0) {
      throw new InvalidArgumentException('ошибка unit');
    }
    $this->health = $health;
    $this->max_health = $health;
    $this->agility = $agility;
  }

  // возвращает true, если здоровье > 0 и false, если здоровье < 0
  public function is_alive(){
    return $this->health > 0;
  }

  // ументшает здоровье юнита на $points, но не меньше 0
  public function minus_health(int $points) {
    if ($this->is_allive()) {
      $this->health -= $points;
      if(!$this->is_alive()) $this->health = 0;
    }
  }
/*
  public function minus_health1(int $points) {
    if ($this->is_allive()) {
      $this->health -= $points;
      if(!$this->is_alive()) $this->health = 0;
      return 'атака невозможна';
    } else {
      return 'атака невозможна';
    }
  }
*/
    // увеличивает здоровье юнита на $points, но не больше изначального
    public function plus_health(int $points) {
      if ($this->is_allive()) {
        $this->health += $points;
        if($this->health > $this->max_health) $this->health = $this->max_health;
      }
    }
}

$pers = new Unit(20, 10);
$pers->minus_health(30);
var_dump($pers->is_alive());
