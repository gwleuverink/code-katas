<?php

use App\PrimeFactors\PrimeFactorGenerator;

require __DIR__ . '/../app/autoload.php';

// Dump primefactors...
echo '<b>Prime factors:</b>';
d(PrimeFactorGenerator::generate());
