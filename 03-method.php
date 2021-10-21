<?php

class Student {
  public $name = 'Fakta Arief';

  // Method
  public function profile() {
    return 'Hello, my name is ' . $this->name;
  }
}
