<?php

require_once ('funcoes.php');

$contasCorrente = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.987-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.654.789-12' => [
        'titular' => 'Alberto',
        'saldo'  => 300
    ]
];

$contasCorrente['123.456.789-10'] = sacar($contasCorrente['123.456.789-10'],500);
$contasCorrente['123.654.789-12'] = sacar($contasCorrente['123.654.789-12'],200);
$contasCorrente['123.456.987-11'] = depositar($contasCorrente['123.456.987-11'],500);

letrasMaisculas($contasCorrente['123.456.987-11']);


unset ($contasCorrente['123.456.987-11']);

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrente as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php }; ?>
    </dl>
</body>
</html>

