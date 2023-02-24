<?php

class Garden {
    public $applesTrees;
    public $pearsTrees;

    public function __construct(int $applesTrees, int $pearsTrees)
    {
        $this->applesTrees = $applesTrees;
        $this->pearsTrees = $pearsTrees;
    }

    public function getApples() {
        return rand(40,50);
    }

    public function getPears() {
        return rand(0,20);
    }
}