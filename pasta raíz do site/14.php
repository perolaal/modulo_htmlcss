<?php
$curso = array(
    "nome" => "PHP 5",
    "data" => "2022-01-01",
    "cargaHoraria" => 40,
    "local" => "Online"
);

echo "<h1>Informações do Curso</h1>";
foreach ($curso as $key => $value) {
    echo "<p>$key: $value</p>";
}
?>