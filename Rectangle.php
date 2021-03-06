<?php 
require_once "Point2D.php";
require_once "Forme.php";
class Rectangle extends Forme {

    protected int $_longueur;
    protected int $_largeur;

    public function __construct(int $longuer, int $largeur, Point2D $centre, int $id)
    {
        $this->_longueur = $longuer;
        $this->_largeur = $largeur;
        $this->centre = $centre;
        $this->id = $id;
        self::$compteur++;
        
    }


     public function perimetre(){
        return ($this->_longueur + $this->_largeur)*2;
     }

     public function surface(){
        return ($this->_longueur * $this->_largeur);
    }

    public function __toString()
    {
        return
         "{Rectangle :$this->id <br>".              
            "Centre: $this->centre <br>" .
            "Largeur:$this->_largeur <br>". 
            "Longueur:$this->_longueur <br>" .
            "surface:".self::surface()."<br>" .
            "\n perimetre:".self::perimetre()."
         }";

    }

    public function getLongueur(){
        return $this->_longueur;
    }

    public function getLargeur(){
        return $this->_largeur;
    }


}






?>