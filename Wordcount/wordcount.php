<?php
  class Wordcount {
    function break_into_words($sentence) {
      $punctuation = array(",", ";", ".", "?", "!");
      $sentence = strtolower($sentence);
      $sentence = str_replace($punctuation, "", $sentence);
      return explode(' ',$sentence);
    }
    function count_words($sentenceArray) {
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
    function show_result($wordNumArray) {
      foreach ($wordNumArray as $word => $num) {
        echo $word." ".$num.PHP_EOL;
      }
    }
  }

  $test = new Wordcount;
  $splitSentence = $test->break_into_words("This is a wordcount function written in PHP. PHP is a bit tricker than Ruby!");
  $result = $test->count_words($splitSentence);
  $test->show_result($result);
?>
