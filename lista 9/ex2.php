<?php

$seguidores =["maria", "julia.23", "manuu"];
$soma = 0;

foreach($seguidores as $pessoas){
    echo "$pessoas <br>";
    $soma = $soma + 1;
}
echo "A primeira posição da lista é: $seguidores[0]";