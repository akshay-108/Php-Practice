<?php

// fetch product using usort method

function DescSort($arr1,$arr2)
{
    print_r($arr1);
    exit;
    // check if both values are equal
    if($arr1['marks'] == $arr2['marks']) return 0;

    // check if not equal
    return ($arr1['marks'] < $arr2['marks']) ? 1 : 0;
}
$arr=array(
    array("Name"=>"YASHIKA", "marks"=>22),
    array("Name"=>"ASHIKA", "marks"=>67),
    array("Name"=>"BASHIKA", "marks"=>87),
    array("Name"=>"YASHITA", "marks"=>24),
    array("Name"=>"AMAN", "marks"=>55),
    array("Name"=>"ANjali", "marks"=>98),
    array("Name"=>"YASHIKA", "marks"=>100),
);

usort($arr,'DescSort');
print_r('Modified Array');
print_r($arr);

?>