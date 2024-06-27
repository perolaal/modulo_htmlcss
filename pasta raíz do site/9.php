<?php
$num1 = 5;
$num2 = 10;
$num3 = 7;

$numbers = array($num1, $num2, $num3);
rsort($numbers);

echo "<h1>Números em ordem decrescente</h1>";
echo "<p>". implode(", ", $numbers) ."</p>";
?>