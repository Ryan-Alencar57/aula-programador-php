<?php

$tamanhoDoOmbro = 42;

$tamanhoCamisa= match ($tamanhoDoOmbro){
    42 => "P",
    44 => "M",
    46 => "G",
    48 => "GG",
    default => null,
};
echo "<p>O tamanho da sua camisa é de {$tamanhoCamisa}</p>";