<?php


$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'LMS-2313' => [
        'marca' => 'WV',
        'modelo' => 'Flog'
    ],
    'LMS-2314' => [
        'marca' => 'VZ',
        'modelo' => 'Ball'
    ]
    ];

foreach ($carros as $placa => $carro) {
    echo $placa . ':' . $carro['marca'] . PHP_EOL;
}