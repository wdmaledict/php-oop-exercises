<?php

class Playlist 
{
  public $name;
  public $songs;

  public function __construct($name)
  {
     $this->name = $name;
     $this->songs = $songs;
  }
}

$playlist = [];

$playlist[] = new Playlist('Linkin Park');
$playlist[] = new Playlist('System of Down');
$playlist[] = new Playlist('Metallica');

die(var_dump($playlist));