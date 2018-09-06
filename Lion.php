<?php class Lion extends Animal implements Mammal, Feline
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
