<?php

class addnumbers
{
    var $num1;
    var $num2;

    function addtwono()
    {
        return ($this->num1 + $this->num2);
    }
}

$add = new addnumbers();
$add->num1=5;
$add->num2=10;
echo $add->addtwono();


?>