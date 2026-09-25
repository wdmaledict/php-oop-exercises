<?php

declare(strict_types=1);

class Ticket 
{
  
  public $comments = [];

  public function __construct(public string $title, public string $priority)
  {
    
  }

  public function addComment(string $text): void
  {
    $this->comments[] = $text;
  }

}

$ticket1 = new Ticket('Ugrent IT Support', 'High');
$ticket2 = new Ticket('My monitor is broken', 'Low');

$ticket1->addComment('Test number 1');
$ticket2->addComment('Test number 2');

var_dump($ticket1);
var_dump($ticket2);
