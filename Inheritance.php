<?php

// Water Bottle Example

class Nalgene
{
  function fill()
  {
    print "Filling with Water!";
    print "\n";
  }
}

class HydroFlask extends Nalgene
{
  // HydroFlask is a 
  function chill()
  {
    print "Keeping Water Cold!";
    print "\n";
  }
}

// (new HydroFlask())->fill();
// (new HydroFlask())->chill();

// Collection Example

class Collection
{
  function __construct(public $collectibles)
  {}

  function sumPrices()
  {
    $total = array_map(fn($collectible) => $collectible->price, $this->collectibles);
    return array_sum($total);
  }  
}

class Book
{
  function __construct(
    public $title,
    public $author,
    public $price
  )
  {}

// function getTitle() =>
// $this->title;

}

$collection = new Collection([
  $thicNhat = new Book('Living Buddha, Living Christ', 'Thic Nhat Hanh', 15),
  // i.e. new Book($title => "Living Buddha, Living Christ", $author => "Thic Nhat Hanh", $price => 15)
  $branSan = new Book('The Way of Kings', 'Brandon Sanderson', 20)
  // i.e. new Book($title => "The Way of Kings", $author => "Brandon Sanderson", $price => 20)
]);

var_dump($collection);
// var_dump($thicNhat)
print($collection->sumPrices())

?>