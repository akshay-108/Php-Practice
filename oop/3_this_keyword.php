<?php

class car
{
    public $carName;
    public $carColor;

    public function hello()
    {
        return "Beep car name is " .$this->carName . " and my color is ".$this->carColor;
    }
};

$car1=new car();
$car1->carName="BMW";
$car1->carColor="Black";
echo $car1->hello();

?>