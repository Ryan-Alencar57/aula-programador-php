<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formulários — Método POST - Exercício")?>


<form action="index_processar.php" method="POST">
    <input type="text" name="nome" placeholder="Nome completo"><br>
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="number" name="contato" placeholder="Contato"><br>
    <input type="password" name="senha" placeholder="Senha"><br>
    <input type="password" name="confirmarSenha" placeholder="Confirmar senha"><br>
    <input type="number" name="cpf" placeholder="CPF"><br>
    <input type="text" name="plano" placeholder="Plano"><br>
    <button type="submit">Criar conta</button>
</form>