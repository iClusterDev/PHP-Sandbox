<?php

  # utility function
  function display($what) {
    echo $what . '<br>';
  }
  
  # substr()
  $text1 = 'Hello world';
  display(substr($text1, 6));
  
  # strlen()
  display(strlen($text1));

  # strpos() → first occurrence
  display(strpos($text1, 'world'));

  # strrpos() → last occurrence
  display(strrpos($text1, 'o'));

  # trim()
  $text2 = 'hello world                ';
  display(strlen($text2));
  display(strlen(trim($text2)));

  # strtoupper()
  display(strtoupper($text1));

  # strtolower()
  display(strtolower($text1));

  # ucwords() → capitalize first words
  display(ucwords($text1));

  # str_replace()
  display(str_replace('world', 'everyone', $text1));

  # is_string() → returns 1 if true
  $array1 = array(
    true,
    1.11,
    'aaa',
    22,
    false,
    'fabs'
  );
  foreach ($array1 as $item) {
    if (is_string($item)) {
      display($item);
    }
  }

  # gzcompress() → compress a string
  $text3 = 'Hey Brad, is it possible a chapter about CRON JOB? How to run a script on the server? I want to delete photos older than 30 days and I thought do this with cron task, but I have no idea about how to do. And a big question, how to save files below the public_html to be safe? And how to access them in the cms? Thanks a lot.';
  $compressed =  gzcompress($text3);
  display($compressed);

  # gzuncompress() → uncompress
  $uncompressed = gzuncompress($compressed);
  display($uncompressed);

?>