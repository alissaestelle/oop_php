<?php

// ** Exceptions **

class Video
{
}

class User
{
}

function test()
{
  $complete = null;
  if (!$complete) {
    throw new Exception('Incomplete Test');
  }
  return $complete;
}

// test();

// Try/Catch Block:
try {
  echo test();
} catch (Exception $e) {
  echo "Didn't Work? At Least We Tried!";
}

?>
