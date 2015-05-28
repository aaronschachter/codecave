<?php

class LinkedListNode {
  public $value;
  public $next;

  public function __construct($value) {
    $this->value = $value;
    $this->next = NULL;
  }
}

function getLinkedList($values = array()) {
  if (empty($values)) {
    return NULL;
  }
  $count = count($values);
  $head = new LinkedListNode($values[0]);

  if ($count > 0) {
    $current = &$head;
    for ($i = 1; $i < $count; $i++) {
      $current->next = new LinkedListNode($values[$i]);
      $current = &$current->next;
    }
  }

  return $head;
}

function printLinkedList($head) {
  $current = $head;
  $output = $current->value . '<br />';
  while ($next = $current->next) {
    $output .= $next->value . '<br />';
    $current = $next;
  }
  print $output;
}
