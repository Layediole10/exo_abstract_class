<?php 
require_once "Point2D.php";
require_once "Forme.php";
class Cercle extends Forme {

    protected int $_rayon;
    // const PI = 3.14;
    

    public function __construct(int $rayon, Point2D $centre, int $id)
    {
        $this->_rayon = $rayon;
        $this->centre = $centre;
        $this->id = $id;
        self::$compteur++;
        
    }


     public function perimetre(){
        return round(($this->_rayon * 2 * M_PI), 2);
     }

     public function surface(){
        return  round((M_PI * pow($this->_rayon, 2)), 2);
    }

    public function __toString()
    {
        return
        
         "{cercle :$this->id <br>".              
            "Centre: $this->centre <br>" .
            "Rayon:$this->_rayon <br>". 
            "surface:".self::surface()."<br>" .
            "perimetre:".self::perimetre()."
         }";
    }

    public function getRayon(){
        return $this->_rayon;
    }


}