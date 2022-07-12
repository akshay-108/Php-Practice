<?php

$fact = (int)readline("Enter Number: ");
$s = 1;

for ($i=1; $i <= $fact ; $i++) { 
    $s = $s * $i;
}
echo $s;

?>