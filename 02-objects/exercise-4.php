<?php

class Baby
{
  public $name;
  public $weight;
  public $height;

  public function __construct(string $name, float $weight, float $height)
  {
      $this->name = $name;
      $this->weight = $weight;
      $this->height = $height;
  }
}

$baby1 = new Baby('Milan', 10.5, 31.3);
$baby2 = new Baby('Milena', 9.5, 29.3);
$baby3 = new Baby('Milica', 8.5, 32.3);

echo "Beba1: {$baby1->name}, Tezina: {$baby1->weight}, Visina: {$baby1->height}". PHP_EOL;

echo "Beba2: {$baby2->name}, Tezina: {$baby2->weight}, Visina: {$baby2->height}". PHP_EOL;

echo "Beba3: {$baby3->name}, Tezina: {$baby3->weight}, Visina: {$baby3->height}". PHP_EOL;

