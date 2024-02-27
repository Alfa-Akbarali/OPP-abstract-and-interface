<?php

interface Animal 
{
    public function makeAnimal();
}
  
  class Cat implements Animal 
  {
    public function makeAnimal() 
    {
      echo "animal: cat\n";
    }
  }
  class Dog implements Animal 
  {
    public function makeAnimal() 
    {
      echo "animal: dog\n";
    }
  }

  $cat = new Cat();
  $dog = new Dog();
  $animals = array($cat, $dog);

  foreach($animals as $animal) 
  {
    $animal->makeAnimal();
  }



    //----abstract class
    abstract class Color 
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro() : string ;
    }
    class White extends Color
    {
        public function intro() : string{
            return "Your color is $this->name!";
        }
    } 
    class Blue extends Color 
    {
        public function intro() : string
        {
            return "Your color is $this->name!";
        }
    }
    $blue = new Blue("blue");
    $white = new White("white");
    echo $white->intro() . PHP_EOL;
    echo $blue->intro() . PHP_EOL;
