<?php

require_once ('funcoes.php');

$contasCorrente = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.987-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.654.789-12' => [
        'titular' => 'Alberto',
        'saldo'  => 300
    ]
];

$contasCorrente['123.456.789-10'] = sacar($contasCorrente['123.456.789-10'],500);
$contasCorrente['123.654.789-12'] = sacar($contasCorrente['123.654.789-12'],200);
$contasCorrente['123.456.987-11'] = depositar($contasCorrente['123.456.987-11'],-300);

letrasMaisculas($contasCorrente['123.456.987-11']);


unset ($contasCorrente['123.456.987-11']);

foreach($contasCorrente as $cpf => $conta) 
{
    ['titular' => $titular, 'saldo' =>$saldo] = $conta;
    exibeMensagem("$cpf $titular: $saldo");
}