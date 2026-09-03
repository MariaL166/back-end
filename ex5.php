<?php

$opcao = 2;

echo '<h1 style="color: red;"> MARIO BROS</h1> <br>';
echo "1 Jogar <br>";
echo "2 Ver personagens <br>";
echo "3 Ver ranking <br>";
echo "4 Configurações <br>";
echo "5 Sair <br><br>";

switch ($opcao) {
    case 1:
        echo "Você escolheu: Jogar";
        break;

    case 2:
        echo "Você escolheu: Ver personagens <br><br>";
        echo "1. Mario <br>";
        echo "2. Luigi <br>";
        echo "3. Princesa Peach <br>";
        break;

    case 3:
        echo "Você escolheu: Ver ranking <br><br>";
        echo "1. MarioFan99 <br>";
        echo "2. YoshiPro <br>";
        echo "3. LuigiMaster <br>";
        break;

    case 4:
        echo "Você escolheu: Configurações";
        break;

    case 5:
        echo "Você escolheu: Sair";
        break;

    default:
        echo "Opção inválida!";
        break;
}