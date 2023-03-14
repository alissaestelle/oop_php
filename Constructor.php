<?php 

class Artist
{
  // If an access modifier hasn't been specified for a function, it implicitly defaults to public.
  function __construct(
    public string $name,
    protected array $songs = [])
  {}

  // An accessor fx is the same as a getter fx, so acceptable naming conventions would be: getName(), accessName(), nameAccessor(), etc.
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

$grimes = new Artist('Grimes', ['Oblivion']);
/*
Because $songs has a default condition specified in the constructor, the second argument is optional, so this would have also worked:

$grimes = new Artist('Grimes');
*/

var_dump($grimes);

// If $name is defined as public in the constructor (i.e. public string $name), it can be accessed directly:
print($grimes->name);
print "\n";

// On the other hand, if $name were specified with a *different* access modifier in the constructor (i.e. protected string $name), it would not be able access $name directly, and L:31 would result in an error. 

/* 
For example, $songs is protected, so this will not run:
print_r($grimes->songs);
*/

$grimes->addSong('Genesis');
$grimes->addSong('Circumambient');

var_dump($grimes->listSongs());
print "\n";

// Alternatively, a song(s) could have been added during instantiation as well (see L:26).

?>