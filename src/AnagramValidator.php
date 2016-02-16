<?php
    class AnagramValidator
    {
        function checkAnagram($input)
        {
            $user_input = $input;

            $lowerCaseString = strtolower($user_input);

            $lettersOnly = preg_replace("/[^a-zA-Z]/", "", $lowerCaseString);

            return $lettersOnly;
        }





    }

?>
