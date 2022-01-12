<?php

class addnumbers
{
    public $num1;
    public $num2;

    function addtwono()
    {
        return ($this->num1 + $this->num2);
    }
}

$add = new addnumbers();
$add->num1=5;
$add->num2=10;

// print_r($add);
echo $add->addtwono();

?>