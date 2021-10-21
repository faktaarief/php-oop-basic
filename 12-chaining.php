<?php

class Student {
  public $name;
  public $nim;

  public function setName($name) { 
    $this->name = $name;
    return $this;
  }

  public function setNim($nim) { 
    return $this->nim = $nim;
  }
}

$student = new Student();
$student->setName('Fakta Arief')->setNim(12183840);

echo $student->name . PHP_EOL;
echo $student->nim . PHP_EOL;
