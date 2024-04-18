<?php
function calcRectangleArea($length,$width){
$area=$length*$width;
return $area;
}

$length=6;
$width=4;

$rectangleArea=calcRectangleArea($length,$width);

echo"Area of rectangle is $length units and $width units is:$rectangleArea square units.";
?>