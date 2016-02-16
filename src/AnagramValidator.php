<?php
    class AnagramValidator
    {
        function checkAnagram($input)
        {
            $user_input = $input;

            $lowerCaseString = strtolower($user_input);

            $lettersOnly = preg_replace("/[^a-zA-Z]/", "", $lowerCaseString);

            $letterArray = str_split($lettersOnly, 1);

            sort($letterArray);

            return $letterArray;
        }





    }

?>
