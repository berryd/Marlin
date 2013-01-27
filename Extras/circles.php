<?php

$dia = 5.0;

$dia_mm = (float) ($dia/0.039370);
$radius = floor($dia_mm/2);

$resolution = 180; //0-360
$nested_circles = 2;
$nest_offset = 10;

$feedrate = 10000;

echo "G21".PHP_EOL."G28".PHP_EOL."G1 F{$feedrate}".PHP_EOL;
//echo "G1 X0 Y0 Z0".PHP_EOL;

$pi = 3.14159;
$to_deg = $pi/180;

for($n=0; $n<=$nested_circles && $radius>$nest_offset; $n++) {
    $radius-=$nest_offset;
    for($i=0; $i<=360; $i+=(360/$resolution)) {
        $j = $i*$to_deg;
        $x = round(cos($j)*$radius,3);
        $y = round(sin($j)*$radius,3);
        echo "G1 X{$x} Y{$y} Z0".PHP_EOL;
    }
}
echo "G28".PHP_EOL."M84".PHP_EOL;
