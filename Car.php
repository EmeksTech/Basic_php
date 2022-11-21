<?php

class Car{

    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$volvo = new Car('Volvo', 'Red');
echo $volvo->get_name();
echo "<br>";
echo $volvo->get_color();



?>