<?php
    class AnagramValidator
    {
        function checkAnagram($input)
        {
            $user_input = $input;

            $lowerCaseString = strtolower($user_input);

            $lettersOnly = preg_replace("/[^a-zA-Z]/", "", $lowerCaseString);

            $lettersArray = str_split($lettersOnly, 1);

            sort($lettersArray);

            $combinedString = implode($lettersArray);

            return $combinedString;
        }





    }

?>
