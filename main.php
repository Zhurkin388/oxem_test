<?php

require_once "vendor/autoload.php";

use App\Chicken;
use App\Cow;
use App\Farm;

$animals = [new Cow(10), new Chicken(20)];

$farm = new Farm($animals);

echo $farm->init();
