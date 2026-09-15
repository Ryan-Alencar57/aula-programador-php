<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Cadastro de Conta");
?>

<?php senacClassSession("Formulário de cadastro", __LINE__); ?>

<form action="index_processar.php" method="POST">
    <input type="text" name="nome" placeholder="Nome completo" value="Ryan Alencar"><br>
    <input type="email" name="email" placeholder="E-mail" value="ryan@gmail.com"><br>
    <input type="password" name="senha" placeholder="Senha"><br>
    <input type="password" name="confirmarSenha" placeholder="Confirmar senha"><br>
    <button type="submit">Criar conta</button>
</form>

<?php
senacFooter("Pedro Leandro");
?>
