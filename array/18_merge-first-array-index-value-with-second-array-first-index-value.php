<?php
$name=array('Akshay','Sushant');
$sirname=array('Pawar','Patil');

// print_r(array_merge($name,$sirname));

// second example

foreach ($name as $key => $value) {
    $val=$sirname[$key];
    $result[$key]=array($value,$val);
}

var_dump($result);

?>