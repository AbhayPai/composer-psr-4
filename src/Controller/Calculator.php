<?php

namespace ComposerApp\Controller;

Class Calculator {

  public function add($x, $y) {
    return $x + $y;
  }

  public function subtract($x, $y) {
    if ($x < $y) {
      return "Subtraction cannot be done";
    }

    return $x - $y;
  }

  public function multiply($x, $y) {
    return $x * $y;
  }

  public function divide($x, $y) {
    return $x / $y;
  }

}
