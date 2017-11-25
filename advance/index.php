<?php 

require __DIR__ . '/vendor/autoload.php';

use App\Models\Motor;

$motor = new Motor;
echo $motor->hidupkanMesin() . "\n";
echo $motor->matikanMesin() . "\n";