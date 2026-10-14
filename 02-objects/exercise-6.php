<?php

class Baby
{
  public $name;
  public $weight;

  public function __construct(string $name, int $weight)
  {
    $this->name = $name;
    $this->weight = $weight;
  }

  public function recordWeight(int $newWeight): void
  {
    if ($this->weight > 0 && $newWeight < ($this->weight / 2)) {
      echo "Suspicious weight for {$this->name}: {$newWeight} g" . PHP_EOL;
    } else {
      $this->weight = $newWeight;
    }
  }
}

$luka = new Baby('Luka', 5000);
$milan = new Baby('Milan', 7000);

$luka->recordWeight(4200);
$milan->recordWeight(500);

echo "Luka: {$luka->weight} g" . PHP_EOL;
echo "Milan: {$milan->weight} g" . PHP_EOL;
