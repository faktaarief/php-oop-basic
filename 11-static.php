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
  // Static Method
  public static function programming() {
    return 'I\'m able to programming';
  }

  // Non-static Method
  // public function programming() {
  //   return 'I\'m able to programming';
  // }
}

// Static Method No Need Instance
echo SistemInformasi::programming() . PHP_EOL; // I'm able to programming

// Instance for Non-Static Method
// $sistemInformasi = new SistemInformasi();
