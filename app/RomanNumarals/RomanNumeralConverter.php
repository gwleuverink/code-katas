<?php

namespace App\RomanNumerals;

class RomanNumeralConverter
{
    /**
     * Roman numeral glyphs lookup table
     *
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    /**
     * Roman numeral conversion algorithm
     *
     * @param integer $number
     * @return string
     */
    public static function convert($number = null)
    {
        $solution = null;

        foreach (self::$lookup as $limit => $glyph) {
            while ($number >= $limit) {
                $solution .= $glyph;
                $number -= $limit;
            }
        }

        return $solution;
    }
}
