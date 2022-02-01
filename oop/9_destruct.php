<?php

class file
{
    private $handle;
    private $filename;

    public function __construct($filename,$mode="r")
    {
        $this->filename = $filename;
        $handle = fopen($filename,$mode);
    }

    public function __destruct()
    {
        // close the file handle
        if($this->handle)
        {
            fclose($this->handle);
        }
    }

    public function read()
    {
        // read the file content
        return fread($this->handle,filesize($this->filename));
    }

    
}

$f = new file('/test.txt');

echo $f->read();
?>