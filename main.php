<?php 
    abstract class Vehicle 
    {
        protected $type;
        
        public function __construct($type)
        {
            $this->type = $type;
        }
        abstract public function info();
    }
    trait Constructable
    {
        protected $model;
        public function __construct($type, $model)
        {
            parent::__construct($type);
            $this->model = $model;
        }
        
    }
    trait Printer
    {
        public function info()
        {
            return "Type: {$this->type}\nModel: {$this->model}\n";
        }
    }
    class Car extends Vehicle
    {
        use Constructable, Printer;
    } 
    class Buss extends Car 
    {
        protected $model;
        use Printer;
    }
    $buss = new Buss("Buss","Car");
    echo $buss->info(). PHP_EOL;


    // interface Main 
    // {
    //     public function add();
    // }
    // class Airplane implements Main 
    // {
    //   public function add() 
    //   {
    //     echo "Vehicle: Airplane\n";
    //   }
    // }
    // $main = new Airplane();
    // $main->add();
    