<?php

$marks = (int)readline("Enter grades: ");

if($marks >= 60)
{
    echo "A";
}else if($marks >= 45 && $marks <= 59)
{
    echo "B";
}else if($marks >=33 && $marks <= 44)
{
    echo "C";
}else{
    echo "Fail";
}

// -----------------------------------------------

// or
// $marks = 40;

// if ($marks>=60)
// {
// 	$grade = "First Division";
// }
// else if($marks>=45)
// {
// 	$grade = "Second Division";
// }
// else if($marks>=33)
// {
// 	$grade = "Third Division";
// }
// else
// {
// 	$grade = "Fail";
// }

// echo "Student grade: $grade";

?>