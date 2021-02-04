<?php
require_once 'Unit.php';
class BattleUnit extends Unit {
  protected $attack;
  public function __construct($health, $agility, $attack)
  {
    // вызов конструктора родителя
    parent::__construct($health, $agility);
    if ($attack <= 0) {
      throw new InvalidArgumentException('ошибка атаки');
    }
    $this->attack = $attack;
  }
}

$bu = new BattleUnit(10, 20, 14);

var_dump($bu);
/*
  BattleUnit
  attack: null
  health:
  max_health:
  agility:
  is_alive()
  minus_health()
  plus_health()


*/
