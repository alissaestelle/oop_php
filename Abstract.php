<?php

// ** ABSTRACT CLASS **

abstract class App
{
  function getName()
  {
    $className = (new ReflectionClass($this))->getShortName();
    // getShortName() returns a class name as a string

    $appName = trim(preg_replace('/[A-Z]/', ' $0', $className));
    return $appName;
  }

  function getIcon()
  {
    $fileName = str_replace(' ', '-', $this->getName() . '.png');
    $fileName = strtolower($fileName);
    return $fileName;
  }

  abstract function findAcct($user);
}


class Study extends App
{
  function findAcct($user)
  {
    return "User Found: $user";
  }
}

class Notes extends App
{
  function findAcct($user)
  {
    return "No User Found: $user";
  }
}

$study = new Study();

print $study->getName();
print "\n";

print $study->getIcon();
print "\n";

print $study->findAcct('alissestelle');
print "\n";
?>
