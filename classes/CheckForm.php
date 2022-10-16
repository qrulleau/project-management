<?php

class CheckForm {
  public function checkInput(string $input){
    $input = htmlspecialchars(trim($input));
    return $input;
  }
}