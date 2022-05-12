<?php

$alunos2021 = [
    'vinicius',
    'joao',
    'ana',
    'roberto',
    'maria',
];

$novosAlunos = [
    'patricia',
    'nico',
    'kilderson',
    'daiane',
];


$alunos2022 = array_merge($alunos2021, $novosAlunos);

$alunos2022 = [...$alunos2021,'carlos vinicius', ...$novosAlunos];

var_dump($alunos2022);
