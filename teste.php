<?php
require_once('vendor/autoload.php');

use Tayron\IntegerObject;

try{
    echo '<pre>';
    
    $numero = new IntegerObject(10);
    $numero->exponentiation(new IntegerObject(3));
    var_dump($numero);
    

}catch(Exception $e){
    echo $e->getMessage();   
}