<?php

//Escrever um código em php que remova os elementos duplicados de um array e retorne o array sem os elementos duplicados.

$array = array(1, 2, 2, 3, 4, 4, 5);
$semDuplicados = array_unique($array);
print_r($semDuplicados);

echo "\n\n";

//Percorra uma array notas (cada uma de 0 a 10) e calcule a média das notas. Em seguida, exiba a média calculada e se > 6 é aprovado, se não reprovado.

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota >= 6? "aprovado" : "reprovado";
    echo "Nota: $nota - Resultado: $resultado\n";
}

echo "\n\n";

$contaDoAssociado = [
    "nome" => "Henrique Freire",
    "Saldo" => "R$ " . 2750.03,
];

echo "O senhor $contaDoAssociado[nome] possui $contaDoAssociado[Saldo] em sua conta bancária\n";

echo "\n\n";

$familiares = [ "Adionir", "Keila", "Dominic", "Larissa"];
$familiares[] = "Karine"; //adiciona um elemento ao final do array

print_r($familiares);

echo "\n\n";

//Exemplos de loops em arrays usando o foreach:

$frutas = ["maçã", "banana", "laranja"];
foreach ($frutas as $fruta) {
    echo "Hoje nós temos $fruta.\n";
}

echo "\n\n";

$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor\n";
}

echo "\n\n";

//Carrinho de compras

echo "Carrinho de Compras:\n";

$carrinho = [
    "camiseta" => 29.90,
    "calça" => 89.90,
    "tênis" => 199.90
];

$total = 0;
foreach ($carrinho as $produto => $preco) {
    echo "$produto: R$ $preco\n";
    $total += $preco;
}
echo "Total: R$ $total";

echo "\n\n";

// Crie um array de produtos com nome e preço
$produtos = [
    ["nome" => "Notebook", "preco" => 2500],
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Teclado", "preco" => 120]
];

// Calcule o total e mostre cada produto
$total = 0;
foreach ($produtos as $produto) {
    echo "{$produto['nome']}: R$ {$produto['preco']}\n";
    $total += $produto['preco'];
}
echo "Valor total: R$ $total\n";

echo "\n\n";





//foreach: Para percorrer arrays e objetos.

//for: Quando você sabe o número exato de iterações.

//while: Quando a condição de parada é complexa.