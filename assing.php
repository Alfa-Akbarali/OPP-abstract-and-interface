<?php

abstract class ElectronicItems {
    public $name;
    public function __construct($name) {
            $this->name = $name;
    }
    abstract public function getType() : string;
}
echo "\n";
class Phones extends ElectronicItems {
   public function getType() : string {
        return "Phones";
    }
} 
echo "-Phones-\n";
class MobilePhones extends Phones {
  public function getType() : string {
        return "Mobile Phones";
    }
}
   echo " Mobile Phones\n";
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
    $iphone = new Iphone("   -Iphone 14 pro max");
    $samsung = new Samsung("   -Samsung S24 ultra");
    echo $iphone->getType(). PHP_EOL;
    echo $samsung->getType(). PHP_EOL;

class CordPhones extends Phones {
    public function getType() : string {
        return "Cord Phones";
    }
}
    echo " Cord Phones\n";

class cordedPhone extends CordPhones {
    public function getType() : string {
            return "$this->name";
        }
}
    $cordedPhone = new cordedPhone("   -Corded Landline");
    echo $cordedPhone->getType(). PHP_EOL;
class CordlessPhone extends CordPhones {
    public function getType() : string {
        return "$this->name";
    }
}
    $cordlessPhone = new CordlessPhone("   -Cordless Landline");
    echo $cordlessPhone->getType(). PHP_EOL;
   
class SoundSystems extends ElectronicItems {
        public function getType() : string {
            return "Sound Systems";
        }
}
    echo "Sound Systems\n";
class Earplugs extends SoundSystems {
    public function getType() : string {
        return "Earplugs";
    }
}
    echo "Earplugs\n";
class Stereos extends SoundSystems{
    public function getType() : string {
        return "Stereos";
    }
}
    echo "Stereos\n";