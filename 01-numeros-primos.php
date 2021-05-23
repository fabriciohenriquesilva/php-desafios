<?php

/* Faça um programa que lista todos os números ímpares entre 0 e 100 */

for($i = 0; $i <= 100; $i++){
    if($i % 2 != 0){
        echo "$i" . PHP_EOL;
    }
}