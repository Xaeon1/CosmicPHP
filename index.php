<?php
abstract class SpaceObject{
    private $name;
    private $coordinateX; 
    private $coordinateY;
    private $coordinateZ;
    private $mass;

    public function __construct($name, $coordinateX, $coordinateY, $coordinateZ, $mass){
        $this -> name = $name;
        $this -> coordinateX = $coordinateX;
        $this -> coordinateY = $coordinateY;
        $this -> coordinateZ = $coordinateZ;
        $this -> mass = $mass;
    }

    #getters

    function get_name(){
        return $this -> name;
    }

    function get_coordinateX(){
        return $this -> coordindateX;
    }

    function get_coordinateY(){
        return $this -> coordindateY;
    }

    function get_coordinateZ(){
        return $this -> coordindateZ;
    }

    function get_mass(){
        return $this -> mass;
    }

    #setters

    function set_name(){
        return $this -> name;
    }

    function set_coordinateX(){
        return $this -> coordinateX;
    }

    function set_coordinateY(){
        return $this -> coordinateY;
    }

    function set_coordinateZ(){
        return $this -> coordinateZ;
    }

    function set_mass(){
        return $this -> mass;
    }

    function displayInfo(){
        echo "Name: " . $this -> name . PHP_EOL; 
        echo "Coordinates: (" . $this -> coordinateX . "," . $this -> coordinateY . "," . $this -> coordinateZ . ")" . PHP_EOL;
        echo "Mass: " . $this -> mass . PHP_EOL;
    }
}

abstract class OrbitableSpaceObject extends SpaceObject{
    $orbiters = [];

    public function __construct($name, $coordinateX, $coordinateY, $coordinateZ, $mass){
        parent::__construct($name, $coordinateX, $coordinateY, $coordinateZ, $mass);
    }

    function addOrbiter(SpaceObject $orbiter){
        
    }
}

class Satellite extends SpaceObject{

}
?>