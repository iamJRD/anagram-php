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
            $this->assertEquals("nap", $result);
        }
    }

?>