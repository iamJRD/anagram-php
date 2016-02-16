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
            $this->assertEquals(array("a", "n", "p"), $result);
        }

        function test_removeNonLetters()
        {
            //Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "9fooD!/";

            //Act
            $result= $new_AnagramValidator->checkAnagram($input);

            //Assert
            $this->assertEquals(array("d", "f", "o", "o"), $result);
        }

        function test_separateStringLetters()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "hi";

            // Act
            $result =$new_AnagramValidator->checkAnagram($input);

            // Arrange
            $this->assertEquals(array("h", "i"), $result);
        }

        function test_sortArrayAlphabetically()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "dog";

            // Act
            $result =$new_AnagramValidator->checkAnagram($input);

            // Arrange
            $this->assertEquals(array("d", "g", "o"), $result);
        }
    }

?>
