<?php
$ano = 2020;//ano teste
function seculoano($ano)
{
    $numero = (intdiv($ano + 99, 100)); //soma 99 ao ano e divide retornando um numero inteiro de seculos
    return "Ano " . $ano . " = século = " . $numero;
}


var_dump(seculoano($ano));//display basico para teste
