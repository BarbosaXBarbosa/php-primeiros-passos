<?php

/*$dados = ['vinicius', 10, 24];

list($nome, $notas, $idade) = $dados;

var_dump($nome, $notas, $idade);
*/

/*
$dados = [
    'nome'=>'vinicius', 
    'nota' => 10, 
    'idade' => 24
];
 ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

 var_dump($nome, $nota, $idade);  
*/

 //list = crie variaveis depedendo da posição dos elementos de um array

 //------------------------------------------------------------------------------

 $dados = [
    'nome'=>'vinicius', 
    'nota' => 10, 
    'idade' => 24
];

extract($dados);                            //extract pode ser um função perigosa se você extrair variaveis de fontes nao confiáveis
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); //compacta as variavéis e suas atribuições a um array