<?php

require_once 'Garden.php';
require_once 'Collector.php';

$garden = new Garden(4,2); 

$assembler = new Collector($garden);

$assembler->collectFruitsApples();
$assembler->collectFruitsPears();
echo $assembler->getAnswer();

?>