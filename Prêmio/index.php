<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<strong> <h2>Competidores com suas respectivas pontuações: </strong> </h2> <br>";
    echo "<br>";
    //Função de cálculo da pontuação
    function calcularPontuacao($premiacao){
        if($premiacao >= 90 && $premiacao <= 100){
            return "O prêmio é Ouro! ";
 }
    elseif ($premiacao >=75 && $premiacao < 90){
        return "O prêmio é Prata! ";
    }
 
    elseif ($premiacao >=50 && $premiacao < 75){
    return "O prêmio é Bronze! ";
    }
 
    else {
        return "Sem prêmio ";
    }
 
    }
 
    //Competidores com suas respectivas pontuações
 
    $competidor1 = ["João", 92];
 
    $nome = $competidor1[0];
 $pontuacao = $competidor1[1];
 
 echo $nome . ": " . calcularPontuacao($pontuacao) . "<br>";
 
 $competidor2 = ["Isabela", 82];
 
 $nome = $competidor2[0];
$pontuacao = $competidor2[1];
 
echo $nome . ": " . calcularPontuacao($pontuacao) . "<br>";
 
$competidor3 = ["Maria", 59];
 
$nome = $competidor3[0];
$pontuacao = $competidor3[1];
 
echo $nome . ": " . calcularPontuacao($pontuacao) . "<br>";
 
$competidor4 = ["Pedro", 43];
 
$nome = $competidor4[0];
$pontuacao = $competidor4[1];
 
echo $nome . ": " . calcularPontuacao($pontuacao) . "<br><br><br>";
 
   
                //Exemplo 2//
              
   $pontuacao = 90;
 
if ($pontuacao >= 90){
 
    echo "Parabéns você ganhou o prêmio de ouro!";
}
 
else if ($pontuacao >= 75  &&  $pontuacao < 90){
 
    echo "Parabéns você ganhou o prêmio de prata!";
}
 
else if ($pontuacao >= 50  &&  $pontuacao < 75){
 
    echo "Parabéns você ganhou o prêmio de bronze!";
 
}
 
else {  
   
    echo "Infelizmente você não receberá um prêmio";
 
}
    ?>

</body>
</html>