<?php

function stand_deviation($array)
{
    $num_of_elements = count($array);
    $variance = 0.0;
    $average = array_sum($array)/$num_of_elements;

    foreach ($array as $value) {
        $variance += pow(($value - $average), 2);
    }
    return (float)sqrt($variance/$num_of_elements);
}

// input array
$array = array(1,2,3,4,5,6);
print_r(stand_deviation($array));


?>