<?php

$notas = [
    'vinicius' => null,
    'joao' => 8,
    'ana' => 10,
    'roberto' => 7,
    'maria' => 9
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim é um array' . PHP_EOL;
}

echo 'Vinicius fez a prova:' . PHP_EOL;   
var_dump(isset($notas['vinicius']));     //isset verifica se uma variável esta definida

echo 'Ana fez a prova:';
var_dump(array_key_exists('ana', $notas));  //verifica se existe uma chave

echo 'marcelo esta na lista da prova:';
var_dump(array_key_exists('marcelo', $notas));
