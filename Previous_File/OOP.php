<?php
    class CAR
    {
        private $name ;
        private $price ;

        public function setName($name){
            $this->name = $name;
            
        }

        public function setPrice($price){
            $this->price = $price;
        }


        public function howMuch(){
            echo "$this->name is $this->price.";
        }

    };

    $car = new CAR();
    $car->setName("BMW");
    $car->setPrice("12000$");
    $car->howMuch();
?>