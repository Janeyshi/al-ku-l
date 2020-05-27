<?php
  /**
   *
   */
  class Account
  {

    private $username;
    private $password;
    private $email;
    private $firstName;
    private $middleName;
    private $lastName;
    private $suffix;

    public function instantiate(){
       $this->username = "";
       $this->password = "";
       $this->email = "";
       $this->firstName = "";
       $this->middleName = "";
       $this->lastName = "";
       $this->suffix = "";
     }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }
  }

 ?>
