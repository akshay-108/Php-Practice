<?php

// How to check a key exists in an array in PHP ?

$a=array(
    'Name'=>"Akshay",
    'Age'=>25
);

if(array_key_exists('Name',$a))
{
    echo "Found";
}
else{
    echo "not found";
}






?>