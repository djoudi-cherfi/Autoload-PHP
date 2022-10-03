<?php

namespace App\Models;

class Teacher
{
    public function __construct()
    {
        echo "This is from Teacher class<br />";
    }

    public static function ClassTeacher(): void
    {
        echo __CLASS__ . "<br />";
    }
}
