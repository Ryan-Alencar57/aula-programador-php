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

function verificarMaiorIdade(int $anoNascimento){
    $idade = 2026 - $anoNascimento;
   if($idade < 18){
    return false;
   } else if($idade >= 18){
    return true;
   }
}
if(verificarMaiorIdade(2000) === true){
    echo "<p>você é maior de idade!</p>";
}else {
    echo"<p>você é menor de idade!</p>";
}
if(verificarMaiorIdade(2010) === true){
    echo "<p>você é maior de idade!</p>";
}else {
    echo"<p>você é menor de idade!</p>";
}

function calcularIdade2(int $anoNascimento, string $nome = ""){
    $idade = 2026 - $anoNascimento;
    return $idade;
}
$idadedaFabricia = calcularIdade2(1998, "Fabricia");
echo calcularIdade2(2011) . " anos de idade";

function echo_p(string $string){
    echo "<p>{$string}</p>";
}

echo_p("eae fiote");
echo_p("mensagem interressante");

$comissao = 35000 * 0.2;

echo "R$ " . number_format($comissao, 2, ",", ".");

function calcularMedia(float $nota1, float $nota2, float $nota3, float $nota4){
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4;


$mediaDaEmilly = calcularMedia(10, 9, 8, 9);
$mediaDoRyan = calcularMedia(6 ,7 ,10, 10);

echo "<p>media da Emilly: </p>" . number_format($mediaDaEmilly, 1, ".");
}

$notasDaEmilly = [
    10, 9, 10, 8
];
function calcularMedia2(array $notas){
    $soma = 0;
    foreach($notas as $nota){
        $soma = $soma + $nota;
    }
    $media = $soma / count($notas);
    return $media;
}
echo "<br>";
echo calcularMedia2($notasDaEmilly);