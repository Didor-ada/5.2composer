<?php

require_once __DIR__ . '/../vendor/autoload.php';

$singe =  new App\Wcs\Hello();
echo $singe->talk();