<?php

use App\PrimeFactors\PrimeFactorGenerator;

require __DIR__ . '/../app/autoload.php';

// Dump primefactors...
echo '<b>Prime factors:</b> <br /> (example calculation for 216)';
d(PrimeFactorGenerator::generate(216));
