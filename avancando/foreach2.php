<?php


$contasCorrente = [
    123456789 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    123456987 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    123654789 => [
        'titular' => 'Alberto',
        'saldo'  => 300
    ]
];

$contasCorrente[123456123] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

/*foreach para cada */

foreach($contasCorrente as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}