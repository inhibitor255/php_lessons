<?php

// class Animal 
// {
//     public $name;
//     public $color;

//     public function __construct($animalName, $animalColor)
//     {
//         $this->name = $animalName;
//         $this->color = $animalColor;
//     }

//     public function shape(){
//         echo "$this->name is $this->color.";
//     }


// };

// class Dog extends Animal
// {
//     public function bark(){
//         echo "$this->name is barking.";
//     }
// };

// $cat = new Animal('Shwe War', 'Yellow');
// $cat->shape();

// $dog = new Dog("Aung Nat", "Black");
// $dog->shape();
// $dog->bark();
// echo $dog->name;

abstract class Animal
{

    public function __construct(protected $name)
    {
    }
    
    public abstract function run();
    
};

class Dog extends Animal
{


    public function __construct($name, private $color)
    {
        parent::__construct($name);
    }
    public function run()
    {
        
    }
    
    public function profile()
    {
        echo "$this->name has $this->color color.";
    }
}

$dog = new Dog(color: "Brown", name: "Spy");
$dog->profile();
