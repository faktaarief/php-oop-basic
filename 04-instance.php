<?php

class Student {
  public $name = 'Fakta Arief';

  public function profile() {
    return 'Hello, my name is ' . $this->name;
  }
}

// Instance
$student = new Student();
echo $student->profile();
