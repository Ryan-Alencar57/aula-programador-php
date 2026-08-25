
        <?php

$senhaDigitada = "1234";
$senhaCorreta = "9999";
$tentativas = 0;

while ($senhaDigitada !== $senhaCorreta && $tentativas < 3) {
    $tentativas++;
            echo "<p>Tentativa {$tentativas}: senha incorreta.</p>";

    // simulando uma nova tentativa (num sistema real, viria de um formulário)
    $senhaDigitada = "1234";
    
}

if ($tentativas >= 3) {
    echo "Conta bloqueada por excesso de tentativas.";
}
 if ($senhaDigitada = $senhaCorreta){
    echo "<p>Bem vindo a sua conta!</p>";
 }





$estoqueAtual = 5;
$vendasRealizadas = 0;

while ($estoqueAtual > 0) {
    $estoqueAtual--;
    $vendasRealizadas++;
    echo "<p>Venda {$vendasRealizadas} realizada. Estoque restante: {$estoqueAtual}</p>";
}

echo "Estoque esgotado após $vendasRealizadas vendas.";

$filaAtendimento = 3;
$pessoasRestante = 0;

while($filaAtendimento !== $pessoasRestante){
    $filaAtendimento--;
    echo "<p>faltam {$filaAtendimento} pessoas na sua frente</p>";
}
