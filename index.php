<?php

interface Animal 
{
    public function makeAnimal();
}
  trait Make 
  {
    protected $type;
    public function __construct($type) {
      $this->type = $type;
    }
  }
  class Cat implements Animal 
  {
    use Make;
    public function makeAnimal()
    {
      return "This is a {$this->type} animal.";
    }
  }
  class Dog implements Animal 
  {
    use Make;
    public function makeAnimal()
    {
      return "This is a {$this->type} animal.";
    }
  }

  $cat = new Cat("Cat");
  $dog = new Dog("Dog");
  $animals = array($cat, $dog);

  foreach($animals as $animal) 
  {
    $animal->makeAnimal();
  }



    //----abstract class
    // abstract class Color 
    // {
    //     public $name;
    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }
    //     abstract public function intro() : string ;
    // }
    // class White extends Color
    // {
    //     public function intro() : string{
    //         return "Your color is $this->name!";
    //     }
    // } 
    // class Blue extends Color 
    // {
    //     public function intro() : string
    //     {
    //         return "Your color is $this->name!";
    //     }
    // }
    // $blue = new Blue("blue");
    // $white = new White("white");
    // echo $white->intro() . PHP_EOL;
    // echo $blue->intro() . PHP_EOL;
