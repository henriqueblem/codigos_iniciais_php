<?php

//Escrever um programa que exibe apenas n° impares de 0 a 100

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
