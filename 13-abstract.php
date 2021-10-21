<?php

abstract class Student {
  abstract protected function profile(): string;
  abstract public function address(): string;
}

class SistemInformasi extends Student {

  /**
   * All method in abstract class must be declared in this class
   */

  public function profile(): string {
    return 'This a major of Sistem Informasi';
  }

  public function address(): string {
    return 'Bogor City';
  }
}

$sistemInformasi = new SistemInformasi();
echo $sistemInformasi->profile();
