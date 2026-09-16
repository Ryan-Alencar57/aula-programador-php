<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formulários — Método POST - Exercício");?>

<?php
$contas = [
    ["nome" => "Ryan Alencar", "email" => "alencar@email.com","contato" => "9940028922", "senha" => "282828", "cpf" => "11187827398", "plano" => "mensal plus" ]
];

$nome = $_POST["nome"];
$email = $_POST["email"];
$contato = $_POST["contato"];
$senha = $_POST["senha"];
$confirmarSenha = $_POST["confirmarSenha"];
$cpf = $_POST["cpf"];
$plano = $_POST["plano"];


if(empty($nome) || empty($email) || empty($contato) || empty($senha)  || empty($confirmarSenha) || empty($cpf) || empty($plamo)){
    echo "<p>Informe seus dados corretamente.</p>";
};