<?php

class Song
{
    public function __construct(
        public string $title,
        public string $artist,
        public int $duration
    ) {}
}

class Playlist
{
    public array $songs = [];

    public function __construct(
        public string $name,
    ) {}

    public function addSong(Song $song): void
    {
        if ($song->duration < 30) {
            echo "Song: '{$song->title}' is shorter than 30 seconds and cannot be added to '{$this->name}'." . PHP_EOL;
        } else {
            $this->songs[] = $song;
        }
    }

    public function totalDuration(): int
    {
        $total = 0;
        foreach ($this->songs as $song) {
            $total += $song->duration;
        }
        return $total;
    }
}

$playlist1 = new Playlist('Linkin Best');
$playlist2 = new Playlist('Disturbed');

$playlist1->addSong(new Song('In the End', 'Linkin Park', 180));
$playlist1->addSong(new Song('Faint', 'Linkin Park', 210));
$playlist1->addSong(new Song('From Inside', 'Linkin Park', 20));
$playlist1->addSong(new Song('Numb', 'Linkin Park', 320));

$playlist2->addSong(new Song('Decadence', 'Disturbed', 320));

foreach ($playlist1->songs as $song) {
    echo "Song: {$song->title} by {$song->artist} ({$song->duration} sec)" . PHP_EOL;
}

foreach ($playlist2->songs as $song) {
    echo "Song: {$song->title} by {$song->artist} ({$song->duration} sec)" . PHP_EOL;
}

echo PHP_EOL . "Total duration of playlist '{$playlist1->name}': " . $playlist1->totalDuration() . ' s' . PHP_EOL;
echo "Total duration of playlist '{$playlist2->name}': " . $playlist2->totalDuration() . ' s' . PHP_EOL;
