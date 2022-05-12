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

array_push($alunos2022, 'alice', 'bob', 'charlie');
$alunos2022 [] = 'luiz';

array_unshift($alunos2022, 'stephane', 'rafaela') . PHP_EOL;

echo array_shift($alunos2022) . PHP_EOL; //remove o primeiro elemento do array e reoordena todos os índices

echo array_pop($alunos2022) . PHP_EOL; //remover o ultimo elemento do array e reoordena todos os índices

//eles remover o elemento e retornam.

var_dump($alunos2022);
