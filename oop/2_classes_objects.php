<?php

// create object properties and classes

class Car
{
    public $comp;
    public $color='red';
    public $hasSunRoof=true;

    public function hello()
    {
        return "beep";
    }
}

$bmw=new Car();
$Mercedez = new Car();

// get the values
echo $bmw->color;
echo "\n";
echo $Mercedez->color;

// set the value
echo $bmw->color='blue';
echo "\n";
echo $Mercedez->color='black';
echo "\n";

// get return function value
echo $bmw->hello();
echo "\n";
echo $Mercedez->hello();
echo "\n";



?>