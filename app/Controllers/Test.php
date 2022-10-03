<?php

namespace App\Controllers;

class Test
{
    public function __construct()
    {
        echo "This is from Test class<br />";
    }

    public static function ClassTest(): void
    {
        echo __CLASS__ . "<br />";
    }
}
