<?php
  # filters are commonly used for validation and sanitization
  # http:#php.net/manual/en/ref.filter.php


  # filter_has_var
  # checks for posted data
  # Accepted inputs INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV
  if (filter_has_var(INPUT_POST, 'data')) {
    echo 'Data found from Post';
  }
  else {
    echo 'Data Not Found from Post';
  }

  if (filter_has_var(INPUT_GET, 'data')) {
    echo 'Data found from Get';
  }
  else {
    echo 'Data Not Found from Get';
  }


  # filter_input
  # validate data
  # types of validation filters: http:#php.net/manual/en/filter.filters.validate.php
  if (filter_has_var(INPUT_POST, 'data')) {
    if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
      echo 'email is valid';
    }
    else {
      echo 'email is not valid';
    }
  }


  # filter_var
  # sanitize data
  # types of filters: http:#php.net/manual/en/filter.filters.sanitize.php
  if (filter_has_var(INPUT_POST, 'data')) {
    $email = filter_var($_POST['data'], FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'email is valid';
    }
    else {
      echo 'email is not valid';
    }
  }

  $var = '<script>alert(1)</script>';
  echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);


  # filter_input_array
  # when dealing with multiple fields
  # the validation/sanitization is defined into an array
  $filters = array(
    'data' => FILTER_VALIDATE_EMAIL,
    'data2' => array(
      'filter' => FILTER_VALIDATE_INT,
      'options' => array(
        'min_range' => 1,
        'max_range' => 100
      )
    )
  );
  print_r(filter_input_array(INPUT_POST, $filters));


  # filter_var_array
  # when dealing with multiple fields in a var array
  $myArray = array(
    'firstName' => 'Fabs',
    'lastName'  => 'Barr',
    'age'       => 3833
  );

  $arrayFilters = array(
    'firstName' => array(
      'filter'  => FILTER_CALLBACK,
      'options' => 'ucwords'
    ),
    'lastName'  => array(
      'filter'  => FILTER_CALLBACK,
      'options' => 'strtoupper'
    ),
    'age' => array(
      'filter'  => FILTER_VALIDATE_INT,
      'options' => array(
        'min_range' => 0,
        'max_range' => 100
      )
    )
  );
  print_r(filter_var_array($myArray, $arrayFilters));

?>

<!-- sends data through a post request -->
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
  <div>
    <label for="post">data</label>
    <input type="text" name="data">
  </div>
  <div>
    <label for="post">data2</label>
    <input type="text" name="data2">
  </div>
  <button type="submit">Submit</button>
</form>
<hr>

<!-- sends data through a get request -->
<a href="<?php echo $_SERVER['PHP_SELF'] . '?data=fabs'?>">Click Me</a>

