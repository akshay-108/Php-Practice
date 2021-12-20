<?php
// PHP Check if two arrays contain same elements


$array1=array(1,2,3,4,5,'hello');
$array2=array(1,2,3,4,5,'hello');
$array3=array(6,7,8,9,10,'hello');

sort($array1);
sort($array2);

if($array1==$array2)
{
    echo "both are same";
}else{
    echo "both are not same";
}

?>