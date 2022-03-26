<?php
    $contasCorrentes = [
       1=> [
        'nome' => 'Rafael',
        'saldo' => 1000
        ], 
       2=>  [
        'nome' => 'Thiago',
        'saldo' => 5000
        ], 
       3=> ['nome' => 'Bruno',
        'saldo' => 4000]
    ];
    $contasCorrentes[4] =[
        'nome' => 'Maria',
        'saldo' => 2000
    ];

    foreach($contasCorrentes as $cpf => $conta){
        echo $conta['nome'] . " - ";
        echo $cpf . PHP_EOL;
    }