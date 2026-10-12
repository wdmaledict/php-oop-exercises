<?php

class Comment
{
    public function __construct(public string $author, public string $text)
    {
      //
    }
}

class Ticket 
{
    public array $comments = [];

    public function __construct(public string $title, public string $priority)
    {
      
    }

    public function addComment(Comment $comment): void
    {
      $this->comments[] = $comment;
    }

}

$ticket = new Ticket('Monitor ne radi', 'High'); 

$ticket->addComment(new Comment('Milan', 'Proveren kabl'));
$ticket->addComment(new Comment('Milena', 'Zamenjen kabl'));

foreach ($ticket->comments as $comment) {
    echo $comment->author . ': ' . $comment->text . PHP_EOL;
}