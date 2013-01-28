<?php

$dia = 5.0;

$dia_mm = (float) ($dia/0.039370);
$radius = floor($dia_mm/2);

$resolution = 180; //0-360
$hys = 10;

//$dial_indicator = 2; //Z offset
$dial_indicator = 10; //Z offset

$reductor = 0.04;

//$feedrate = 10000;
$feedrate = 5000;

echo "G21".PHP_EOL."G28".PHP_EOL."G1 F{$feedrate}".PHP_EOL;
echo "G1 X0 Y0 Z{$dial_indicator}".PHP_EOL;
echo "G1 X63 Y0 Z{$dial_indicator}".PHP_EOL;
echo "G1 X-63 Y0 Z{$dial_indicator}".PHP_EOL;
echo "G1 X0 Y0 Z{$dial_indicator}".PHP_EOL;
echo "G1 X0 Y63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X0 Y-63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X63 Y-63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X-63 Y-63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X-63 Y63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X63 Y63 Z{$dial_indicator}".PHP_EOL;
echo "G1 X63 Y-63 Z{$dial_indicator}".PHP_EOL;

$pi = 3.14159;
$to_deg = $pi/180;
$x = $y = 10;
$i = 0;

while($radius >= 1) {
    $j = $i*$to_deg;
    $x = round(cos($j)*$radius,3);
    $y = round(sin($j)*$radius,3);
    echo "G1 X{$x} Y{$y} Z{$dial_indicator}".PHP_EOL;
    $radius-=$reductor;
    $i+=(360/$resolution);
}
echo "G28".PHP_EOL."M84".PHP_EOL;
