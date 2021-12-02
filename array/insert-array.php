<?php

$original_array=array(1," ",2," ",3," ",4);

echo 'original_array' . "\n";
foreach($original_array as $x)
{
    print_r($x);
}
echo "\n\n\n";

$value=11;
$position=2;
array_splice($original_array,$position,0,$value);

echo 'new_array' . "\n";
foreach($original_array as $x)
{
    print_r($x);
}
echo "\n";
?>