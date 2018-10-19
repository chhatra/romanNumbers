<?php

namespace Larowlan\RomanNumeral\Tests;

use PHPUnit\Framework\TestCase;
use Larowlan\RomanNumeral\RomanNumeralGenerator;


/**
 * Defines a class for testing roman numeral generation.
 *
 * @group Unit
 */
class RomanNumeralGeneratorTest extends TestCase {

  /**
   * Generator under test.
   *
   * @var \Larowlan\RomanNumeral\RomanNumeralGenerator
   */
  protected $generator;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->generator = new RomanNumeralGenerator();
  }

  /**
   * Tests UPPER CASE roman numeral generation.
   *
   * @dataProvider dataProviderUpperTestGeneration
   */
  public function testUpperGeneration($number, $expected) {
    $this->assertEquals($expected, $this->generator->generate($number));
  }

  /**
   * Data provider for testUpperGeneration().
   *
   * @return array
   *   Test cases.
   */
  public function dataProviderUpperTestGeneration() {
    return [
      1 => [1, "I"],
      2 => [2, "II"],
      3 => [3, "III"],
      4 => [4, "IV"],
      5 => [5, "V"],
      6 => [6, "VI"],
      9 => [9, "IX"],
      27 => [27, "XXVII"],
      48 => [48, "XLVIII"],
      59 => [59, "LIX"],
      93 => [93, "XCIII"],
      141 => [141, "CXLI"],
      163 => [163, "CLXIII"],
      402 => [402, "CDII"],
      575 => [575, "DLXXV"],
      911 => [911, "CMXI"],
      1024 => [1024, "MXXIV"],
      3000 => [3000, "MMM"],
    ];
  }

   /**
   * Tests lower case roman numeral generation.
   *
   * @dataProvider dataProviderLowerTestGeneration
   */
  public function testLowerGeneration($number, $expected) {
    $this->assertEquals($expected, $this->generator->generate($number, true));
  }

  /**
   * Data provider for testLowerGeneration().
   *
   * @return array
   *   Test cases.
   */
  public function dataProviderLowerTestGeneration() {
    return [
      1 => [1, "i"],
      2 => [2, "ii"],
      3 => [3, "iii"],
      4 => [4, "iv"],
      5 => [5, "v"],
      6 => [6, "vi"],
      9 => [9, "ix"],
      27 => [27, "xxvii"],
      48 => [48, "xlviii"],
      59 => [59, "lix"],
      93 => [93, "xciii"],
      141 => [141, "cxli"],
      163 => [163, "clxiii"],
      402 => [402, "cdii"],
      575 => [575, "dlxxv"],
      911 => [911, "cmxi"],
      1024 => [1024, "mxxiv"],
      3000 => [3000, "mmm"],
    ];
  }
}
