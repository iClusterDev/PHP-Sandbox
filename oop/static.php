<?php

  // static method/prop does't need instantiation
  // to call static prop within a class use self:: 
  class User {
    private $username;
    private $password;
    public static $passwordLenght = 5;

    public static function getPasswordLenght() {
      return self::$passwordLenght;
    }
  }

  // to call a static method outside class use ::
  echo User::getPasswordLenght();

?>