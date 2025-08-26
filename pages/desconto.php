<?php   
    
    $compra = filter_input (INPUT_GET,"compra",FILTER_VALIDATE_FLOAT);
    $nome = $_GET["nome"];
    $idade = filter_input (INPUT_GET,"idade",FILTER_VALIDATE_FLOAT);

    if (isset($_GET['situacao']))

        {
            $desconto = $compra*0.10;
            $pagar = $compra-$desconto;
            echo "Seu desconto foi de R$: " . $desconto . " O valor da compra foi de R$: " . $compra . " O valor a pagar foi de R$: " . $pagar; 
        } 

    else 

        {
            if ($nome == "" || $idade == "" || $compra == "")
            {
            echo "PREENCHA TODOS OS VALORES CORRETAMENTE";
            }
            else
                {
                    echo "SEM DESCONTO - Senhor ". $nome ." ,o valor da compra foi de R$: ". $compra . " e sua idade é: " . $idade;
                }   
        }

?>