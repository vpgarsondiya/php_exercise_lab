<?php

    class Fruit
    {
        public $fruitName;
        public $fruitType;

        public function setFruitname($fruitName)
        {
            $this->fruitName=$fruitName;
        }
        public function setFruitType($fruitType)
        {
            $this->fruitType=$fruitType;
        }
        public function getFruitName()
        {
            return $this->fruitName;
        }
        public function getFruitType()
        {
            return $this->fruitType;
        }
    }

    $fruit= new Fruit();
    $fruit->setFruitname('Apple');
    $fruit->setFruitType('Green');
    echo 'Fruit_Name : '.$fruit->getFruitName().'<br>';
    echo 'Fruit Type : '.$fruit->getFruitType();


?>