<?php
$var=1;
$precios=15.3;
$precios2=20;
$x=544;
$y=934.444;
echo"<br>";
echo "<div align=\"center\"><font size=10><font color=\"blue\">TIENDA DE SUPERMERCADO</font></font></div>";
echo"<br><br>";
echo "<font size=6><font color=\"black\">Estos son los productos en existencia: </font></font>";echo"<br><br>";
while($var <= 10){
    $var++;
}
echo "<font size=4><font color=\"orange\">Laptops y Computadoras : $var, precio $precios </font></font>";echo"<br>";
$mesas = 0;
do {
	echo "<font size=4><font color=\"green\">mesas : $mesas, precio $precios2 </font></font>";
} while ($mesas > 1);
echo"<br><br>";
echo "<font size=4><font color=\"red\">En esta sucursal una lavadora cuesta $x, mientras que en otras cuesta $y </font></font>";echo"<br><br>";
if ($x < $y) {
    echo " $x es menor $y";
}

echo"<br><br>";

if ($x > $y) {
    echo "$x es mayor que $y";
} else {
    echo "$y es mayor que $x";
}
echo "<br><br>";
echo "<font size=5><font color=\"blue\">VEN A LA SUCURSAL, ALGUNO DE LOS SIGUIENTES EMPLEADOS, TE ATENDERA </font></font>";echo"<br><br>";
$gente = array(
    array('nombre' => 'Carlos', 'Lopez' => 123),
    array('nombre' => 'Maria', 'Diaz' => 124));
var_dump($gente);

?>
# PRACTICA_2
