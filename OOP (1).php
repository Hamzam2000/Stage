<?php interface Canine
{
    public function bark();
    public function howl();
}

interface Feline
{
    public function chase();
}

interface Mammal
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    public function isMale();
    public function isFemale();
}

abstract class Animal
{
    public function breath()
    {
        return 'I breath oxygen found in the air using my nose.';
    }
}

class Dog extends Animal implements Canine, Mammal
{
    private $name;
    private $gender;

    public function __construct($name, $gender)
    {
        $this->setName($name);
        $this->setGender($gender);
    }

    private function setName($name)
    {
        $this->name = (string) $name;
    }

    private function setGender($gender)
    {
        if ($gender === self::GENDER_MALE || $gender === self::GENDER_FEMALE) {
            $this->gender = $gender;
        } else {
            throw new InvalidArgumentException('Mammals can only be male or female');
        }
    }

    public function getGender()
    {
        return $this->gender();
    }

    public function eat()
    {
        return 'I eat meat.';
    }

    public function bark()
    {
        return 'Woof, woof!';
    }

    public function howl()
    {
        return 'AHROOOOOOO WOO WOOO!';
    }

    public function isMale()
    {
        return $this->gender === self::GENDER_MALE;
    }

    public function isFemale()
    {
        return $this->gender === self::GENDER_FEMALE;
    }
}

class Lion extends Animal implements Mammal, Feline
{
    private $gender = self::GENDER_MALE;

    public function chase()
    {
        return 'I am chasing a Gazelle!';
    }

    public function isMale()
    {
        return $this->gender === self::GENDER_MALE;
    }

    public function isFemale()
    {
        return $this->gender === self::GENDER_FEMALE;
    }

    public function eat()
    {
        return 'I am now eating the gazelle I just caught.';
    }
}

class Fish extends Animal
{
    final public function breath()
    {
        return 'I breath oxygen found in the water using my gills.';
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
