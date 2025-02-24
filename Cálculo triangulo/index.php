<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo área e perímetro triangulo</title>
</head>
<body>
<?php
// Cálculo da área do triângulo usando base e altura

$base = 10;    
$altura = 5;   

$area = ($base * $altura) / 2;

// Exibindo o resultado da área
echo "Dados para o cálculo da área:<br>";
echo "Base: $base<br>";
echo "Altura: $altura<br>";
echo "Área do triângulo: $area<br><br>";

// Cálculo do perímetro do triângulo usando os três lados

$lado1 = 5;
$lado2 = 5;
$lado3 = 5;

// Para formar um triângulo, a soma de quaisquer dois lados deve ser maior que o terceiro lado.
// Verificação opcional:
if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
    $perimetro = $lado1 + $lado2 + $lado3;
    echo "Dados para o cálculo do perímetro:<br>";
    echo "Lado 1: $lado1<br>";
    echo "Lado 2: $lado2<br>";
    echo "Lado 3: $lado3<br>";
    echo "Perímetro do triângulo: $perimetro<br>";
} else {
    echo "Os valores dos lados escolhidos não formam um triângulo válido.<br>";
}
?>
    
</body>
</html>