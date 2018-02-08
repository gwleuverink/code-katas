<?php

namespace App\PrimeFactors;

class PrimeFactorGenerator
{
    /**
     * Undocumented function
     *
     * @param integer $number
     * @return array
     */
    public static function generate($number)
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
