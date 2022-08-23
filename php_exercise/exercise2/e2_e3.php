<?php
class Car {
  public $carName;
  public $carType;

  function __construct($carName, $carType) {
    $this->carName = $carName; 
    $this->carType = $carType; 
  }
  function getcarName() {
    return $this->carName;
  }
  function getcarType() {
    return $this->carType;
  }
}

$carob = new car("verna", "sedan");
echo 'car Name = '.$carob->getcarName();
echo "<br>";
echo 'car Type = '.$carob->getcarType();

?>