<?php
  # class has access modifiers (same meaning as c++)
  # public
  # private
  # protected
  # a class can inherit from a base class (like c++)
  # a class can have static properties and methods (like c++)
  class Person {

    # properties
    private $name;

    private $email;

    # constructor
    public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
    }

    # destructor
    public function __destruct() {
      echo __CLASS__ . ' destroyed';
    }

    # methods - getters and setters
    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    # magic methods
    public function getClassName() {
      return __CLASS__;
    }

    # static properties
    public static $ageLimit = 40;

    # static methods
    public static function getAgeLimit() {
      return self::$ageLimit;
    }

  }

  
  class Customer extends Person {
    private $balance;

    public function __construct($name, $email, $balance) {
      parent::__construct($name, $email);
      $this->balance = $balance;
    }

    public function getBalance() {
      return $this->balance;
    }

    public function setBalance($balance) {
      $this->balance = $balance;
    }

  }



  # $person1 = new Person('Fab Bar', 'fab@gmail.com');
  # echo $person1->getName();
  # echo $person1->getEmail();
  # echo $person1->getClassName();

  $customer1 = new Customer('Car Cam', 'carmen@gmail.com', 300);
  echo $customer1->getBalance();
  echo Customer::$ageLimit;
  echo Customer::getAgeLimit();

