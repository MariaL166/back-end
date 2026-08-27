<?php
// Simulando o cálculo de IMC

$peso = 80;
$altura = 1.70;

$resultado = $peso / ($altura * $altura);

if($resultado > 19 && $resultado < 24){
    echo "Abaixo do peso";
}
elseif($resultado > 25 && $resultado <29){
    echo "Peso ideal";
}
elseif($resultado > 30 && $resultado <34){
    echo "Sobrepeso";
}
elseif($resultado > 30 && $resultado <39){
    echo "Obesidade Grau I";
}
elseif($resultado <= 40){
    echo "Obesidade Grau II";
}
else{
    echo "Obesidade Grau III";
}