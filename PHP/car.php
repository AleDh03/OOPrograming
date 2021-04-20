<?php
require_once('Account.php');
//here I have the  base to created another elements, CLASS CAR
class Car{
    //To create var in PHP uses $
    public $id;
    public $license;
    public $driver;
    protected $passenger; //Protected has the same function as private, and sometimes its a must let private.


    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar(){
     echo "License:".$this->license." Driver:".$this->driver->name;  //line 16
    }
    //To obtain access to protected variable $passenger
    public function getPassenger() {
    return $this->passenger;
}
public function setPassenger($passenger) {
    if ($passenger == 4) {
        $this->passenger = $passenger;
    }
    else {
        echo "Necesitas asignar 4 pasajeros";
    }

}
}
?>