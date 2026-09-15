<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento do Cadastro");
?>

<?php senacClassSession("Processamento do cadastro", __LINE__); ?>

<?php
$contas = [
    ["nome" => "Ana Souza", "email" => "ana@email.com", "senha" => "123456"],
];

// A lógica de cadastro será construída aqui, em aula, junto com a turma.

$nome = $_POST["email"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmarSenha = $_POST["confirmarSenha"];

if(empty($nome) || empty($email) || empty($senha)  || empty($confirmarSenha)){
    echo "<p>Informe seus dados corretamente.</p>";
    die;
}
 if($senha !== $confirmarSenha){
    echo "<p>erro ao cadastrar: as senhas não coincidem.</p>";
    die;
 }

 $contas[] = [
    "nome" => $nome,
    "email" => $email,
    "senha" => $senha
 ];

echo "<p>conta criada com sucesso!</p>";

var_dump($contas);

?>

<?php
senacFooter("Pedro Leandro");
?>
