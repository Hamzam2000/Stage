<?php interface Canine
{
    public function bark();
    public function howl();
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

    public function setupCanine(Canine $dog)
    {
        echo 'Canine: ' . $this->iAmA($dog), ' ', $dog->howl() . '<br>';
    }

}

$client = new Client; ?>
