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
    class Car extends Vehicle
    {
        use Constructable;
        public function info()
        {
            return "Type: {$this->type} Model: {$this->model}\n";
        }
    } 
    class Buss extends Car 
    {
        protected $model;
        public function info()
        {
            return "Type: {$this->type};\nModel: {$this->model};\n";
        }
    }
    $buss = new Buss("Buss","Car");
    echo $buss->info(). PHP_EOL;