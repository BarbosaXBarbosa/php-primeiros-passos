<?php

$bimestre1 = [
    'vinicius' => 6,
    'joao' => 8,
    'ana' => 10,
    'roberto' => 7,
    'maria' => 9,
];


$bimestre2 = [
    'joao' => 8,
    'ana' => 8,
    'maria' => 10,
    'julio' => 7
];


//var_dump(array_diff($bimestre1, $bimestre2)); //pega todos os elementos cuja os valores não esteja no outro elemento.

//var_dump(array_diff_key($bimestre1, $bimestre2)); //diferença utilizando as chaves como diferença

//var_dump(array_diff_assoc($bimestre1, $bimestre2));// compara tanto a chave quanto o valor

$alunosFaltantes = array_diff_key($bimestre1, $bimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


var_dump(array_combine($notasAlunos, $nomesAlunos));  // combina dois elemenos de um array, respectivamente o primeiro as chaves e o segundo vira os elementos
                                                      // se esses arrays não tiverem o mesmo tamanho da erro
var_dump(array_flip($alunosFaltantes));               //inverte chave e valor


//var_dump(array_keys($alunosFaltantes));   //pega as chaves de um array
//var_dump(array_values($alunosFaltantes));  //pega os valores de um array

