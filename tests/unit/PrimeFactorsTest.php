<?php

use PHPUnit\Framework\TestCase;
use App\PrimeFactors\PrimeFactorGenerator;

final class PrimeFactorsTest extends TestCase
{
    /** @test */
    public function primefactor_should_return_empty_array_for_1()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(1);

        // Assert
        $this->assertEquals($primeFactors, []);
    }

    /** @test */
    public function primefactor_should_return_2_for_2()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(2);

        // Assert
        $this->assertEquals($primeFactors, [2]);
    }

    /** @test */
    public function primefactor_should_return_3_for_3()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(3);

        // Assert
        $this->assertEquals($primeFactors, [3]);
    }

    /** @test */
    public function primefactor_should_return_2_2_for_4()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(4);

        // Assert
        $this->assertEquals($primeFactors, [2, 2]);
    }

    /** @test */
    public function primefactor_should_return_5_for_5()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(5);

        // Assert
        $this->assertEquals($primeFactors, [5]);
    }

    /** @test */
    public function primefactor_should_return_2_3_for_6()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(6);

        // Assert
        $this->assertEquals($primeFactors, [2, 3]);
    }

    /** @test */
    public function primefactor_should_return_2_2_2_for_8()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(8);

        // Assert
        $this->assertEquals($primeFactors, [2, 2, 2]);
    }

    /** @test */
    public function primefactor_should_return_3_3_for_9()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(9);

        // Assert
        $this->assertEquals($primeFactors, [3, 3]);
    }

    /** @test */
    public function primefactor_should_return_2_2_5_5_for_100()
    {
        // Act
        $primeFactors = PrimeFactorGenerator::generate(100);

        // Assert
        $this->assertEquals($primeFactors, [2, 2, 5, 5]);
    }
}
