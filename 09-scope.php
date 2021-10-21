<?php

class Student {
  // Public can be access from EVERYWHERE
  public $name;

  // Protected only can be access by PARENT and CHILD Class
  protected $nim;

  // Private only can be access by PARENT Class
  private $address;

  public function __construct() {
    $this->nim = 12183840;
    $this->address = 'Bogor City';
  }

  public function setName($name) { 
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function getAddress() {
    return 'Your Address : ' . $this->address . ' (PRIVATE SCOPE)';
  }
}

class SistemInformasi extends Student {
  public function getNim() {
    return 'Your NIM : ' . $this->nim . ' (PROTECTED SCOPE)';
  }

  public function getAddress() {
    return $this->address;
  }

  public function programming() {
    return 'I\'m able to programming';
  }
}

$student = new Student();
$sistemInformasi = new SistemInformasi();

// Throw Error
// echo $student->address;
// echo $sistemInformasi->nim;
// echo $sistemInformasi->address;
// echo $sistemInformasi->getAddress();

echo $sistemInformasi->getNim() . PHP_EOL; // Your NIM : 12183840
echo $student->getAddress() . PHP_EOL; // Your Address : Bogor City
