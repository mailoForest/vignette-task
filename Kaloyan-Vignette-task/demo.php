<?php

use Driver\Driver;
use Vehicles\Vehicle;
use Vignettes\Vignette;
use Vignettes\CarAnnuallyVignettes;
require_once 'autoload.php';

$driver1 = new Driver('Strahil', 500, 13);

$v = new CarAnnuallyVignette(123);

var_dump($v);