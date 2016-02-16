<?php
    class AnagramValidator
    {
        function checkAnagram($input, $comparison)
        {
            $user_input = preg_replace('/[^A-Za-z0-9\-]/', '', $input);
            $user_comparison = preg_replace('/[^A-Za-z0-9\-]/', '', $comparison);

            $user_input_lower = strtolower($user_input);
            $user_comparison_lower = strtolower($user_comparison);

            $input_array = str_split($user_input_lower);
            sort($input_array);
            $comparison_array = str_split($user_comparison_lower);
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
