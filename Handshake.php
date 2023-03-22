<?php

// ** Handshakes **
// (i.e. Informal Interfaces)

/*
The "handshake" method is the unofficial approach to interfaces. 
If an interface is automatic, then a handshake is manual. 
Handshakes still implement interfaces, only without any formal keywords.
*/

class SubscriptionCT
{
  function register($thirdParty)
  {
    $thirdParty->subscribe();
  }
}

// Third Party Newsletter No. 1:
class FakeNews
{
  function subscribe()
  {
    die('Subscribed with Fake News!');
  }
}

// Third Party Newsletter No. 2:
class FictitiousNews
{
  function subscribe()
  {
    die('Subscribed with Fictitious News!');
  }
}

$controller = new SubscriptionCT();
// $controller->register(new FakeNews());
$controller->register(new FictitiousNews());

?>
