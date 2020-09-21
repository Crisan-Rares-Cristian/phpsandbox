<?php 
  class Person{
    private $name;
    private $email;

    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
      echo __CLASS__ . ' created<br>';
    }

    public function __destruct(){
      echo __CLASS__ . ' destroyed<br>';
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }

    public function setEmail($email) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->email = $email;
      }
    }

    public function getEmail() {
      return $this->email;
    }
  }

  $person1 = new Person('Rares Crisan', 'rares504@gmail.com');

  echo $person1->getName();
 /*  // Set name
  $person1->setEmail('rares@.com');
  $person1->setName('Rares Crisan');
  // Get name
  echo $person1->getName() . '<br>';
  echo $person1->getEmail(); */

  // $person1->name = 'John Doe';
  // echo $person1->name;

  class Customers extends Person{
    private $balance;

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getEmail() {
      return $this->email. '<br>';
    }
  }