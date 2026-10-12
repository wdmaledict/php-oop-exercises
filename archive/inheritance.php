<?php

class Ticket
{
    public array $comments = [];

    public function __construct(public string $title) {}

    public function addComment(string $text): void
    {
        $this->comments[] = $text;
    }

    public function describe(): string
    {
        return "Tiket: {$this->title}";
    }
}

class HardwareTicket extends Ticket
{
    public function __construct(string $title, public string $serialNumber)
    {
        parent::__construct($title);
    }
    
    public function describe(): string
    {
        return "Hardverski tiket: {$this->title} (Serijski broj: {$this->serialNumber})";
    }
}

class SoftwareTicket extends Ticket
{
    public function describe(): string
    {
        return "Softverski tiket: {$this->title}";
    }
}

$hardware = new HardwareTicket('Monitor ne radi', 'SN-89078');
$hardware->addComment('Proveren kabl'); 

$software = new SoftwareTicket('Outlok ne radi');
$software->addComment('Proverena konekcija'); 

echo $hardware->describe() . PHP_EOL;           
echo $software->describe() . PHP_EOL;         