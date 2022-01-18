<?php
$gfg_array = array(
    array(
        'score'=>100,
        'name'=>'sam',
        'subject'=>'data structure'
    ),
    array(
        'score'=>50,
        'name'=>'ram',
        'subject'=>'java'
    ),
    array(
        'score'=>75,
        'name'=>'lal',
        'subject'=>'m3'
    ),
);

class geekschool
{
    var $score,$name,$subject;

    public function geekschool($data)
    {
        $this->name=$data['name'];
        $this->score=$data['score'];
        $this->subject=$data['subject'];
    }
}

function data2object($data)
{
    $class_obj=new geekschool($data);
    return $class_obj;
}

function comparator($obj1,$obj2)
{
    return $obj1->score > $obj2->score; 
}

$school_data = array_map('data2object',$gfg_array);

print("Original object array:\n");
  
print_r($school_data);

// Sorting the class objects according 
// to their scores
usort($school_data,'comparator');

// Printing sorted object array data
print("\nSorted object array:\n");

print_r($school_data);

?>