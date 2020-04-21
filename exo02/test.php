<?php

require_once("autoload.php");

use exo\Point;

$test1 = new Point(0, 0);
$test2 = new Point(0, 5);

echo "P1 : " . $test1 . "\n";
echo "P2 : " . $test2 . "\n";
echo "Distance de P1 à P2 : " . $test1->distanceFromXtoY($test2) . "\n";
