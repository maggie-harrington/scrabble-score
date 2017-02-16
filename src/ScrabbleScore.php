<?php
    class ScrabbleScore
    {

        function calculateScore($wordInput)
        {
            $scoreMap = array('1'=>'A');
            $wordScore = array_search($wordInput, $scoreMap);
            return $wordScore;
        }
    }

?>
