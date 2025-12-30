<?php

$idade = 15;

if ($idade >= 18) {
    echo 'Classificação: adulto'. "\n";
}
elseif ($idade >= 12 && $idade <= 17) {
    echo 'Classificação: adolescente' . "\n";
}
else {
    echo 'Classificação: criança' . "\n";
}

?>