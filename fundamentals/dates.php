<?php
  function toScreen($what) {
    echo $what;
    echo '<br>';
  }
  
  // dates
  toScreen(date());
  toScreen(date('d'));      // day
  toScreen(date('m'));      // month
  toScreen(date('Y'));      // year
  toScreen(date('l'));      // day of the week
  toScreen(date('Y/m/d'));  // format 1
  toScreen(date('Y-m-d'));  // format 2

  // → set the time zone
  date_default_timezone_set('Europe/London');
  
  // → times
  toScreen(date('h'));        // hour
  toScreen(date('i'));        // minutes
  toScreen(date('s'));        // seconds
  toScreen(date('a'));        // am or pm
  toScreen(date('h:i:s a'));  // format 1

  // → timestamp
  // https://en.wikipedia.org/wiki/Unix_time
  // http://php.net/manual/en/
  $timestamp1 = mktime(20, 29, 10, 1, 22, 79);
  toScreen($timestamp1);
  toScreen(date('y-m-d h:i:sa', $timestamp1));

  // → strtotime (returns a timestamp)
  $timestamp2 = strtotime('7.00pm March 22 2018');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+2 Days');
  toScreen($timestamp5);
  toScreen(date('y-m-d h:i:sa', $timestamp5));
?>