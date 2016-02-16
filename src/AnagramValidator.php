<?php
    class AnagramValidator
    {
        function checkAnagram($input, $comparison)
        {
            $user_input = preg_replace('/[^A-Za-z0-9\-]/', '', $input);
            $user_comparison = preg_replace('/[^A-Za-z0-9\-]/', '', $comparison);

            $input_array = str_split($user_input);
            sort($input_array);
            $comparison_array = str_split($user_comparison);
            sort($comparison_array);

            if($input_array == $comparison_array)
            {
                return true;
            } else {
                return false;
            }
        }
    }

?>
