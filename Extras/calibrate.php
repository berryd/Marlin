<?php

$tool = 9.5;

echo "G28".PHP_EOL."G1 F10000".PHP_EOL;
echo "G1 Z20".PHP_EOL;
echo "G1 X63 Y-63".PHP_EOL;
echo "G1 Z{$tool}".PHP_EOL."G4 S3".PHP_EOL."G1 Z20".PHP_EOL;
echo "G1 X-63 Y-63".PHP_EOL;
echo "G1 Z{$tool}".PHP_EOL."G4 S3".PHP_EOL."G1 Z20".PHP_EOL;
echo "G1 X0 Y63".PHP_EOL;
echo "G1 Z{$tool}".PHP_EOL."G4 S3".PHP_EOL."G1 Z20".PHP_EOL;
echo "G1 X0 Y0".PHP_EOL."M84".PHP_EOL;
