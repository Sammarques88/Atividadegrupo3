<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Matemático</title>
</head>
<body>
     
    <?php
    echo "<strong>Cálculo Matemático</strong><br>";


    $altura = 5;
    $base = 10;
    $area = $base * $altura / 2;
    $lado1 = 6;
    $lado2 = 8;
    $lado3 = 10;
    $perimetro = $lado1 + $lado2 + $lado3;

    echo "A área do triangulo é: $area" . "<br>";

    echo "<br><strong>Calculando o perímetro</strong><br>";

    echo "O perimêtro do triangulo é de: $perimetro";
    

                  // exemplo 2 //
    echo "<br><br><br><br><strong>Exemplo 2</strong><br><br>";
    echo "<strong>Cálculo Matemático</strong><br>";

     function calcularAreaTringulo($base, $altura){
        return $base * $altura / 2;
     }
     $resultado = calcularAreaTringulo(10, 5);
     echo "A área do triangulo é: $resultado";

     echo "<br><br><strong>Calculando o perímetro</strong><br>"; 

     function calculandoAreaPerimetro($lado1, $lado2, $lado3){
        return $lado1 + $lado2 + $lado3;
     }
     $resultado = calculandoAreaPerimetro(6, 8, 10);
     echo "O perímetro do triangulo é de: $resultado";
     

    ?>
    