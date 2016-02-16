<?php

    require_once 'src/AnagramValidator.php';

    class AnagramValidatorTest extends PHPUnit_Framework_TestCase
    {
        function test_matchingOneLetterWords()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "a";
            $comparison = "a";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input, $comparison);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_nonMatchingOneLetterWords()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "a";
            $comparison = "b";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input, $comparison);

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_matchingDisorderedMultiLetterWords()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "ab";
            $comparison = "ba";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input, $comparison);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_caseSensitiveMultiLetterWords()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "ab";
            $comparison = "Ba";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input, $comparison);

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_nonMatchingPunctuation()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "ab";
            $comparison = "ba!";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input, $comparison);

            // Assert
            $this->assertEquals(true, $result);
        }
    }

?>
