<?php
// This example uses array_splice() function to delete element from array.


// delaring associative array
$array_splice=array('Myname'=>'Akshay','GirlName'=>'Harashada','FriendName'=>'Sandesh');

// deleting array GirlName
array_splice($array_splice,1,1);

echo "\n";
print_r($array_splice);

// delaring associative array
$array_splice=array('Akshay','Harashada','Sandesh');

// deleting array GirlName
unset($array_splice[1]);

echo "\n";
print_r($array_splice);

?>