<?php

class Student {
  public $name;

  // Method Set
  public function setName($name) { 
    $this->name = $name;
  }

  // Method Get
  public function getName() {
    return $this->name;
  }
}

$student = new Student();

// Set the name
$student->setName('Fakta Arief');

// Get the name
$studentName = $student->getName();

echo $studentName;
