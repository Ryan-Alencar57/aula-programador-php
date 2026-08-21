<?php 

$condicaoAtual = "afastado";

$mensagem = match ($condicaoAtual){
    "matriculado" => "sua matricula está em dia e poderá acessar suas aulas normalmente.",
    "afastado" => "sua permissão de acesso as aulas foi temporariamente revogada.",
    "graduado" => "Parabens pela sua graduação!",
    "desistente" => "sua matricula não está mais ativa",    
    "devedor" => "renove seu plano para continuar",
    default => "situação invalida verifique pessoalmente com o atendente"
};
echo "<p>{$mensagem}</p>";