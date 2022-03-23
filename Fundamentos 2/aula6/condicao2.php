<?php

$idade = 16;
$numeroDePessoas = 1;

echo "Você poderá entrar se for maior de idade." .PHP_EOL;
echo "Ou se tiver 16/17 e estiver acompanhado(a)." .PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos". PHP_EOL;
    echo "Pode Entrar.";
}
else if ($idade >= 16 && $numeroDePessoas>1){

    echo "Você tem $idade anos e está acompanhado(a).". PHP_EOL;
    echo "Pode Entrar.";
}        
else{
   echo "Você não tem idade suficiente ainda, volte mais tarde.";
}
