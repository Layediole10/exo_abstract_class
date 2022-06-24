<?php  
require_once "Point2D.php";
require_once "Rectangle.php";

$p1 = new Point2D(2, 3);
// echo $obj->_toString(). "\n";
// $obj->bouger(5, 3);
// echo $obj->_toString();

$rec1 = new Rectangle(2, 3, $p1, 1);
echo $rec1;





?>