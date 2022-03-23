<?php

$idade = 19;
$nome = "Rafael";

echo "Você poderá entrar se for o Rafael e ter 18 anos." .PHP_EOL;

if ($idade >= 18 and $nome == "Rafael"){
    echo "Você tem $idade anos". PHP_EOL;
    echo "Pode Entrar.";
}
else{
    echo "Você não tem idade suficiente ainda, volte mais tarde.";
}