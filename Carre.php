<?php 
require_once "Point2D.php";
require_once "Forme.php";
require_once "Rectangle.php";


final class Carre extends Rectangle {

    protected int $_longueur;
    

    public function __construct(int $longuer, Point2D $centre, int $id)
    {
        $this->_longueur = $longuer;
        $this->centre = $centre;
        $this->id = $id;
        self::$compteur++;
        
    }


     public function perimetre(){
        return $this->_longueur *4;
     }

     public function surface(){
        return ($this->_longueur * $this->_longueur);
    }

    public function __toString()
    {
        return
         "{Carre :$this->id <br>".              
            "Centre: $this->centre <br>" .
            "Longueur:$this->_longueur <br>". 
            "surface:".self::surface()."<br>" .
            "perimetre:".self::perimetre()."
         }";

    }


}