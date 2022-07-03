<?php
// Merge two arrays keeping original keys in PHP

/** This can be achieved in two ways which are by using + operator and by using inbuilt functions. */

// using + operator

$a1=array(14,2,3);
$a2=array(4,5,6);

$merged=$a1 + $a2;
print_r($merged);


// Using inbuilt function array_replace() function.

$a3=array(1,2,3);
$a4=array(4,5,6);

$merged=array_replace($a3 + $a4);
print_r($merged);


?>