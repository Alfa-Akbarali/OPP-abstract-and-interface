<?php

interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "animal: cat\n";
    }
  }
  class Dog implements Animal {
    public function makeSound() {
      echo "animal: dog\n";
    }
  }
  $cat = new Cat();
  $dog = new Dog();
  $animals = array($cat, $dog);
  foreach($animals as $animal) {
    $animal->makeSound();
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
    $black = new Blue("black");
    $white = new White("white");
    echo $white->intro() . PHP_EOL;
    echo $black->intro() . PHP_EOL;


   //////////electronieci_tems


   abstract class ElectronicItems {
    abstract public function getType();
}

class Phones extends ElectronicItems {
    public function getType() {
        return "Phones";
    }
}

class MobilePhones extends Phones {
    public function getType() {
        return "Mobile Phones";
    }
}

class CordPhones extends Phones {
    public function getType() {
        return "Cord Phones";
    }
}

class SoundSystems extends ElectronicItems {
    public function getType() {
        return "Sound Systems";
    }
}

class Earplugs extends SoundSystems {
    public function getType() {
        return "Earplugs";
    }
}

class Stereos extends SoundSystems{
     public function getType(){
         return "Stereos";
     }
}

$items = [
    new MobilePhones(),
    new CordPhones(),
    new Earplugs(),
    new Stereos()
];

foreach ($items as $item) {
    echo $item->getType() . "\n";
}


