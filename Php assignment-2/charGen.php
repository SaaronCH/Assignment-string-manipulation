<?php
$name="Gandalf ,Aragorn, Legolas";

$lowerCase=strtolower($name);
print_r (explode(" ",$lowerCase));
$x=strtolower("Gandalf");
$y=strtolower("Aragorn");
$z=strtolower("Legolas");
$a=$x.$y.$z;

echo"<br>"."$a";
?>