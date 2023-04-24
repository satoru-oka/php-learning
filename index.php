<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function play ()
    {
        return $this->published ? "The vido is playing": "This video is not yet available";
    }

    public function pause ()
    {
        return $this->published ? 'The video is paused': "";
    }

}

header('Content-Type:text/plain', true);

$introduction = new Video();
$introduction->published = true;
// Deprecated dynamic property.
$introduction->author = 'Terry 0';
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL, $introduction->author, PHP_EOL;

// $introduction->play() Return a different result than this instance output.
$video2 = new Video();
echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;