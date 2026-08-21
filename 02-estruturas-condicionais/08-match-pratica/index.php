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

$statusDoPedido = "enviado";

$mensagem = match ($statusDoPedido){
    "pendente" => "seu pedido está sendo processado!",
    "enviado" => "seu pedido está a caminho!",
    "entregue" => "pedido entregue com sucesso!",
    "cancelado" => "pedido cancelado!",
    default => "status desconhecido",
};
echo "<p>a situação do sei pedido é de {$statusDoPedido}</p>";