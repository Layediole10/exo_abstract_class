<?php  
require_once "Point2D.php";
require_once "Rectangle.php";
require_once "Cercle.php";
require_once "Carre.php";

$p1 = new Point2D(3, 3);
echo $p1->__toString(). "\n";
$p1->bouger(5, 3);
echo $p1->__toString();
echo "<br> <hr>";


$rec1 = new Rectangle(2, 3, $p1, 1);
echo $rec1;
echo "<br> <hr>";


$cerc1 = new Cercle(2, $p1, 2);
echo $cerc1;
echo "<br> <hr>";


$car3 = new Carre(2, $p1, 3);
echo $car3;




?>