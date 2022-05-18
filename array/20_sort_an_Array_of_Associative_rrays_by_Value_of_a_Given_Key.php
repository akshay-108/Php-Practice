<?php

// syntax
// array_multisort(array, sort_order, sort_type);

// decalring associative array
$arr=array(
    array("Name"=>"YASHIKA", "marks"=>22),
    array("Name"=>"ASHIKA", "marks"=>67),
    array("Name"=>"BASHIKA", "marks"=>87),
    array("Name"=>"YASHITA", "marks"=>24),
    array("Name"=>"AMAN", "marks"=>55),
    array("Name"=>"ANjali", "marks"=>98),
    array("Name"=>"YASHIKA", "marks"=>100), 
);

// declaring the arrya to store names
$names=array();
foreach($arr as $key => $value)
{
    $names=$value['Name'];
}

// apply multisort
array_multisort($names,SORT_ASC,$arr);
echo "Modifid Array"."\n";
var_dump($arr);

?>