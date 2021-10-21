<?php

class Student {
  public $name;

  public function setName($name) { 
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }
}

class SistemInformasi extends Student {
  // Overriding method getName in Parent Class (Student)
  public function getName() {
    return 'Hello, my name is' . $this->name;
  }

  public function programming() {
    return 'I\'m able to programming';
  }
}

$sistemInformasi = new SistemInformasi();
$sistemInformasi->setName('Fakta');

echo $sistemInformasi->getName() . PHP_EOL;
echo $sistemInformasi->programming() . PHP_EOL;
