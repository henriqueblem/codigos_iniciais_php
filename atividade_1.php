<?php

//Atividade 1

echo "Meu nome é Henrique";
echo "\n";

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é: " . $media . "\n";

$metros = 2.5;
$centimetros = $metros * 100;

echo "$metros metros é igual a $centimetros centímetros.\n";

//Para ano bissexto


$ano = 2025;
$timestamp = mktime(0, 0, 0, 1, 1, $ano);
$isLeapYear = date('L', $timestamp);

if ($isLeapYear) {
    echo "$ano é um ano bissexto.";
} else {
    echo "$ano não é um ano bissexto.";
}

echo "\n";

//Celsius para Fahrenheit

function celsiusParaFahrenheit($celsius) {
  $fahrenheit = ($celsius * 9/5) + 32; // Ou ($celsius * 1.8) + 32
  return $fahrenheit;
}

// Exemplo de uso:
$temperaturaCelsius = 25;
$temperaturaFahrenheit = celsiusParaFahrenheit($temperaturaCelsius);

echo "{$temperaturaCelsius}°C é igual a {$temperaturaFahrenheit}°F";

echo "\n";

echo "Fim da atividade 1.\n"

?>