<?php

// NOTE: This is a duplicate of Static.php— the only difference is that a static fx has been added (L:16).


class Artist {

  function __construct(
    public $name,
    // i.e. public *string* $name
    protected $songs = []
    // i.e. public *array* $songs
  ){}

  // STATIC FX ADDITION:
  static function new( ... $params) {
    var_dump($params);
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

$shook = new Artist('Shook', ['You Were Bigger Than Life']);
// var_dump($shook);
// print "\n";

$tycho = Artist::new('Tycho', ['Awake', 'L', 'Into the Woods']);
// var_dump($tourist);
// print "\n";

?>