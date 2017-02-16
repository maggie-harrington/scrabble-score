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

            $scoreMap = array('A'=>'1', 'E'=>'1', 'I'=>'1', 'O'=>'1', 'U'=>'1', 'L'=>'1', 'N'=>'1', 'R'=>'1', 'S'=>'1', 'T'=>'1', 'D'=>'2', 'G'=>'2', 'B'=>'3', 'C'=>'3', 'M'=>'3', 'P'=>'3', 'F'=>'4', 'H'=>'4', 'V'=>'4', 'W'=>'4', 'Y'=>'4', 'K'=>'5', 'J'=>'8', 'X'=>'8', 'Q'=>'10', 'Z'=>'10');
            // $scoreMap = array_flip($scoreMap);

            $wordScore = $scoreMap[$wordInput];
            // $wordScore = array_search($wordInput, $scoreMap);

            // $wordScore = array_keys($scoreMap, $wordInput);
            // // var_dump($wordScore);
            // $wordScore = array_flip($wordScore);
            // var_dump($wordScore);
            // $wordScore2 = array_search($wordInput, $wordScore);
            // var_dump($wordScore2);
            return $wordScore;
        }
    }

?>
