<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If, else, elseif</title>
</head>
<body>
    <?php 
    //condicional if

    function calcularPontuacao($premiacao){
        if($premiacao >= 90 ==100){
            return "O prêmio é Ouro! ";
 }
    elseif ($premiacao >=75 ==90){
        return "O prêmio é Prata! "; 
    }

    elseif ($premiacao >=50 <=75){
    return "O prêmio é Bronze! ";
    }

    else {
        return "Sem prêmio "
    }

    } 

    $competidor1 = "João", 92
    $competidor2 = "Pedro", 43 ;
    $competidor3 = "Isabela",82;
    $competidor4 = "Maria", 59;

    

    
    
    
    ?>
    
</body>
</html>