<?php
require_once "src/ScrabbleScore.php";
class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
{

    function test1_check_ScrabbleScore()
    {
        // Arrange
        $testWord = "a";
        $testScores = ['a'=>'1'];
        $test_scrabble = new Anagram($testWord, $testScores);

        // Act
        $result = $test_scrabble->calculateScore();

        // Assert
        $this->assertEquals('1', $result);
    }

}
?>
