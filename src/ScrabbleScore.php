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
            // Change input word to upper case
            $wordInputUpper = strtoupper($wordInput);

            $scoreMap = array('A'=>'1', 'E'=>'1', 'I'=>'1', 'O'=>'1', 'U'=>'1', 'L'=>'1', 'N'=>'1', 'R'=>'1', 'S'=>'1', 'T'=>'1', 'D'=>'2', 'G'=>'2', 'B'=>'3', 'C'=>'3', 'M'=>'3', 'P'=>'3', 'F'=>'4', 'H'=>'4', 'V'=>'4', 'W'=>'4', 'Y'=>'4', 'K'=>'5', 'J'=>'8', 'X'=>'8', 'Q'=>'10', 'Z'=>'10');

            // An array of the input word, each value is a different letter (keys are just index)
            $wordSplitByLetter = str_split($wordInputUpper);

            // Set initial score to 0
            $wordScore = 0;

            // Cycle through the values (letters) of the input word array. Each letter will match to a key in the $scoreMap array, and add the corresponding value to $wordScore.
            for ($i = 0; $i < sizeof($wordSplitByLetter); $i++) {
                $wordScore += $scoreMap[$wordSplitByLetter[$i]];
            }

            //This will work instead of above when word has only 1 letter
            // $wordScore = $scoreMap[$wordInputUpper];


            return $wordScore;
        }
    }
?>
