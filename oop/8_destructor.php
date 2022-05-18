<?php

class destruct
{
    public function __destruct()
    {
        echo "hello";
    }
}

$des=new destruct();

?>