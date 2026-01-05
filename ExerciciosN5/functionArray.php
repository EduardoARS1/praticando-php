<?php

function somarArray ($valores) {
    $total = 0;
    foreach ($valores as $item) {
        $total = $total + $item;
    }
    return $total;
}

$valores = [5, 10, 15];

$resultado = somarArray($valores);

echo 'Resultado: ' . $resultado . "\n";

?>