<?php
require_once "src/ScrabbleScore.php";
class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
{

    function test1_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'K';
        $test_scrabble = new ScrabbleScore($testWord);

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('5', $result);
    }

    function test2_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'k';
        $test_scrabble = new ScrabbleScore($testWord);

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('5', $result);
    }

    function test3_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'd';
        $test_scrabble = new ScrabbleScore($testWord);

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('2', $result);
    }

    function test4_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'at';
        $test_scrabble = new ScrabbleScore($testWord);

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('2', $result);
    }

    function test5_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'echo';
        $test_scrabble = new ScrabbleScore($testWord);

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('9', $result);
    }

}
?>
