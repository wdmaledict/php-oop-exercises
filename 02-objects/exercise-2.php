<?php

class Baby
{
  public $name;
  public $weight;
  public $height;
}

$baby1 = new Baby();
$baby2 = new Baby();
$baby3 = new Baby();

$baby1->name = 'Milica';
$baby1->weight = 10;
$baby1->height = 35.5;

$baby2->name = 'Milena';
$baby2->weight = 7;
$baby2->height = 36.5;

$baby3->name = 'Anja';
$baby3->weight = 8;
$baby3->height = 32.5;

echo "Stanje pre nedelju dana!" . PHP_EOL;

echo "Beba1: " . $baby1->name . ", tezina:" . $baby1->weight . ", visina: " . $baby1->height . PHP_EOL;

echo "Beba2: " . $baby2->name . ", tezina:" . $baby2->weight . ", visina: " . $baby2->height . PHP_EOL;

echo "Beba2: " . $baby3->name . ", tezina:" . $baby3->weight . ", visina: " . $baby3->height . PHP_EOL;

$baby1->weight = 10.5;

echo "Stanje posle nedelju dana!" . PHP_EOL;

echo "Beba1: " . $baby1->name . ", tezina:" . $baby1->weight . ", visina: " . $baby1->height . PHP_EOL;

echo "Beba2: " . $baby2->name . ", tezina:" . $baby2->weight . ", visina: " . $baby2->height . PHP_EOL;

echo "Beba2: " . $baby3->name . ", tezina:" . $baby3->weight . ", visina: " . $baby3->height . PHP_EOL;