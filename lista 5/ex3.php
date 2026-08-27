<?php

$nota1 = "7";
$nota2 = "5";
$nota3 = "10";

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado direto!";
}
elseif ($media >= 5 && $media < 7) {
    echo "Tem direito a recuperação!";
}

else {
    echo "Reprovado";
}

?>