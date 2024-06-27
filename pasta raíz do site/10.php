<?php
$a = 5;
$b = 6;
$c = 7;

if ($a == $b && $b == $c) {
    echo "<p>O triângulo é equilátero.</p>";
} elseif ($a == $b || $b == $c || $a == $c) {
    echo "<p>O triângulo é isósceles.</p>";
} else {
    echo "<p>O triângulo é escaleno.</p>";
}
?>