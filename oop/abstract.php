<?php
  // abstract classes and methods
  // cannot instantiate an abstract class
  // can derive classes from abstract class
  // abstract methods are only declared in abstract classes 
  // ... but abstract methods are defined in extended classes

  // abstract base class
  abstract class Entity {
    protected $name;
    protected $xCoord;
    protected $yCoord;

    public function __construct($name, $xCoord, $yCoord) {
      $this->name   = $name;
      $this->xCoord = $xCoord;
      $this->xCoord = $yCoord;
    }
    
    abstract public function getName();
    abstract public function getPosition();
  }

  // base class that extends the abstract class
  class Shape extends Entity {
    private $color;

    public function __construct($name, $xCoord, $yCoord, $color) {
      parent::__construct($name, $xCoord, $yCoord);
      $this->color  = $color;
    }

    public function getName() {
      return $this->name;
    }

    public function getPosition() {
      return array($this->xCoord, $this->yCoord);
    }
  }

  // derived from base
  class Cube extends Shape {
    private $vertices;
    private $faces;

    public function __construct($name, $xCoord, $yCoord, $color) {
      parent::__construct($name, $xCoord, $yCoord, $color);
      $this->vertices = 8;
      $this->faces = 6;
    }

    public function getVertices() {
      return $this->vertices;
    }

    public function getFaces() {
      return $this->faces;
    }
  }

  // derived from base
  class Piramid extends Shape {
    private $vertices;
    private $faces;

    public function __construct($name, $xCoord, $yCoord, $color) {
      parent::__construct($name, $xCoord, $yCoord, $color);
      $this->vertices = 5;
      $this->faces = 5;
    }

    public function getVertices() {
      return $this->vertices;
    }

    public function getFaces() {
      return $this->faces;
    }
  }



  $piramid = new Piramid('piramid1', 5, 6, 'red');
  echo $piramid->getName() . '</br>';
  echo var_dump($piramid->getPosition()) . '</br>';
  echo $piramid->getVertices() . '</br>';
  echo $piramid->getFaces() . '</br>';


  $cube = new Cube('cube1', 5, 6, 'red');
  echo $cube->getName() . '</br>';
  echo var_dump($cube->getPosition()) . '</br>';
  echo $cube->getVertices() . '</br>';
  echo $cube->getFaces() . '</br>';

?>