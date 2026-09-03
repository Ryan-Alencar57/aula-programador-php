<?php

/* =====================================================================
   GABARITO — Lista de Exercícios: Funções
   Professor: Pedro Leandro | SENAC Caxias — Programador Web
   ===================================================================== */


/* ---------------------------------------------------------------------
   QUESTÃO 1 — Sistema de Estoque
   Calcula o valor total de um produto em estoque (quantidade x preço).
   --------------------------------------------------------------------- */
$produtoEmEstoque = 100;
$precoProduto = 23;
   function calcularValorEmEstoque(int $produtoEmEstoque, float $precoProduto){
     return $produtoEmEstoque * $precoProduto;
   };
$valorTotal = calcularValorEmEstoque(100, 23);
echo "<p>{$valorTotal}</p>";


/* ---------------------------------------------------------------------
   QUESTÃO 2 — Sistema Financeiro Pessoal
   Formata um valor numérico no padrão brasileiro de dinheiro,
   usando a função nativa number_format().
   --------------------------------------------------------------------- */



   function formatarValorGasto(float $bolsoFundo){
      return number_format($bolsoFundo, 2 , ",", ".");
   }
   echo "R$", formatarValorGasto(4000000);


/* ---------------------------------------------------------------------
   QUESTÃO 3 — Biblioteca Municipal
   Calcula a multa por atraso na devolução de um livro.
   Os 3 primeiros dias são tolerados sem cobrança.
   Cada dia de atraso além disso custa R$ 1,00.
   --------------------------------------------------------------------- */



function calcularMulta(int $diasAtrasado){
   if ($diasAtrasado > 3){
      $cobranca = $diasAtrasado - 3
      } if else($diasAtrasado <= 3){
      $cobranca = 0;
   }
   return $cobranca;
}
echo calcularMulta(7);



/* ---------------------------------------------------------------------
   QUESTÃO 4 — Chamados de Manutenção
   Conta quantos chamados, dentro de um array de status,
   ainda estão como "pendente". Usa foreach e count().
   --------------------------------------------------------------------- */



/* ---------------------------------------------------------------------
   QUESTÃO 5 — Banco de Talentos de Egressos
   Calcula a pontuação de compatibilidade de um egresso com uma vaga,
   com base no nível de experiência, e um bônus opcional de certificação.

   Iniciante = 40 pontos | pleno = 70 pontos | sênior = 100 pontos
   com certificação relevante: +10 pontos (parâmetro opcional)
   --------------------------------------------------------------------- */

