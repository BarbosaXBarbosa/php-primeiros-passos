<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Alberto',
    'saldo'  => 300
];

$contasCorrente = [
    123456789 => $conta1,
    123456987 => $conta2,
    123654789 => $conta3
];

/*foreach para cada */

foreach($contasCorrente as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}