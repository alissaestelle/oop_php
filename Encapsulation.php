<?php

class Person
{
  function __construct(protected $name, protected $age)
  {
  }

  function setAge($age)
  {
    // setAge() limits the user age group to those 18 & older
    if ($age < 18) {
      // throw new Exception('Access Denied');
      echo nl2br("Access Denied \n");
    } else {
      $this->age = $age;
    }
  }

  function getAge()
  {
    return $this->age * 365;
  }
}

class Child extends Person
{
}

$livvy = new Child('Livvy', 4);
$livvy->setAge(25);
print $livvy->getAge();

?>
