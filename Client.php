<?php class Client
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
