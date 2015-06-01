<?php

class BinarySearchTreeNode {
  public $value;
  public $left;
  public $right;

  public function __construct($value, $left = NULL, $right = NULL) {
    $this->value = $value;
    $this->left = $left;
    $this->right = $ight;
  }

  public function view() {
    $output = "$this->value<br />";
    $output .= "Left: $this->left<br />";
    $output .= "Right: $this->right<hr />";
    return $output;
  }
}
