<?php
    class ScrabbleScore
    {
        private $userInput;

        function __construct($wordInput)
        {
            $this->userInput = $wordInput;
        }

        function getUserInput()
        {
            return $this->userInput;
        }

        function calculateScore($wordInput)
        {
            $scoreMap = array('1'=>'A');
            $wordScore = array_search($wordInput, $scoreMap);
            return $wordScore;
        }
    }

?>
