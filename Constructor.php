<?php

// ** Constructors feat. CPP **

/*
General Notes:
- Constructor property promotion (CPP) is the new standard constructor method as of PHP 8.
- Access modifiers for functions are implicitly public unless otherwise specified.
- Access modifiers for constructor properties are *strict requirements* (the public modifier must be declared when using CPP).
- Getters and accessors are interchangeable functions.
- If a constructor property is assigned a default value, its argument is optional.
- If a constructor property is *not* assigned a default value, its argument is mandatory.
*/

class Artist
{
  function __construct(public string $name, protected array $songs = [])
  {
  }

  function nameAccessor()
  {
    // ↳ i.e. getName()
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

$grimes = new Artist('Grimes', ['Oblivion']);
// $grimes = new Artist('Grimes');
var_dump($grimes);

print $grimes->name;
print "\n";

$grimes->addSong('Genesis');
$grimes->addSong('Circumambient');

var_dump($grimes->listSongs());
print "\n";

?>
