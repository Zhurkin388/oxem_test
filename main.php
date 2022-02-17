<?php

require_once 'classes/Farm.php';

const COW = 10;
const CHICKEN = 20;

$farm = new Farm(COW, CHICKEN);

echo $farm->init();
