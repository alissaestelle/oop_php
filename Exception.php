<?php

// ** Exceptions: Try/Catch Blocks **

/*
A try/catch block "insulates" any errors the system doesn't know how to process and resolves them to prevent the entire program from breaking.
*/

// Example No. 1:
function test()
{
  $complete = null;
  if (!$complete) {
    throw new Exception('Incomplete Test');
  }
  return $complete;
}

try {
  echo test();
} catch (Exception $e) {
  // echo "Didn't Work? At Least We Tried!";
}

// Example No. 2:
class Video
{
  // Logic Here
}

class StreamCT
{
  function findUser(User $user)
  {
    try {
      echo $user->download(new Video());
    } catch (Exception $e) {
      // ↳ Catches/prevents the Exception on L:60.
      echo 'User Acct Required to Stream';
      // echo $e → Releases/permits the Exception on L:60.
    }
    // Note: If the catch block were left empty, PHP would still catch the error, but the terminal wouldn't display any messages.
  }
}

class User
{
  function access()
  {
    return false;
    // return true;
  }

  function download(Video $inst)
  {
    $permission = $this->access();
    // ↳ access() is currently FALSE, so PHP won't return a value.

    $inverse = !$this->access();
    // ↳ The opposite of access() is currently TRUE, so PHP will return a 1.

    if (!$permission) {
      // ↳ !false = true
      throw new Exception('User Not Subscribed');
    }
  }
}

// $test = (new User)->download(new Video);

$alissa = new User();
$controller = new StreamCT();
echo $controller->findUser($alissa);

// ** Custom Classes **

// class TeamMax extends Exception
// {
//   protected $message = 'Member Limit Exceeded!';
// }

class TeamAlert extends Exception
{
  // Static Fx:
  static function memberMax()
  {
    return new static('Member Limit Exceeded!');
  }
}

class Team
{
  public $members = [];

  function add(Member $member)
  {
    // ** Condition: 3 Member Max **
    $totalPlayers = count($this->members);
    var_dump($totalPlayers);

    if ($totalPlayers >= 3) {
      throw TeamAlert::memberMax();
    }

    $this->members[] = $member;
  }
}

class PickleBall
{
  function create()
  {
    $pickleBall = new Team();

    try {
      $pickleBall->add(new Member('Jane Doe'));
      $pickleBall->add(new Member('John Doe'));
      $pickleBall->add(new Member('Jack Doe'));
      $pickleBall->add(new Member('Jill Doe'));
    } catch (TeamMax $e) {
      var_dump($e->getMessage());
    }
  }
}

class Member
{
  function __construct(protected $name)
  {
  }
}

$tommyPickles = (new PickleBall())->create();

?>
