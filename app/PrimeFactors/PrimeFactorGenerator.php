<?php

namespace App\PrimeFactors;

class PrimeFactorGenerator
{
    /**
     * Generate an array of prime factors for $number
     *
     * @param integer $number
     * @return array
     */
    public static function generate($number = 0)
    {
        $primes = [];

        for ($divisor = 2; $number > 1; $divisor++) {
            while ($number % $divisor == 0) {
                $primes[] = $divisor;

                $number /= $divisor;
            }
        }

        return $primes;
    }
}
