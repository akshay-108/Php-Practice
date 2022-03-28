<?php

function search($arr,$key,$value)
{
    $results = array();
    // if it is array
    if(is_array($arr))
    {
        if(isset($arr[$key]) && $arr[$key] == $value)
        {
            $results[] = $arr;
        }

        foreach($arr as $subarray)
        {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }
    return $results;
}
$arr = array(
    "A" => array(
        1 => array("rollno"=>101, "name"=>"Amit"),
        2 => array("rollno"=>102, "name"=>"Sumit"),
        3 => array("rollno"=>103, "name"=>"Ranjit"),
        4 => array("rollno"=>104, "name"=>"Manjit"),
    ),
    "B" => array(
        1 => array("rollno"=>105, "name"=>"Amit"),
        2 => array("rollno"=>106, "name"=>"Suresh"),
        3 => array("rollno"=>107, "name"=>"Ramesh"),
        4 => array("rollno"=>108, "name"=>"Mangesh"),
    )
    );

$res = search($arr,'name','Amit');
foreach ($res as $key => $value) {
    echo $value['rollno'] . "-" . $value['name']."\n";
}

?>