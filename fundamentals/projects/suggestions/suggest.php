<?php
  $people[] = "Anna";
  $people[] = "Brittany";
  $people[] = "Cinderella";
  $people[] = "Diana";
  $people[] = "Eva";
  $people[] = "Fiona";
  $people[] = "Gunda";
  $people[] = "Hege";
  $people[] = "Inga";
  $people[] = "Johanna";
  $people[] = "Kitty";
  $people[] = "Linda";
  $people[] = "Nina";
  $people[] = "Ophelia";
  $people[] = "Petunia";
  $people[] = "Amanda";
  $people[] = "Raquel";
  $people[] = "Cindy";
  $people[] = "Doris";
  $people[] = "Eve";
  $people[] = "Evita";
  $people[] = "Sunniva";
  $people[] = "Tove";
  $people[] = "Unni";
  $people[] = "Violet";
  $people[] = "Liza";
  $people[] = "Elizabeth";
  $people[] = "Ellen";
  $people[] = "Wenche";
  $people[] = "Vicky";

  $query = $_REQUEST['q'];

  $suggestion = '';

  if (strlen($query) > 0) {
    $query  = strtolower($query);
    $length = strlen($query);
    foreach ($people as $person) {
      if (stristr($query, substr($person, 0, $length))) {
        if (strlen($suggestion) === 0) {
          $suggestion = $person;
        }
        else {
          $suggestion .= ", $person";
        }
      }
    }
  }


  // this (echo) is actually sending the response text
  echo $suggestion === '' ? 'No Suggestions' : $suggestion;