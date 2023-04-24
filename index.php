<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play ()
    {
        return $this->published ? "The vido is playing": "This video is not yet available";
    }

    public function pause ()
    {
        return $this->published ? 'The video is paused': "";
    }

}

// header('Content-Type:text/plain', true);

// Fatal error: Uncaught ArgumentCountError: Too few arguments to fuction video
// $introduction = new Video();
$introduction = new Video('mp4', 10.5, 'sample');
var_dump($introduction);