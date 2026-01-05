<?php

function verificarParidade ($numero) {
    if ($numero % 2 == 0) {
        return 'par';
    }
    else {
        return 'ímpar';
    }
}

$resultado = verificarParidade(7);

echo 'Resultado: ' . $resultado . "\n";

?>