<?php 
require_once "Point2D.php";
abstract class Forme {

     protected Point2D $centre;
     protected int $id;
     static protected int $compteur = 0;

    abstract public function surface();
    abstract public function perimetre();

    public function bouger($dx, $dy){
         $this->centre->bouger($dx, $dy);
    }

}







?>