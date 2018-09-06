<?php

include "Dog.php";
include "Fish.php";

class Client
{
    public function __construct()
    {
        $dog = new Dog('Sparky', Mammal::GENDER_MALE);
        $cat = new Lion;
        $fish = new Fish;

        $this->setupFeline($cat);
        $this->setupCanine($dog);

        $this->setupAnimal($cat);
        $this->setupAnimal($dog);
        $this->setupAnimal($fish);
    }

    public function setupFeline(Feline $cat)
    {
        echo 'Feline: ' . $this->iAmA($cat), ' and ',$cat->chase(), ' ', $cat->eat() . '<br>';
    }

    public function setupCanine(Canine $dog)
    {
        echo 'Canine: ' . $this->iAmA($dog), ' ', $dog->howl() . '<br>';
    }

    public function setupAnimal(Animal $animal)
    {
        echo $this->iAmA($animal) . ' and ' . $animal->breath() . '<br>';
    }

    private function iAmA(Animal $animal)
    {
        return 'I am a ' . get_class($animal);
    }
}

$client = new Client; ?>
