<?php

    class Car
    {
        public $carName;
        public $carType;

        public function setCarName($carName)
        {
            $this->carname=$carName;
        }
        public function setCarType($carType)
        {
            $this->cartype=$carType;
        }
        public function getCarName()
        {
            return $this->carname;
        }
        public function getCarType()
        {
            return $this->cartype;
        }
    }
    
    $carob= new Car();
    $carob->setCarName('verna');
    $carob->setCarType('sedan');
    echo 'Fruit_Name : '.$carob->getCarName().'<br>';
    echo 'Fruit Type : '.$carob->getCarType();


?>