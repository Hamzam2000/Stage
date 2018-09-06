<?php

interface Mammal
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    public function isMale();
    public function isFemale();
}
