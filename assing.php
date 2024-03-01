<?php

abstract class ElectronicItems {
    public $name;
    public function __construct($name) {
            $this->name = $name;
    }
    abstract public function getType() : string;
}
    trait Make
    {
        public function getType() : string {
            return "$this->name";
        }
    }
    class Phones extends ElectronicItems {
        use Make;
    } 

    class MobilePhones extends Phones {
        use Make;
    }   

    class Iphone extends MobilePhones {
        use Make;
    }
    class Samsung extends MobilePhones {
        use Make;
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
       use Make;
    }
    class CordedPhone extends CordPhones {
        use Make;
    }

    class CordlessPhone extends CordPhones {
        use Make;
    } 

    $cordPhones = new CordPhones("Cord Phones");
    echo $cordPhones->getType(). PHP_EOL;

    $cordedPhone = new CordedPhone ("   -Corded Phone");
    echo $cordedPhone->getType(). PHP_EOL;

    $cordlessPhone = new CordlessPhone("   -Cordless Landline");
    echo $cordlessPhone->getType(). PHP_EOL;

    //soundSystems
    class SoundSystems extends ElectronicItems {
        use Make;
    }   

    class Earplugs extends SoundSystems {
        use Make;
    }  
    class Airpods extends Earplugs {
        use Make;
    }
    
    class Stereos extends SoundSystems{
        use Make;
    }
    class Jbl extends Stereos {
        use Make;
    }
    
    $soundSystems = new SoundSystems("\n-Sound Systems-\n");
    echo $soundSystems->getType(). PHP_EOL;

    $soundSystems = new Earplugs("Earplugs");
    echo $soundSystems->getType(). PHP_EOL;

    $airpods = new Airpods("   -AirPods");
    echo $airpods->getType(). PHP_EOL;

    $stereos = new Stereos("Stereos");
    echo $stereos->getType(). PHP_EOL;

    $jbl = new Jbl("   -JBL");
    echo $jbl->getType(). PHP_EOL;