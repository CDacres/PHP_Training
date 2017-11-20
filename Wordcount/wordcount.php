<?php
  class Wordcount {
    function breakIntoWords($sentence) {
      $punctuation = array(",", ";", ".", "?", "!");
      $sentence = strtolower($sentence);
      $sentence = str_replace($punctuation, "", $sentence);
      return explode(' ',$sentence);
    }
    function countWords($sentenceArray) {
      $words = array();
      foreach ($sentenceArray as $key => $value) {
        if (array_key_exists($value, $words)) {
          $words[$value]++;
        } else {
          $words[$value] = 1;
        }
      }
      return $words;
    }
    function showResult($wordNumArray) {
      foreach ($wordNumArray as $word => $num) {
        echo $word." ".$num.PHP_EOL;
      }
    }
  }

  $test = new Wordcount;
  $splitSentence = $test->breakIntoWords("This is a wordcount function written in PHP. PHP is a bit tricker than Ruby!");
  $result = $test->countWords($splitSentence);
  $test->showResult($result);
?>
