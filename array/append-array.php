<?php
// Given two array arr1 and arr2 and the task is to append one array to another

$arr1=array(1,2,3);
$arr2=array(4,5,6);

// get the merged array in the first array
$arr1=array_merge($arr1,$arr2);

foreach($arr1 as $arr)
{
    echo $arr." ";
}


echo "\n\n";

$arr3=array("Akshay");
$arr4=array("Pawar");

// get the merged array in the first array
$arr3=array_merge($arr3,$arr4);

foreach($arr3 as $a)
{
    echo $a." ";
}
echo "\n\n";
?>