<?php

$nome = "Maria";
$senha = "123456";
$confirmar_senha = "123356";
$data_nascimento = "26-03-2010";

if($nome == "Maria"){
    echo "Nome correto!<br>";
}
else{
    echo "Nome incorreto!<br>";
}


if($senha == $confirmar_senha){
    echo "Senha confirmada!<br>";
}
else{
    echo "Senha não confirmada!<br>";
}

echo "Data de nascimento: $data_nascimento<br>";