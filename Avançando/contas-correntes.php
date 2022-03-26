<?php

$conta1 = [
'nome' => 'Rafael',
'saldo' => 1000
];

$conta2 = [
    'nome' => 'Thiago',
    'saldo' => 5000
    ];
    
$conta3 = [
    'nome' => 'Bruno',
    'saldo' => 4000
    ];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i =0; $i<count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['nome'].PHP_EOL;
};