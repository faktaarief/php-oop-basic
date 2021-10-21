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
  private function profile() {
    // parent:: Refer to Method in Parent Class
    parent::setName('Fakta Arief');
    return 'Hello my name is ' . $this->name;
  }

  public function programming() {
    // self:: Refer to Method in this Class
    $profile = self::profile();
    return $profile . ' I\'m able to programming';
  }
}

$sistemInformasi = new SistemInformasi();

echo $sistemInformasi->programming() . PHP_EOL; 
