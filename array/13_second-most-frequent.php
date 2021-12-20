<?php
// PHP | Second most frequent element in an array

$arr=array(1,1,1,2,2,3,3,4,4,4,4,4,9,9,9,9,9,9);

$array_freq=array_count_values($arr);

echo "\n";

arsort($array_freq);

echo "\n";

$new_arr=array_keys($array_freq);

echo $new_arr[1];


?>