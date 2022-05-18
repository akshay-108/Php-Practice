<?php
// multidimensional associative array

$info=array();

$info['A']=array(
    'Name'=>'Akshay',
    'Lastname'=>'Pawar',
    'DOB'=>'15/12/1996',
    'HomeTown'=>'Ratnagiri',
    'Address'=>array(
        'City'=>'Mumbai',
        'Location'=>'Malad',
        'Area'=>'SBI Quarters'
    )
);

$info['S']=array(
    'Name'=>'Suraj',
    'Lastname'=>'Pawar',
    'DOB'=>'13/05/2003',
    'HomeTown'=>'Ratnagiri',
    'Address'=>array(
        'City'=>'Mumbai',
        'Location'=>'Malad',
        'Area'=>'SBI Quarters'
    )
);

// all array print
// var_dump($info);
// print_r($info);

// particualr print
// print_r($info['A']['Address']);
// echo $info['A']['HomeTown'];

// print using loop
foreach($info as $key => $value)
{
    echo $key . "\n";

    foreach ($value as $sub_key => $sub_value) {
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if(is_array($sub_value))
        {
            echo $sub_key . " : \n";
            foreach ($sub_value as $k => $v) {
                echo "\t". $k . "=" . $v . "\n";
            }
        }else{
            echo $sub_key . " = " . $sub_value . "\n";
        }
    }
}

?>