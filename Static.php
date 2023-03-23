<?php

// ** Static Functions **
// Note: This is a copy of Constructor.php. The same example is used here, only a static fx has been added (L:16).

class Artist
{
  function __construct(
    public $name,
    // i.e. public *string* $name
    protected $songs = []
  ) {
    // i.e. public *array* $songs
  }

  // Static Fx:
  static function new(...$params)
  {
    /*
    $params is a preset in PHP that bundles class properties into an array to be destructured later. $params works like an alias (equivalent to class properties) so that parameters don't need to be itemized for each use.

    Ex: var_dump($params)
    */

    return new static(...$params);
  }

  function nameAccessor()
  {
    return $this->name;
  }

  function listSongs()
  {
    return $this->songs;
  }

  function addSong($song)
  {
    $this->songs[] = $song;
  }
}

class Song
{
  function __construct(protected $name)
  {
    // i.e. protected *string* $name
  }
}

$shook = new Artist('Shook', ['You Were Bigger Than Life']);
// var_dump($shook);
// print "\n";

$tycho = Artist::new('Tycho', [
  new Song('Awake'),
  new Song('L'),
  new Song('Into the Woods'),
]);

var_dump($tycho->listSongs());

?>
