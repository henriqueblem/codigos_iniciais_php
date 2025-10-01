<?php

echo "Bem-vindo ao Screem Match!\n";
echo "\n";

$nomeFilme = "Interestelar";
$anoDeLancamento = 2014;
$genero = "Ficção Científica";

$quantidadeDeNotas = $argc - 1; // Subtraindo 1 para não contar o nome do script(na posição 0)
$somadeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somadeNotas += $argv[$contador];
}

$notaDoFilme = $somadeNotas / $quantidadeDeNotas;


$planoPrime = true;
$inclusoNoPlano = $planoPrime || $anoDeLancamento < 2020;

echo "Filme: " . $nomeFilme . "\n"; //concatenação
echo "Ano de Lançamento: $anoDeLancamento\n"; //interpolação
echo "Nota do Usuário: $notaDoFilme\n";
echo "Gênero: $genero\n";

if ($anoDeLancamento >= 2024) {
    echo "O filme ainda é novo.\n";
} elseif ($anoDeLancamento > 2020 && $anoDeLancamento <= 2023) {
    echo "O filme ainda é recente.\n";
} else {
    echo "o filme é antigo.\n";
}

# Uma alternativa ao if/else é o switch/case, uma estrutura de múltipla escolha que permite testar uma variável contra vários valores possíveis.

switch ($notaDoFilme) {
    case 10:
        echo "Avaliação: Excelente!\n";
        break;
    case 9:
        echo "Avaliação: Muito Bom!\n";
        break;
    case 8:
        echo "Avaliação: Bom!\n";
        break;
    case 7:
        echo "Avaliação: Razoável!\n";
        break;
    case 6:
        echo "Avaliação: Regular!\n";
        break;
    default:
        echo "Avaliação: Ruim!\n";
        break;
}

//Operadores ternários são uma forma concisa de expressar uma condição if/else em uma única linha.

// $resultado = $expressao1 ? expressao2 : expressao3;
//Exemplo:
# $avaliacao = ($mediaNotas >= 9) ? "Excelente" : (($mediaNotas >= 7) ? "Bom" : "Regular");



