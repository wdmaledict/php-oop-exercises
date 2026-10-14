<?php

class Product
{
  public $name;
  public $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
}

$cart = [];
$cart[] = new Product('Mouse', 2499);
$cart[] = new Product('Keyboard', 5999);
$cart[] = new Product('Monitor', 24999);
$cart[] = new Product('Headphones', 4500);

$total = 0;

foreach ($cart as $product) {
  echo "{$product->name}: {$product->price} RSD" . PHP_EOL;
  $total += $product->price;
}

echo "Total: {$total} RSD" . PHP_EOL;
