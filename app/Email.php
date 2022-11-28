<?php 
namespace App;

require_once(__DIR__.'/../traits/Notifiable.php');
use \Traits\Notifiable; //importing the namespace
class Email{
    //use \Traits\Notifiable// first method
    use Notifiable;
}



?>