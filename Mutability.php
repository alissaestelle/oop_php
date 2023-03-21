<?php

// VALUE OBJECTS

class Age
{
  function __construct(public $age)
  {
    $this->age < 0 || $this->age > 100 ? throw new Exception('Invalid Age!') : $this->age = $age;
  }
}

function register(Age $age)
{
  // $validator = $age < 0 || $age > 100 ? throw new Exception('Invalid Age!') : $age;
  // return $validator;
  return $age;
}
$three = new Age(3);
var_dump($three);

// $negative = new Age(-5);
// var_dump($negative);

$eight = new Age(8);
$answer = register($eight);
var_dump($answer);

register(5);

// $minusFive = register(-5);
// print $minusFive;

?>
