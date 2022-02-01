<?php
declare(strict_types=1);
class typed
{
    public $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

$t = new typed(100.140);
// $t->balance=0;
var_dump($t->balance);

?>