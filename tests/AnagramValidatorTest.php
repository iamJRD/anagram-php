<?php

    require_once 'src/AnagramValidator.php';

    class AnagramValidatorTest extends PHPUnit_Framework_TestCase
    {
        function test_stringsToLowerCase()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "Nap";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input);

            // Assert
            $this->assertEquals(array("n", "a", "p"), $result);
        }

        function test_removeNonLetters()
        {
            //Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "9fooD!/";

            //Act
            $result= $new_AnagramValidator->checkAnagram($input);

            //Assert
            $this->assertEquals(array("f", "o", "o", "d"), $result);
        }

        function test_separateStringLetters()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "hello";

            // Act
            $result =$new_AnagramValidator->checkAnagram($input);

            // Arrange
            $this->assertEquals(array("h","e","l","l","o"), $result);
        }
    }

?>
