<?php

function maiorValor($numeros) {
    $maior = $numeros[0];
    
    foreach ($numeros as $item) {
        if ($item > $maior) {
            $maior = $item;
        }
    }
    return $maior;
}

$numeros = [3, 7, 2, 9, 4];

$resultado = maiorValor($numeros);

echo 'Resultado: ' . $resultado . "\n";

?>