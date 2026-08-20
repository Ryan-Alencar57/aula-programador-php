<?php
const FUNCIONARIO = "funcionario";
const EMPRESA = "empresa";

$tipoDeUsuario = "funcionario";

$salarioBruto = 5000.00;
if($tipoDeUsuario === FUNCIONARIO){
    $descontoInss =  0;
    $impostoDeRenda = 0;
    $salarioLiquido = 0;
    
    if($salarioBruto <=1621){
        $aliquotaInss = 0.075;
    } else if($salarioBruto > 1621 && $salarioBruto<= 2902.84){
        $aliquotaInss = 0.09;
    } if($salarioBruto > 2902.94 && $salarioBruto <= 4354.27){
    $aliquotaInssn = 0.12;
    } else if($salarioBruto > 4354.27){
        $aliquotaInss = 0.14;
    }

    $descontoInss = $salarioBruto * $aliquotaInss;
    if($salarioBruto > 5000){
        $impostoDeRenda = $salarioBruto * 0.15;
    }

    $salarioLiquido = $salarioBruto - $descontoInss - $impostoDeRenda;
    echo "<p>Salario bruto : {$salarioBruto}</p>";
    echo "<p> Desconto INSS : {$descontoInss}</p>";
    echo "<p>I.R. : " . ($impostoDeRenda === 0 ? "ISENTO":$impostoDeRenda) ."</p>";
    echo "<p> Salario Liquido : {$salarioLiquido}</p>";
}



