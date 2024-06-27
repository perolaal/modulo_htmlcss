<?php

echo "<h1>Área e Perímetro do Retângulo</h1>";
echo "<p>Área: insira a baixo!</p>";
echo "<p>Perímetro: insira a baixo!</p>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];


        if ($lado1 < 0 || $lado2 < 0) {
       
        echo "<p style='color: red;'>Não são permitidos números negativos!</p>";
        
    } elseif ($lado1 == 0|| $lado2 == 0) {
      
        echo "<p style='color: red;'>Insira um valor diferente de 0!</p>";
        
    }else {
        $lado1 = (int) $lado1;
        $lado2 = (int) $lado2;

        $area = $lado1 * $lado2;
        $perimetro = 2 * ($lado1 + $lado2);

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