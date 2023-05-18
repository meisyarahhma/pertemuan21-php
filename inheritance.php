<?php
class animal {
    public $name;
    public $jenis;

    public function __construct($name, $jenis){
        $this -> name =$name;
        $this -> jenis =$jenis;
        echo "Hewan ini adalah ".$name." jenis " .$jenis.". ";
    }
    public function getInfo(){
        echo "";
    }

}

class cat extends animal{
    public function __construct($name, $jenis="Kucing"){
        parent::__construct($name, $jenis="Kucing");
    }

    public function getInfo(){
        return "Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

class dog extends animal{
    public function __construct($name, $jenis="Anjing"){
        parent::__construct($name, $jenis="Anjing");
    }

    public function getInfo(){
        return "Anjing adalah hewan yang setia dan cerdas.";
    }
}

$animals = new animal("Harimau","karnivora");
echo $animals -> getInfo()."</br>";

$cats = new cat ("Kitty");
echo $cats-> getInfo() . "</br>";

$dogs= new dog ("Buddy");
echo $dogs -> getInfo() . "</br>";
