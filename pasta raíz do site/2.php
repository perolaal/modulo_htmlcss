<?php
// Defining variables
$nomeAluno = "Maria Fernanda";
$endereco = "Rua Violeta, 3025";
$cidade = "Campinas";
$estado = "São Paulo";
$cep = "13.536-459";
$telefone = "(19) 8182-9977";
$celular = "(19) 3854-3695";

// Defining constants
define("RG", "28.569.569-X");
define("CPF", "123.653.659-98");
define("PIS", "8452368888");

// Displaying the values
echo "<h1>Informações do Aluno</h1>";
echo "<p>Nome: $nomeAluno</p>";
echo "<p>Endereço: $endereco, $cidade - $estado - CEP: $cep</p>";
echo "<p>Telefone: $telefone | Celular: $celular</p>";
echo "<h2>Documentos</h2>";
echo "<p>RG: ". RG. " | CPF: ". CPF. " | PIS: ". PIS. "</p>";
?>