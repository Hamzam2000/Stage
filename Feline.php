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
