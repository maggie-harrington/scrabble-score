<?php
require_once "src/ScrabbleScore.php";
class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
{

    function test1_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'A';
        $test_scrabble = new ScrabbleScore();

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('1', $result);
    }

    function test2_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'a';
        $test_scrabble = new ScrabbleScore();

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('1', $result);
    }

    function test3_check_ScrabbleScore()
    {
        // Arrange
        $test_scrabble = new ScrabbleScore();
        $testWord = 'd';

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('2', $result);
    }

    function test4_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'at';
        $test_scrabble = new ScrabbleScore();

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('2', $result);
    }

    function test5_check_ScrabbleScore()
    {
        // Arrange
        $testWord = 'echo';
        $test_scrabble = new ScrabbleScore();

        // Act
        $result = $test_scrabble->calculateScore($testWord);

        // Assert
        $this->assertEquals('9', $result);
    }

}
?>
