<?php


namespace SimplifiedMagento\FirstModule\Model;


class Student
{
    protected $name;
    protected $age;
    private   $scores;
  public function __construct($name = "Alex", $age=20,
                              array $scores= array('maths'=>92, 'programing'=>90
      ))
  {
      $this->name = $name;
      $this->age = $age;
      $this->scores =$scores;
  }
}