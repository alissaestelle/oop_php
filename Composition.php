<?php

interface Gateway
{
  public function findCustomer();
  public function findSubscription();
}

// Controller: 
class Subscription
{
  function __construct(protected Gateway $gateway)
  {
  }

  function bill()
  {
    $this->gateway->findCustomer();
    $this->gateway->findSubscription();
  }

  function cancel()
  {
    $this->gateway->findCustomer();
    $this->gateway->findSubscription();
  }
}

// Subscription Service No. 1:
class Stripe implements Gateway
{
  function __construct(public $name)
  {
  }

  function findCustomer()
  {
    print 'Stripe Customer Found!';
    print "\n";
  }

  function findSubscription()
  {
    print 'Stripe Subscription Found!';
    print "\n";
  }
}

// Subscription Service No. 2:
class Braintree implements Gateway
{
  function __construct(public $name)
  {
  }
  function findCustomer()
  {
    print 'Braintree Customer Found!';
    print "\n";
  }

  function findSubscription()
  {
    print 'Braintree Subscription Found!';
    print "\n";
  }
}

$stripe = new Stripe('Stripe');
var_dump($stripe);

$subscription = new Subscription($stripe);
$subscription->bill();

$braintree = new Braintree('Braintree');
var_dump($braintree);

$subscription = new Subscription($braintree);
$subscription->bill();
?>
