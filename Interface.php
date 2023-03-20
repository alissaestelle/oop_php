<?php

class Newsletter
{
  function __construct(public $aPI)
  {
  }
  function subscribe($email)
  {
    // Sends Post Req to Newsletter's API
  }
}

class SubscriptionCT
{
  function register()
  {
    // Adds User Email to Newsletter List
    $subscription = new Newsletter();
    $subscription->subscribe();
  }
}

?>
