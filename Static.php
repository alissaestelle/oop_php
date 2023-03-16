<?php

// NOTE: This is a variant of Static.php— in this version, a static fx has been added (L:16), and another class has been created ().


class Artist 
{
  function __construct(
    public $name,
    // i.e. public *string* $name
    protected $songs = []
    // i.e. public *array* $songs
  ){}

  // STATIC FX ADDITION:
  static function new( ... $params) {
    /*
    $params is a preset in PHP that bundles class properties into an array to be be destructured later. $params works like an alias (that equals a class' properties) so that parameters don't need to be itemized during each use.

    For a closer look: var_dump($params)
    */

    return new static( ... $params);
  }

  function nameAccessor() {
    return $this->name;
  }

  function listSongs() {
    return $this->songs;
  }

  function addSong($song) {
    $this->songs[] = $song;
  }
}

class Song {
  function __construct(
    protected $name
    // i.e. protected *string* $name
  )
  {}
}

$shook = new Artist('Shook', ['You Were Bigger Than Life']);
// var_dump($shook);
// print "\n";

$tycho = Artist::new('Tycho', [new Song('Awake'), new Song('L'), new Song('Into the Woods')]);

var_dump($tycho->listSongs());

?>