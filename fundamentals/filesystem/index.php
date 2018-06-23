<?php

  # utility function
  function toScreen($what) {
    echo $what . '<br>';
  }

  # dummy variables
  $path = '/dir1/myfile.txt';
  $file = 'myFile.txt';




  # file/path functions

  # basename() → returns filename, with or without extension
  toScreen(basename($path));
  toScreen(basename($path, '.txt'));

  # dirname() → directory from path
  toScreen(dirname($path));

  # realpath() → absolute path
  toScreen(realpath($file));

  # file_exists() → check if file exists
  toScreen(file_exists($file));

  # is_file() → checks if is file (file_exists can be used for a folder as well)
  toScreen(is_file($file));

  # is_writable() → 1 if file is writable
  toScreen(is_writable($file));

  # is_readable() → 1 if file is readable
  toScreen(is_readable($file));

  # filesize() → get file size (in bytes)
  toScreen(filesize($file));




  # manipulating files

  # create a folder
  mkdir('testing');

  # delete a directory (if empty)
  rmdir('testing');

  # copy a file
  copy('myfile.txt', 'myfile_copy.txt');

  # rename a file
  rename('myfile_copy.txt', 'myfile2.txt');

  # delete a file
  unlink('myfile2.txt');

  # read a file
  $fileContent = file_get_contents('myfile.txt');
  toScreen($fileContent);

  # write a string to the file (replaces the content)
  file_put_contents('myfile.txt', 'Goodbye');

  # append to file
  # → first get
  # → then append
  # → then write back
  $fileContent = file_get_contents($file);
  $fileContent .= ' World';
  file_put_contents($file, $fileContent);




  # using a handle to the file
  # this is to run multiple operations on the file

  # open a file for readonly
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  toScreen($data);
  fclose($handle);


  # open file for writing
  $handle = fopen('test.txt', 'w');
  $text = "fab bar\n";
  fwrite($handle, $text);
  $text = "car cam\n";
  fwrite($handle, $text);
  fclose($handle);

  