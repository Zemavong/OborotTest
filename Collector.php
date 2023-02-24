<?php

require_once 'Garden.php';

class Collector {
    public $garden;
    public $apples;
    public $pears;

    public function __construct(Garden $garden)
    {
        $this->garden = $garden;
    }

    public function getAnswer() {
        return "всего $this->apples яблок(".$this->getWeightApples($this->apples)."гр) и $this->pears груш(".$this->getWeightPears($this->pears)."гр).";
    }

    public function collectFruitsApples() {
        $countApples = 0; 

        for($i=0;$i<$this->garden->applesTrees; $i++) {
            $countApples += $this->garden->getApples();
        }
        $this->apples = $countApples;
    }

    public function collectFruitsPears() {
        $countPears = 0; 
        for($i=0;$i<$this->garden->pearsTrees; $i++) {
            $countPears += $this->garden->getPears();
        }
        $this->pears = $countPears;
    }

    public function getWeightApples($apples) {
        return $apples*rand(150,180);
    }

    public function getWeightPears($pears) {
        return $pears*rand(150,180);
    }
}