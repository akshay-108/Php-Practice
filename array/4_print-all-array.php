<?php
// How to print all the values of an array in PHP ?

/**Approach 1: Using foreach loop: The foreach loop is used to iterate the array elements. The foreach loop though iterates over an array of elements, the execution is simplified and finishes the loop. */

$array = array("Akshay", "Harshada","Sandesh", 23,3,8); 

// loop
foreach ($array as $data) {
    echo $data."\n";
}

/**Approach 2: Using count() function and for loop: The count() function is used to count the number of element in an array and for loop is used to iterate over the array. */

$items=count($array);

for ($i=0; $i < $items; $i++) 
{ 
    echo $array[$i]."\n";
}



?>