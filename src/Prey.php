<?php
// Injecting Predator class
interface Prey {
    public function chaseBy(Predator $predator);
    public function killedby(Predator $predator);
}