<?php

// Imported autoload
require 'vendor/autoload.php';

// Public function __construct
use App\Models\Student;
use App\Models\Teacher;
use App\Services\StudentService;
use App\Controllers\Test;

// Instanciation des classes
new Student;
new Teacher;
new StudentService;
new Test;

// Public static function
Student::ClassStudent();
Teacher::ClassTeacher();
StudentService::ClassStudentService();
Test::ClassTest();
