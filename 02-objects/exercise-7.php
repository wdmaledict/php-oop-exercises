<?php

class Baby
{
  public function __construct(
    public string $name,
    public int $weight,
    public float $height
  ) {}

  public function recordWeight(int $newWeight): void
  {
    if ($this->weight > 0 && $newWeight < ($this->weight / 2)) {
      echo "Suspicious weight for {$this->name}: {$newWeight} g" . PHP_EOL;
    } else {
      $this->weight = $newWeight;
    }
  }
}

$luka = new Baby('Luka', 5000, 76.4);
$milan = new Baby('Milan', 7000, 78.3);

$luka->recordWeight(4200);
$milan->recordWeight(500);

echo "Luka: {$luka->weight} g, Height:{$luka->height} cm" . PHP_EOL;
echo "Milan: {$milan->weight} g, Height:{$milan->height} cm" . PHP_EOL;
