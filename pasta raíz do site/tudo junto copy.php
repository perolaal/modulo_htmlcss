<?php
//professor plmds criar uma pasta pra cada 15 linha de codigo é mto chato
// Definindo variáveis
define("NOMECLIENTE","Marcos de Melo");
$endereco = 'Rua das Violetas, 320';
$bairro = 'Jd. Callegari';
$estado = 'SP';
$cep = '13.181-659';
$idade = 18; define("RG", "28290355-x");
$fone = '(19) 8888-9696';
?>
<html>
<head>
<title>Trabalhando com Variáveis</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf8">
</head>
<body>
<h1>Informações do Contato</h1>
<p>Nome completo: <?php echo NOMECLIENTE;?> </p>
<p>Endereço: <?php echo $endereco;?> </p>
<p><?php echo "$bairro - $estado - CEP: $cep";?> </p>
<p> Telefone: <?php echo $fone;?></p>
<h2>Documentos</h2>
<?php echo "<p>Idade: $idade | RG: " . RG . "</p>";?>
</body>
</html>

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

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<h1>Matrix</h1>";
echo "<table>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";

$nome = "João";
$idade = 25;
$salario = 1500.00;

echo "<h1>Informações</h1>";
echo "<p>Nome: $nome</p>";
echo "<p>Idade: $idade</p>";
echo "<p>Salário: $salario</p>";

$morte = 10;
$algmmemate= 15;

$sum = $morte + $algmmemate;

if ($sum > 20) {
    $result = $sum + 8;
} else {
    $result = $sum - 5;
}

echo "<h1>Resultado</h1>";
echo "<p>O resultado é: $result</p>";

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

$nome = "Maria";
$sexo = "F";
$idade = 22;

if ($sexo == "F" && $idade < 25) {
    echo "<p>$nome ACEITA</p>";
} else {
    echo "<p>$nome NÃO ACEITA</p>";
}

$num1 = 5;
$num2 = 10;
$num3 = 15;
$numbers = array($num1, $num2, $num3);
rsort($numbers);

echo "<h1>Números em ordem decrescente</h1>";
echo "<p>". implode(", ", $numbers) ."</p>";

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

echo "<h1>Data e Hora Atuais</h1>";
echo "<p>". date("d/m/Y H:i:s") ."</p>";

$estado = array(
    "RS" => "Porto Alegre",
    "SC" => "Florianópolis",
    "PR" => "Curitiba"
);

echo "<h1>Capitais dos Estados</h1>";
foreach ($estado as $sigla => $capital) {
    echo "<p>$sigla - $capital</p>";
}

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
echo "<h1>Área e Perímetro do Retângulo</h1>";
echo "<p>Área: insira a baixo!</p>";
echo "<p>Perímetro: insira a baixo!</p>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
   

        if ($lado1 < 0 || $lado2 < 0) {
        echo "<h1>Área e Perímetro do Retângulo</h1>";
        echo "<p>Área: insira a baixo!</p>";
        echo "<p>Perímetro: insira a baixo!</p>";
        echo "<p style='color: red;'>Não são permitidos números negativos!</p>";
        
    } elseif ($lado1 == 0|| $lado2 == 0) {
        echo "<h1>Área e Perímetro do Retângulo</h1>";
        echo "<p>Área: insira a baixo!</p>";
        echo "<p>Perímetro: insira a baixo!</p>";
        echo "<p style='color: red;'>Insira um valor diferente de 0!</p>";
        
    }else {
        $lado1 = (int) $lado1;
        $lado2 = (int) $lado2;

        $area = $lado1 * $lado2;
        $perimetro = 2 * ($lado1 + $lado2);

        echo "<h1>Área e Perímetro do Retângulo</h1>";
        echo "<p>Área: $area</p>";
        echo "<p>Perímetro: $perimetro</p>";
    }
  
}

?>
<body>
<form action="rectangle.php" method="post"required>
    <label for="lado1">Lado 1:</label required>
    <input type="number" id="lado1" name="lado1" required><br><br>
    <label for="lado2">Lado 2:</label required>
    <input type="number" id="lado2" name="lado2" required><br><br>
    <input type="submit" value="Calcular"required>
</form>
</body>