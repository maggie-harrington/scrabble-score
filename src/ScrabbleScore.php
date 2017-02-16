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
            $wordInput = strtoupper($wordInput);

            $scoreMap = array('A'=>'1');
            $scoreMap = array_flip($scoreMap);


            $wordScore = array_search($wordInput, $scoreMap);
            return $wordScore;
        }
    }

?>
