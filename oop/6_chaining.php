<?php

class name
{
    public $name;

    public function firstname($fname)
    {
        $this->name = $fname;
        return $this;
    }

    public function lastname($lname)
    {
        $fullname = $this->name ." ". $lname;
        return $fullname;
    }
}

$info = new name();
$contact= $info->firstname('Akshay')->lastname('Pawar');
echo $contact;


?>