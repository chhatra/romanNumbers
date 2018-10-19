<?php

namespace Larowlan\RomanNumeral;

/**
* Defines a class for generating roman numerals from integers.
*/
class RomanNumeralGenerator {

  /**
  * Generates a roman numeral from an integer.
  *
  * @param int $number
  *   Integer to convert.
  * @param bool $lowerCase
  *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
  *
  * @return string
  *   Roman numeral representing the passed integer.
  */
  public function generate(int $number, bool $lowerCase = FALSE) : string {

    // Convert the integer into an integer (just to make sure)
    $integer = intval($number);
    $result = '';

    // Create a lookup array that contains all of the Roman numerals.
    $lookup = array('M' => 1000,
      'CM' => 900,
      'D' => 500,
      'CD' => 400,
      'C' => 100,
      'XC' => 90,
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1);

    foreach($lookup as $roman => $value){
      // Determine the number of matches
      $matches = intval($integer/$value);

      // Add the same number of characters to the string
      $result .= str_repeat($roman,$matches);

      // Set the integer to be the remainder of the integer and the value
      $integer = $integer % $value;
    }

    // The Roman numeral should be built, return it
    return $lowerCase ? strtolower($result) : $result;

  }

}
