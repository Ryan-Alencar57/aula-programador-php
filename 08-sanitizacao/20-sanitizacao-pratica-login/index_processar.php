<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento da Avaliação");
?>

<?php senacClassSession("Processamento da avaliação", __LINE__); ?>

<?php

// A lógica de sanitização e validação será construída aqui, em aula, junto com a turma.
// Campos disponíveis: $_POST["nota"], $_POST["comentario"], $_POST["email"]
//
// Lembrete: a nota deve ser validada com FILTER_VALIDATE_INT (não intval()),
// para conseguir REJEITAR uma entrada inválida em vez de aceitar como 0.



$nota = filter_input(INPUT_POST, "nota", FILTER_VALIDATE_FLOAT);
$comentario = filter_input(INPUT_POST, "comentario", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if(empty($nota) || empty($comentario) || empty($email)){
     echo "<p>Informe todos os dados obrigatorios</p>";
    die;
};

if($nota === false){
    echo "<p>informe uma nota válida</p>";
    die;
}else if($nota < 0 || $nota > 10){
    echo "<p>informe uma nota válida</p>";
    die;
};
echo "<p>você deu a nota {$nota}! obrigado pela sua avaliação.</p>";
echo htmlspecialchars("<p>$comentario</p<");
echo"<br>";
echo strip_tags("<p>{$email}</p>");





senacFooter("Pedro Leandro");
