<?php 

use EsperoSoft\NumberFormat\NumberFormat;

require_once "vendor/autoload.php";


$number = NumberFormat::formatNumber(155);
echo $number."\n"; // 155

$number = NumberFormat::formatNumber("155");
echo $number."\n"; // 155

$number = NumberFormat::formatNumber(1555);
echo $number."\n"; // 1.6k

$number = NumberFormat::formatNumber(7895);
echo $number."\n"; // 7.9k

$number = NumberFormat::formatNumber(56987);
echo $number."\n"; // 57.0k

$number = NumberFormat::formatNumber(3656987);
echo $number."\n"; // 3.7M


$number = NumberFormat::formatNumber(6353656987);
echo $number."\n"; // 6.4Ma


