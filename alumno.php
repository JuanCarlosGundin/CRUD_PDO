<?php 
class Alumno{
  public $email;  
  public $name;
  public $surname;
  public $age;
 public function __construct($email,$name,$surname,$age){
    $this->email=$email;
    $this->name=$name;
    $this->surname=$surname;
    $this->age=$age;
 }

}