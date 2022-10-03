<?php

namespace App\Models;

class Student
{
    public function __construct()
    {
        echo "This is from Student class<br />";
    }

    public static function ClassStudent(): void
    {
        echo __CLASS__ . "<br />";
    }
}
