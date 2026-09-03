<?php
$opcao = 2;
echo "Bem vindo a ALARES INTERNET<br>";
echo "1 - suporte técnico<br>";
echo "2 - segunda via da fatura<br>";
echo "3 - falar com atendente<br>";
echo "4 - sair<br> <br>";

switch($opcao) {
    case 1:
        echo "Você escolheu: suporte técnico";
        break;
    case 2:
        echo "Você escolheu: segunda via da fatura";
        break;
    case 3:
        echo "Você escolheu: falar com atendente";
        break;
    case 4:
        echo "Você escolheu: sair";
        break;
    default: 
        echo "Opção inválida";
        break;
}