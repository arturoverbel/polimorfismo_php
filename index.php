<?php

require 'Figura_equilatero.php';
require 'Cuadrado.php';
require 'Triangulo.php';

echo "<h1>Polimorfismo PHP</h1><br>";

$cuadrado = new Cuadrado(4);
$triangulo = new Triangulo(4);

echo "<hr>";

echo $cuadrado->perimetro();
echo "<br>";
echo $triangulo->perimetro();
echo "<br>";
echo "<br>";

echo $cuadrado->area();
echo "<br>";
echo $triangulo->area();
echo "<br>";
echo "<br>";

