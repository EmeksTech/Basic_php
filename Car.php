<?php

class Car{

    public $name;
    public $color;
    const Message = 'Good bye!';
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function get_name(){
        return $this->name;
    }
   private function get_color(){
        return $this->color;
    }
    protected function show_color(){
        return $this->get_color();
    }
}

class Benz extends Car{
    public $model;
    function __construct($name, $color, $model){
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
    }

    public function print_color(){
        return $this->show_color();
    }
    public function get_model(){
    {
        return $this->model;
    }

}
}

$benz = new Benz('Mercedes', 'Red', '2022');
echo $benz->get_name();
echo "<br>";
echo $benz->print_color();
echo "<br>";
$benz->model = 2011;
echo $benz->get_model();
echo "<br>";
echo benz::Message;
