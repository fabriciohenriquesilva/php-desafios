<?php

$peso = 51; //em kg
$altura = 1.70; //em metros

$imc = $peso / ($altura ** 2);

echo "Seu IMC é $imc. Você está com ";

if($imc < 16){
    echo "Subpeso Severo.";
}
else if($imc >= 16 && $imc < 20){
    echo "Subpeso.";
}
else if($imc >= 20 && $imc < 25){
    echo "peso normal.";
}
else if($imc >= 25 && $imc < 30){
    echo "Sobrepeso.";
}
else if($imc >= 30 && $imc < 40){
    echo "Você está Obeso.";
}
else {
    echo "Obesidade Mórbida.";
}