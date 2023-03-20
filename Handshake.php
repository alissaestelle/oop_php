<?php

// HANDSHAKE APPROACH: i.e. INFORMAL INTERFACE

// The "handshake" method is the unofficial version of an interface. 
// If an interface is automatic, then a handshake is manual. Conceptually, handshakes still implement interfaces, only without any formal keywords.

class SubscriptionCT
{
  function register($thirdParty)
  {
    // $example = 'alissa@kimmel.com';
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
