<?php

namespace App\Services;

class StudentService
{
    public function __construct()
    {
        echo "This is from StudentService class<br />";
    }

    public static function ClassStudentService(): void
    {
        echo __CLASS__ . "<br />";
    }
}
