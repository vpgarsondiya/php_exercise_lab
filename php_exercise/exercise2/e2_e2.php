<?php
class Fruit {
  public $fruitName;
  public $fruitType;

  function __construct($fruitName, $fruitType) {
    $this->fruitName = $fruitName; 
    $this->fruitType = $fruitType; 
  }
  function getFruitName() {
    return $this->fruitName;
  }
  function getFruitType() {
    return $this->fruitType;
  }
}

$fruitob = new Fruit("Banana", "Yelloow");
echo 'Fruit Name = '.$fruitob->getFruitName();
echo "<br>";
echo 'Fruit Type = '.$fruitob->getFruitType();

?>