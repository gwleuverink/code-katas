<?php

use App\PrimeFactors\PrimeFactorGenerator;
use App\RomanNumerals\RomanNumeralConverter;

require __DIR__ . '/../app/autoload.php';

// Dump primefactors...
echo '<b>Prime factors:</b> <br /> (example calculation for 216)';
d(PrimeFactorGenerator::generate(216));

echo '<b>Roman numerals:</b> <br /> (example calculation for 1999)';
d(RomanNumeralConverter::convert(1999));
