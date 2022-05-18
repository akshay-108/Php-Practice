<?php
// This example uses array_diff() function to delete the elements. Please note that the array values are passed as second parameter not the index. This function takes array parameter by value not reference and returns an array as output.

// create array
$array_diff=array('Name'=>'Akshay','Age'=>24,'Work'=>'Development');

// delete array index
$array_diff=array_diff($array_diff,[24]);

print_r($array_diff);

echo "\n";

// create array
$array_diff=array('Akshay',24,'Development');

print_r($array_diff);

// delete array index
$array_diff=array_diff($array_diff,[24]);

print_r($array_diff);




?>