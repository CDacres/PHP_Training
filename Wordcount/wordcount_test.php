<?php
  use PHPUnit\Framework\TestCase;
  class WordcountTest extends TestCase
  {
    function testBreaksStringIntoArrayOfWords()
    {
      $test = new Wordcount;
      $this->assertTrue(is_array($test->breakIntoWords("This is a test sentence.")));
    }
    function testreturnArrayOfWordKeysandCountValues()
    {
      $test = new Wordcount;
      $array = array("this", "is", "a", "test", "sentence");
      $this->assertTrue(is_array($test->countWords($array)));
    }
  }
?>
