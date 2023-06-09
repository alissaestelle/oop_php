<?php

// ** Inheritance **

// Example No. 1:
class Nalgene
{
  function fill()
  {
    print 'Filling with Water!';
    print "\n";
  }
}

class HydroFlask extends Nalgene
{
  // HydroFlask can also be filled with water, so it extends Nalgene.
  function chill()
  {
    print 'Keeping Water Cold!';
    print "\n";
  }
}

// Example No. 2:
class Collection
{
  function __construct(public $collectibles)
  {
  }

  function sumPrices()
  {
    $total = array_map(
      fn($collectible) => $collectible->price,
      $this->collectibles
    );
    return array_sum($total);

    /*
    Alt Solution:
    $total = array_column($this->collectibles, 'price');
    return array_sum($total);
    */
  }
}

class Book
{
  function __construct(public $title, public $author, public $price)
  {
  }
}

$books = new Collection([
  ($thicNhat = new Book('Living Buddha, Living Christ', 'Thic Nhat Hanh', 15)),
  ($branSan = new Book('The Way of Kings', 'Brandon Sanderson', 20)),
]);

// print_r($books);
// print "\n";

print "Book Collection Total: $" . $books->sumPrices();
print "\n";

?>
