<?php

class Rectangle {
  public $x;
  public $y;
  public $width;
  public $height;


  public function __construct($x, $y, $w, $h) {
    $this->x = $x;
    $this->y = $y;
    $this->width = $w;
    $this->height = $h;
  }
}
