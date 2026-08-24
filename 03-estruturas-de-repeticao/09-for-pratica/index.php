<?php

$planoSpotify = 31.90;


for($mes = 1; $mes <= 12; $mes += 1){
    echo "<p>{$planoSpotify}</p>";
    $planoSpotify += 31.90;
};

$parcelaCarro = 1600;
$parcela68 = 0;
for($parcela = 1; $parcela <= 80; $parcela += 1){
    if($parcela === 68){
        $parcela68 = $parcelaCarro;
    }
    
        echo "<p> o total acumulado do mes {$parcela}: {$parcelaCarro} reais</p>";
        $parcelaCarro += 1600;
}
    echo "<p>o valor da parcela 68 é de{$parcela68}</p>";