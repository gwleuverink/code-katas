<?php

use PHPUnit\Framework\TestCase;
use App\RomanNumerals\RomanNumeralConverter;

final class RomanNumeralsTest extends TestCase
{
    /** @test */
    public function converter_returns_null_for_null()
    {
        $numeral = RomanNumeralConverter::convert();

        $this->assertEquals($numeral, null);
    }

    /** @test */
    public function converter_calculates_numeral_for_1()
    {
        $numeral = RomanNumeralConverter::convert(1);

        $this->assertEquals($numeral, 'I');
    }

    /** @test */
    public function converter_calculates_numeral_for_2()
    {
        $numeral = RomanNumeralConverter::convert(2);

        $this->assertEquals($numeral, 'II');
    }

    /** @test */
    public function converter_calculates_numeral_for_4()
    {
        $numeral = RomanNumeralConverter::convert(4);

        $this->assertEquals($numeral, 'IV');
    }

    /** @test */
    public function converter_calculates_numeral_for_5()
    {
        $numeral = RomanNumeralConverter::convert(5);

        $this->assertEquals($numeral, 'V');
    }

    /** @test */
    public function converter_calculates_numeral_for_6()
    {
        $numeral = RomanNumeralConverter::convert(6);

        $this->assertEquals($numeral, 'VI');
    }

    /** @test */
    public function converter_calculates_numeral_for_10()
    {
        $numeral = RomanNumeralConverter::convert(10);

        $this->assertEquals($numeral, 'X');
    }

    /** @test */
    public function converter_calculates_numeral_for_11()
    {
        $numeral = RomanNumeralConverter::convert(11);

        $this->assertEquals($numeral, 'XI');
    }

    /** @test */
    public function converter_calculates_numeral_for_20()
    {
        $numeral = RomanNumeralConverter::convert(20);

        $this->assertEquals($numeral, 'XX');
    }

    /** @test */
    public function converter_calculates_numeral_for_50()
    {
        $numeral = RomanNumeralConverter::convert(50);

        $this->assertEquals($numeral, 'L');
    }

    /** @test */
    public function converter_calculates_numeral_for_100()
    {
        $numeral = RomanNumeralConverter::convert(100);

        $this->assertEquals($numeral, 'C');
    }

    /** @test */
    public function converter_calculates_numeral_for_500()
    {
        $numeral = RomanNumeralConverter::convert(500);

        $this->assertEquals($numeral, 'D');
    }

    /** @test */
    public function converter_calculates_numeral_for_1000()
    {
        $numeral = RomanNumeralConverter::convert(1000);

        $this->assertEquals($numeral, 'M');
    }

    /** @test */
    public function converter_calculates_numeral_for_1999()
    {
        $numeral = RomanNumeralConverter::convert(1999);

        $this->assertEquals($numeral, 'MCMXCIX');
    }

    /** @test */
    public function converter_calculates_numeral_for_4990()
    {
        $numeral = RomanNumeralConverter::convert(4990);

        $this->assertEquals($numeral, 'MMMMCMXC');
    }
}
