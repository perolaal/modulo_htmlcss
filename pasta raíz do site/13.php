<?php
$a = 2;
$b = 4;
$c = 6;
$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo "<h1>Valores das Variáveis</h1>";
echo "<p>a: $a</p>";
echo "<p>b: $b</p>";
echo "<p>c: $c</p>";
echo "<p>x: $x</p>";
echo "<p>y: $y</p>";
echo "<p>z: $z</p>";
?>