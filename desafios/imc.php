<?php

$peso = 20;
$altura = 1.65;

$imc = $peso / $altura **2;

if ($imc < 18.5) {
    echo "Seu IMC é: $imc" . PHP_EOL . "Você esta abaixo da média.";
}else if ($imc > 18.5 && $imc < 24.9) {
    echo "Seu IMC é: $imc" . PHP_EOL ."Você esta com o imc na média";
}else {
    echo "Seu IMC é: $imc" . PHP_EOL ."Você esta acima da média";
}