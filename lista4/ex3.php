<?php

$email = "ml@gmail.com";
$senha = "1234";

echo " Bem vindo ao FACEBOOK <br>";

if($email == "ml@gmail.com"  && $senha == "1234"){
    echo "Acesso liberado <br> ";
    header("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha invalido! ";
}