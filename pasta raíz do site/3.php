<?php
$livros = array(
    "8282" => array(
        "titulo" => "PHP - Páginas dinâmicas",
        "autor" => "Marcos de Melo",
        "paginas" => 360
    )
);

echo "<h1>Livros</h1>";
echo "<p>Código: ". $livros["8282"]["titulo"]. "</p>";
echo "<p>Autor: ". $livros["8282"]["autor"]. "</p>";
echo "<p>Páginas: ". $livros["8282"]["paginas"]. "</p>";
?>