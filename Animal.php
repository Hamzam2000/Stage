<?php

include "Mammal.php";
include "Feline.php";

abstract class Animal
{
    public function breath()
    {
        return 'I breath oxygen found in the air using my nose.';
    }
}
 ?>
