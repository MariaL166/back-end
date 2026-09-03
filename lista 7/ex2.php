<?php

function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Você é maior de idade. pode tirar carta.<br><br>";
    } else {
        return "Você é menor de idade. Só de uber mesmo.<br><br>";
    }
}
echo verificarIdade(17);
echo verificarIdade(20);
echo verificarIdade(15);
echo verificarIdade(30);
