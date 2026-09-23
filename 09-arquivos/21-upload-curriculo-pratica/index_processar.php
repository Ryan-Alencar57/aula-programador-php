<?php

$curriculo = $_FILES["curriculo"];

if(!isset($curriculo) || $curriculo["error"] !== UPLOAD_ERR_OK){
    echo "<p>Erro ao enviar arquivo: não existe ou está corrompido</p>";
    die;
}

const TAMANHO_MAXIMO = 5 * 1024 * 1024;

if($curriculo["size"] > TAMANHO_MAXIMO){
    echo "<p>Erro ao enviar arquivo: excedeu o tamanho máximo permitido</p>";
    die;
}

$extensoesPermitidas = [
    "pdf",
    "docx"
];

$extensoesCurriculo = mb_strtolower(pathinfo($curriculo["name"], PATHINFO_EXTENSION));

IF(!in_array($extensoesCurriculo, $extensoesPermitidas)){
     echo "<p>Erro ao enviar arquivo:extesão não permitida</p>";
    die;
}

$mimeTypesPermitidos = [
    "application/pdf", "application/msword"
];

$mimeTypeCurriculos = mime_content_type($curriculo["tmp_name"]);

if(!in_array($mimeTypeCurriculos, $mimeTypesPermitidos)){
    echo "<p>Erro ao enviar arquivo: conteudo do arquivo não permitido.</p>";
    die;
}

$novoNomeCurriculo = uniqid() . "." . $extensoesCurriculo;
$salvarCurriculo = __DIR__ . "/uploads/docx/" . $novoNomeCurriculo;

if(move_uploaded_file($curriculo["tmp_name"], $salvarCurriculo)){
    echo "<p>Parabéns! Curriculo enviado com sucesso!</p>";
}else{
    echo "<p> Erro ao enviar arquivo: não foi possível enviar seu currículo.</p>";
}