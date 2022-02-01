<?php
function printarray($arr)
{
    foreach($arr as $value)
    {
        echo $value;
    }
}

$arr = array ("Hello", "to", "geeks", "for", "GEEks");

// standard sort
$standard_result=$arr;
sort($standard_result);
echo "Array after standard sorting\n";
printarray($standard_result);

// natural sort
$natural_result=$arr;
sort($natural_result);
echo "Array after natural sorting\n";
printarray($natural_result);


?>