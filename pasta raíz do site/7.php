<?php
$num = 25;

if ($num % 10 == 0) {
    echo "<p>O número $num é divisível por 10.</p>";
} elseif ($num % 5 == 0) {
    echo "<p>O número $num é divisível por 5.</p>";
} elseif ($num % 2 == 0) {
    echo "<p>O número $num é divisível por 2.</p>";
} else {
    echo "<p>O número $num não é divisível por nenhum destes.</p>";
}
?>