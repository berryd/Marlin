<?php

$dia = 5.0;

$dia_mm = (float) ($dia/0.039370);
$radius = floor($dia_mm/2);

$resolution = 90; //0-360

$tool = 5.25;

$feedrate = 10000;

echo "G21".PHP_EOL."G28".PHP_EOL."G1 F{$feedrate}".PHP_EOL;

for($i=0; $i<360; $i+=(360/$resolution)) {
    $x = cos($i)*$radius;
    $y = sin($i)*$radius;
    echo "G1 X{$x} Y{$y} Z{$tool}".PHP_EOL;
}

echo "G28".PHP_EOL."M84".PHP_EOL;
