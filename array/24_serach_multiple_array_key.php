<?php
// search multiple array key

function search($array,$search_item)
{
    $result = array();

    foreach ($array as $key => $value) {
        foreach($search_item as $k => $v)
        {
            if(!isset($value[$k]) || $value[$k] != $v)
            {
                continue 2;
            }
        }

        $result[] = $value;
    }
    return $result;
}


$array = array(
    1=>array(
        'Name'=>'Akshay',
        'Rollno'=>26,
        'class'=>'10th D'
    ),
    2=>array(
        'Name'=>'Lalit',
        'Rollno'=>27,
        'class'=>'10th D'
    ),
    3=>array(
        'Name'=>'Tejas',
        'Rollno'=>28,
        'class'=>'10th D'
    ),
    4=>array(
        'Name'=>'Rohan',
        'Rollno'=>29,
        'class'=>'10th D'
    ),
);

$search_item = array('Rollno'=>26,'class'=>'10th D');

$res = search($array,$search_item);

print_r($res);
// Print search result
foreach ($res as $var) {
    echo 'RollNo: ' . $var['Rollno'] . '<br>';
    echo 'Name: ' . $var['Name'] . '<br>';
    echo 'Section: ' . $var['class'] . '<br>';        
}
?>