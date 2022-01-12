<?php
$arr=array(1=>100,2=>202,3=>123456,4=>'Sandesh',5=>'Hello',6=>'Akshay');

var_dump($arr);

$val='Hello';
$key=array_search($val,$arr);
if($key)
{
    unset($arr[$key]);
}

var_dump($arr);
?>