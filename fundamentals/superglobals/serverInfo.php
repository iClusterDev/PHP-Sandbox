<?php
  # superglobals
  # → Superglobals are built-in variables that are always available in all scopes
  # → http://php.net/manual/en/reserved.variables.php

  /*
    PHP_SELF
    SERVER_ADDR
    SERVER_NAME
    SERVER_SOFTWARE
    HTTP_HOST
    DOCUMENT_ROOT

    HTTP_USER_AGENT
    REMOTE_ADDR
    REMOTE_HOST
    REMOTE_PORT
    SCRIPT_FILENAME
    SERVER_PORT
  */

  $server = [
    'Script Name: ' => $_SERVER['PHP_SELF'],
    'Server Address: ' => $_SERVER['SERVER_ADDR'],
    'Server Name: ' => $_SERVER['SERVER_NAME'],
    'Server Id: ' => $_SERVER['SERVER_SOFTWARE'],
    'Request Header: ' => $_SERVER['HTTP_HOST'],
    'Script Directory: ' => $_SERVER['DOCUMENT_ROOT']
  ];

  # print_r($server);

  $client = [
    'Client System Info: ' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP: ' => $_SERVER['REMOTE_ADDR'],
    'Remote Port: ' => $_SERVER['REMOTE_PORT']
  ];

  # print_r($client);

?>