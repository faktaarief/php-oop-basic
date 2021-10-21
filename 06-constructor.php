<?php

class Student {
  public $name;

  // Constructor
  public function __construct() {
    $this->name = 'Fakta Arief';
    $this->age = 21;
  }
}

$student = new Student();

echo $student->name;
echo $student->age;
