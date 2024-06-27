<?php
$estado = array(
    "RS" => "Porto Alegre",
    "SC" => "Florianópolis",
    "PR" => "Curitiba"
);

echo "<h1>Capitais dos Estados</h1>";
foreach ($estado as $sigla => $capital) {
    echo "<p>$sigla - $capital</p>";
}
?>