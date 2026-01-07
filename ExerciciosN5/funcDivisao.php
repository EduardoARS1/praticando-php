<?php

function dividir ($a, $b) {
    if ($b == 0) {
        return 'erro';
    }
    else {
        return $a / $b;
    }
}

$resultado = dividir(5,5);

echo 'Resultado: ' . $resultado . "\n";

?>