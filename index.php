<?php

class Animal{
    public $weight;

    public function eat()
    {
        var_dump('All animals can ead');
    }

    public function reproduce()
    {
        var_dump('All animals can reproduce');
    }
}

class Mammal extends Animal {
    public $heartRate;

    public function breathe()
    {
        var_dump('I can breathe because I am a Mammal');
    }
}

class Dog extends Mammal {
    public $color;

    public function bark()
    {
        var_dump('I can bark because I am a '. strtolower(get_class()));
    }

    public function breathe()
    {
        var_dump('I breathe very fast');
    }

    public function chase()
    {
        var_dump('I am chasing a Rabbit');
    }
}

header('Content-Type:text/palin', true);
$brown = new Dog;
$brown->weight = '7.3';
$brown->color = 'Brown';
$brown->heartRate = 'okay';

echo "Weight " . $brown->weight, PHP_EOL, "Color " . $brown->color, PHP_EOL, "Heart rate " . $brown->heartRate;
// Calling methods of the dog class
$brown->bark();
// dog class
$brown->chase();
// animal class
$brown->eat();
// animal class
$brown->reproduce();
// mammal class
$brown->breathe();