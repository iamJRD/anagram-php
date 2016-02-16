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


        // function test_removeNonLetters()
        // {
        //     //Arrange
        //     $new_AnagramValidator = new AnagramValidator;
        //     $input = "9fooD!/";
        //     $comparison = "dofo";
        //
        //     //Act
        //     $result= $new_AnagramValidator->checkAnagram($input, $comparison);
        //
        //     //Assert
        //     $this->assertEquals("food", $result);
        // }
        //
        // function test_separateStringLetters()
        // {
        //     // Arrange
        //     $new_AnagramValidator = new AnagramValidator;
        //     $input = "hi";
        //     $comparison = "ih";
        //
        //     // Act
        //     $result =$new_AnagramValidator->checkAnagram($input, $comparison);
        //
        //     // Arrange
        //     $this->assertEquals(array("h", "i"), $result);
        // }
        //
        // function test_sortArrayAlphabetically()
        // {
        //     // Arrange
        //     $new_AnagramValidator = new AnagramValidator;
        //     $input = "dog";
        //
        //     // Act
        //     $result =$new_AnagramValidator->checkAnagram($input);
        //
        //     // Arrange
        //     $this->assertEquals("dgo", $result);
        // }
        //
        // function test_combineLetters()
        // {
        //     // Arrange
        //     $new_AnagramValidator = new AnagramValidator;
        //     $input = "rat";
        //
        //     // Act
        //     $result = $new_AnagramValidator->checkAnagram($input);
        //
        //     // Assert
        //     $this->assertEquals("art", $result);
        // }
        // function test_compareStringtoString()
        // {
        //     // Arrange
        //     $new_AnagramValidator = new AnagramValidator;
        //     $input = "rat";
        //
        //     // Act
        //     $result = $new_AnagramValidator->checkAnagram($input);
        //
        //     // Assert
        //     $this->assertEquals("art", $result);
        // }
    }

?>
