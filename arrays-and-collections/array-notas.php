<?php

$notas = [
    'vinicius' => null,
    'joao' => 8,
    'ana' => '10',
    'roberto' => 7,
    'maria' => 9,
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

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas)); //strings númericas, o PHP converte strings numericas em números: ==

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true)); // porem se voce quiser uma verificação mais rigoras: ===, é só adicionar o true

echo 'Quem tirou 6?' . PHP_EOL;
var_dump(array_search(6, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas));

echo 'Quem tirou 8?' . PHP_EOL;
var_dump(array_search('8', $notas, true)); //essa função tbm tem uma pesquisa mais restrita: ===



//array_key_exixts = verifica se a chave existe
// in_array =verifica se o valor existe 
//isset =verifica se a chave existe e não é nula
//array_search = verifica se existe o valor, se existir retorna a chave que este valor se encontra.