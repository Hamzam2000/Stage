<?php

interface Feline
{
    public function chase();
}

class Lion extends Animal implements Mammal, Feline
{
    private $gender = self::GENDER_MALE;

    public function chase()
    {
        return 'I am chasing a Gazelle!';
    }
}

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

}

$client = new Client; ?>
