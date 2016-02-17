<?php
    class AnagramValidator
    {
        private $word;
        private $anagram_test;


        function __contruct($inputted_word, $inputted_anagram_test)
        {
            $this->$word = $inputted_word;
            $this->$anagram_test = $inputted_anagram_test;
        }

        function setWord($inputted_word)
        {
            $this->$word = $inputted_word;
        }
        function getWord()
        {
            return $this->word;
        }

        function setAnagramTest($inputted_anagram_test)
        {
            $this->$anagram_test = $inputted_anagram_test;
        }
        function getAnagramTest()
        {
            return $this->anagram_test;
        }

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
                array_push($actualAnagrams, $this);
                return true;
            } else {
                array_push($notAnAnagram, $this);
                return false;
            }
        }

        function save()
        {
            array_push($_SESSION['anagram_list'], $this);
        }

        static function getAll()
        {
           return $_SESSION['anagram_list'];
        }
    }

?>
