<?php


function sacar( array $conta, float $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']) {
        exibeMensagem('Você não pode sacar');
    }else {
        $conta['saldo'] -=$valorAsacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorAdepositar): array
{
    if ($valorAdepositar < 0) {
        exibeMensagem('Você não pode depositar um valor negativo');
    }else {
    $conta['saldo'] += $valorAdepositar;
    }
    return $conta;
}


function letrasMaisculas ( array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}


function exibeMensagem ( string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}
