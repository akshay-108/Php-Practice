<?php
// How to insert an item at the beginning of an array in PHP ?

// insert in ending
$arr1=array(2,3,4,5,6);

$arr2=array(1);
$arrending=array_merge($arr1,$arr2);

print_r($arrending);

// insert in beginning
$one=1;
array_unshift($arr1,$one);
print_r($arr1);

?>