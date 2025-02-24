<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// Função para calcular a pontuação do competidor
function calcularPontuacao($premiacao){
    if($premiacao >= 90 && $premiacao <= 100){
        return "O prêmio é Ouro! ";
    } elseif ($premiacao >=75 && $premiacao < 90){
        return "O prêmio é Prata! "; 
    } elseif ($premiacao >=50 && $premiacao < 75){
        return "O prêmio é Bronze! ";
    } else {
        return "Sem prêmio ";
    }
} 

// Competidor com sua pontuação
$competidor1 = ["João", 92];

// Corrigindo a extração dos valores do array
$nome = $competidor1[0];
$pontuacao = $competidor1[1];

// Exibir o resultado corretamente
echo $nome . ": " . calcularPontuacao($pontuacao) . "<br>";
?>
    
</body>
</html>