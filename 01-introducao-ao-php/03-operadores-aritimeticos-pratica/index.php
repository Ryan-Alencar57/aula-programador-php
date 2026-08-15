<?php

$valorDaHora = 30;
$QuantidadeDeHorasTrabalhadas = 160;

$salario = $valorDaHora * $QuantidadeDeHorasTrabalhadas;

echo "<p>o salario total é de R$ {$salario}</p>";

$quantidadeDeAmigos = 4;
$ValorDaComanda = 190;

$quantidadeDePessoas = $quantidadeDeAmigos++;
$ValorPorPessoa = $ValorDaComanda / $quantidadeDePessoas;

echo " <p>o valor que cada pessoa irá pagar é de R$ {$ValorPorPessoa}</p>";


$QuantidadeDeRacao = 20;
$consumoDiario = 2;

$consumototal = $QuantidadeDeRacao / $consumoDiario;

echo "<p> o tempo que levará para consumir toda a racao é de {$consumototal} dias </p>";