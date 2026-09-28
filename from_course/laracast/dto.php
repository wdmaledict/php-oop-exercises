<?php

class Playlist 
{
  public function __construct(public string $name, public array $songs)
  {
    //
  }
}

class Song
{
  public function __construct(public string $name, public string $artist)
  {
    //
  }
}

$songs = [
  new Song('Faint', 'Linkin Park')
];

$playlist = new Playlist('Linkin Park', $songs);

var_dump($playlist->songs[0]);
var_dump($playlist->songs[0]->name);
var_dump($playlist->songs[0]->artist);