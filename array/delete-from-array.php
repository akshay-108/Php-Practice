<?php
// How to delete an Element From an Array in PHP ?

// unset(): This function takes an element as a parameter and unset it. It wouldn’t change the keys of other elements.

// delaring associative array
$unset_array=array('Myname'=>'Akshay','GirlName'=>'Harashada','FriendName'=>'Sandesh');

// deleting array GirlName
unset($unset_array['GirlName']);

echo "\n";
print_r($unset_array);

// delaring associative array
$unset_array=array('Akshay','Harashada','Sandesh');

// deleting array GirlName
unset($unset_array[1]);

echo "\n";
print_r($unset_array);

?>