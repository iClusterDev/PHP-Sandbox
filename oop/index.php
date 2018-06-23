<?php
  // php uses access modifiers
  // the constructor chaining is possible using __construct (super in js)

  // Base class
  class Customer {
    private $id;
    private $name;
    private $email;
    private $balance;

    public function __construct($id, $name, $email, $balance) {
      $this->id      = $id;
      $this->name    = $name;
      $this->email   = $email;
      $this->balance = $balance;
    }

    public function __destruct() {
      echo 'Parent Destructor ran...';
    }

    public function getEmail() {
      return $this->email;
    }
  }


  // Derived Class from Base
  class Subscriber extends Customer {
    private $plan;

    public function __construct($id, $name, $email, $balance, $plan) {
      parent::__construct($id, $name, $email, $balance);
      $this->plan = $plan;
    }

    public function getPlan() {
      return $this->plan;
    }
  }


  $subscriber = new Subscriber(1, 'fabio', 'fabio@email.com', 0, 'basic');
  echo $subscriber->getEmail();
  echo $subscriber->getPlan();
