<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Little Mermaid", $result);

        }

        function test_makeTitleCase_lowerCase()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "QuEEN vIcToria";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Queen Victoria", $result);
        }

        function test_makeTitleCase_ignoreArticle()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "once upon a time";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Once Upon a Time", $result);
        }

        function test_makeTitleCase_capitalizeFirstWord()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_capitalizeSmall()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "golden ore";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Golden Ore", $result);
        }
    }


 ?>
