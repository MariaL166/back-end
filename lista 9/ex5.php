<?php

$celulares = [
    "(11) 99999-1111",
    "(11) 98888-2222",
    "(11) 97777-3333",
    "(11) 96666-4444",
    "(11) 95555-5555"
];

foreach ($celulares as $celular) {
    echo "$celular <br>";
}

echo "Total de contatos: " . count($celulares);