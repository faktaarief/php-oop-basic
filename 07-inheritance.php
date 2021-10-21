<?php

// Parent Class
class Student {
  public $name;

  public function setName($name) { 
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }
}

// Child Class
class SistemInformasi extends Student {
  public function programming() {
    return 'I\'m able to programming';
  }
}

$sistemInformasi = new SistemInformasi();
$sistemInformasi->setName('Fakta');

echo $sistemInformasi->getName() . PHP_EOL;
echo $sistemInformasi->programming() . PHP_EOL;
