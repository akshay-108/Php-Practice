<?php

class car
{
    public $tank;

    public function fill($fuel)
    {
        echo "1";
        $this->tank+=$fuel;
        return $this;
    }

    public function ride($miles)
    {
        echo "2";
        $gallons = $miles/50;
        $this->tank -= $gallons;
        return $this;
    }
}

$bmw = new car();

$tank=$bmw->fill(10)->ride(40)->tank;
print_r($tank);
echo "\n";
echo "The number of gallons left in the tank: " . $tank . " gal.";
echo "\n";

?>