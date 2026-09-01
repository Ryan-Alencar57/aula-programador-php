<?php

function eaemlk (){
    echo "<p>eae mlk</p>";
}
for($contador = 0; $contador <3; $contador++){
    eaemlk();
}
// com parâmetros
function saudacao(string $nome){
    echo "<p>eae {$nome}, dboa?</p>";
}
saudacao("Ryan");
saudacao("Renan");
saudacao("Renatha");
saudacao(2569);
 function calcularIdade(int $anoNascimento){
    $idade = date("Y") - $anoNascimento; //2026 - $anoNascimento
echo "<p>Naceu em {$anoNascimento} e nesse ano você tem/terá {$idade} anos de idade.</p>";
}
calcularIdade(2000);
calcularIdade(2008);
//calcularIdade("Ryan"); erro int e string

function saudacaoPersonalizada (string $nome, string $saudacao = "seja muito bem vindo!"){
    echo "<p>eae, {$nome}. {$saudacao}</p>";
}
saudacaoPersonalizada("Reis");
saudacaoPersonalizada("Mery");

