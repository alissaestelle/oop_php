<?php

// ** Value Objects && Mutability **

class Age
{
  function __construct(protected $age)
  {
    $this->age < 0 || $this->age > 100
      ? throw new Exception('Invalid Age!')
      : ($this->age = $age);
  }

  // ** Mutable Fx **
  function update()
  {
    // ↳ Returns the same instance it was given because the argument provided *is* mutable.
    $newAge = $this->age += 1;
    return $newAge;
  }

  // ** Immutable Fx **
  function new()
  {
    // ↳ Returns a *new* instance since the argument provided is *not* mutable.
    $newInst = new self($this->age + 1);
    return $newInst;
  }

  function ageAccessor()
  {
    $curAge = $this->age;
    return $curAge;
  }
}

function register(Age $age)
{
  // $validator = $age < 0 || $age > 100 ? throw new Exception('Invalid Age!') : $age;
  // return $validator;
  return $age;
}

$eight = new Age(8);
$answer = register($eight);
// var_dump($answer);

/*
Throws Error:
$negative = new Age(-5);
var_dump($negative);
*/

$thirtyFive = new Age(35);
$thirtySix = $thirtyFive->update();

print $thirtySix . "\n";

$twentyOne = new Age(21);
$twentyTwo = $twentyOne->new();
// print_r($twentyTwo);

$readable = $twentyTwo->ageAccessor();
print $readable . "\n";

?>
