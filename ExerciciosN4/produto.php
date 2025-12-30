<?php

$produto = [
    'nome' => 'Notebook',
    'preco' => '3500',
    'estoque' => 12
];

foreach ($produto as $chave => $valor) {
    echo $chave . ': ' . $valor . "\n";
}

?>