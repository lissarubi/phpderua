<?php

class User{

  private $name;
  private $email;

  function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  function getName(){
    return $this->name;
  }

  function setName($name){
    $this->name = $name;
  }

  function getEmail(){
    return $this->email;
  }

  function setEmail($email){
    $this->email = $email;
  }
}
