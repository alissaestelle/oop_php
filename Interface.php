<?php

// ** Interfaces **
// Note: This is a copy of Handshake.php. The same example is used here, but with an interface instead.

interface Newsletter
{
  // ↳ *Interface Keyword*
  public function subscribe();
  // If this fx had any parameters, they would also need to be listed anywhere else this function was used.
}

class SubscriptionCT
{
  // This class doesn't need to implement the interface in order to type hint it as a parameter.
  function register(Newsletter $thirdParty)
  {
    // $example = 'alissa@kimmel.com';
    $thirdParty->subscribe();
  }
}

// Third Party Newsletter No. 1:
class FakeNews implements Newsletter
{
  function subscribe()
  {
    die('Subscribed with Fake News!');
  }
}

// Third Party Newsletter No. 2:
class FictitiousNews implements Newsletter
{
  function subscribe()
  {
    die('Subscribed with Fictitious News!');
  }
}

$controller = new SubscriptionCT();
$controller->register(new FakeNews());
// $controller->register(new FictitiousNews());
?>
