<?php

  // starts the session
  // checks if there's anything already set
  // if true reset the session
  session_start();
  if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
  }
  if (isset($_SESSION['text'])) {
    unset($_SESSION['text']);
  }
  if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
  }


  // session set utility function
  function setSession($message = null, $email = null, $text = null) {
    if ($message !== null) $_SESSION['message'] = $message;
    if ($email !== null) $_SESSION['email'] = $email;
    if ($text !== null) $_SESSION['text'] = $text;
  }


  // message handler
  // this will be filled based on the flash
  // message to be sent
  function flashMessage($type = 'error', $msg = 'something went wrong') {
    $flashMessage = array( 'type' => $type, 'msg' => $msg );
    return $flashMessage;
  }


  // logger function
  function logger($logtext) {
    $handle = fopen('log.txt', 'a');
    $log = $logtext;
    fwrite($handle, $log);
    fclose($handle);
  }


  // form data processing 
  // and validation
  if (isset($_POST['submit'])) {

    $email = filter_var(htmlspecialchars($_POST['email']), FILTER_SANITIZE_EMAIL);
    $text =  htmlspecialchars(trim($_POST['text']));

    if (!empty($email) && !empty($text)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        setSession(flashMessage('success', 'Message Sent'));
        logger("$email - $text\n");
        header('Location: index.php');
      }
      else {
        setSession(flashMessage('error', 'Please use a valid Email'), $email, $text);
        header('Location: index.php');
      }
    }
    else {
      setSession(flashMessage('error', 'Please fill in all the Fields'), $email, $text);
      header('Location: index.php');
    }

  }