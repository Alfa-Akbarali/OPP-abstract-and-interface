<?php

abstract class ElectronicItems {
    public $name;
    public function __construct($name) {
            $this->name = $name;
    }
    abstract public function getType() : string;
}

    class Phones extends ElectronicItems {
    public function getType() : string {
            return "$this->name";
        }
    } 

    class MobilePhones extends Phones {
    public function getType() : string {
            return "$this->name";
        }
    }   

    class Iphone extends MobilePhones {
        public function getType(): string {
                return "$this->name";
        }
    }
    class Samsung extends MobilePhones {
        public function getType() : string
            {
                return "$this->name";
            }
    }
    $phones = new Phones("\n-Phones-\n");
    echo $phones->getType(). PHP_EOL;

    $mobilePhones = new MobilePhones("Mobile Phones");
    echo $mobilePhones->getType(). PHP_EOL;
    
    $iphone = new Iphone("   -Iphone 14 pro max");
    echo $iphone->getType(). PHP_EOL;

    $samsung = new Samsung("   -Samsung S24 ultra");
    echo $samsung->getType(). PHP_EOL;

    //cordPhones
    class CordPhones extends Phones {
        public function getType() : string {
            return "$this->name";
        }
    }
    class CordedPhone extends CordPhones {
        public function getType() : string {
                return "$this->name";
            }
    }

    class CordlessPhone extends CordPhones {
        public function getType() : string {
            return "$this->name";
        }
    } 

    $cordPhones = new CordPhones("Cord Phones");
    echo $cordPhones->getType(). PHP_EOL;

    $cordedPhone = new CordedPhone ("   -Corded Phone");
    echo $cordedPhone->getType(). PHP_EOL;

    $cordlessPhone = new CordlessPhone("   -Cordless Landline");
    echo $cordlessPhone->getType(). PHP_EOL;

    //soundSystems
    class SoundSystems extends ElectronicItems {
            public function getType() : string {
                return "$this->name";
            }
    }   

    class Earplugs extends SoundSystems {
        public function getType() : string {
            return "$this->name";
        }
    }  

    class Stereos extends SoundSystems{
        public function getType() : string {
            return "$this->name";
        }
    }

    $soundSystems = new SoundSystems("Sound Systems");
    echo $soundSystems->getType(). PHP_EOL;

    $soundSystems = new Earplugs("Earplugs");
    echo $soundSystems->getType(). PHP_EOL;

    $stereos = new Stereos("Stereos");
    echo $stereos->getType(). PHP_EOL;