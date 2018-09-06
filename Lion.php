<?php class Lion extends Animal implements Mammal, Feline
{
    private $gender = self::GENDER_MALE;

    public function isMale()
    {
        return $this->gender === self::GENDER_MALE;
    }

    public function isFemale()
    {
        return $this->gender === self::GENDER_FEMALE;
    }

}
 ?>
