<?php

$playlist = [
    "Evidências",
    "Garota de Ipanema",
    "Tempo Perdido",
    "Anunciação",
    "Mina de Condomínio",
    "Oração"
    ];

foreach ($playlist as $musica) {
    echo "$musica <br>";
}


echo "Quantidade de músicas na playlist: " . count($playlist);